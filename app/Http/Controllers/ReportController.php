<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::where('user_id', Auth::user()->id)->get();

        return view('report.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('report.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Memvalidasi inputan dari form
        $request->validate([
            'province' => 'required',
            'regency' => 'required',
            'subdistrict' => 'required',
            'village' => 'required',
            'type' => 'required',
            'description' => 'required|min:128',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2028',
        ]);

        // Memeriksa apakah file image ada dan valid
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Membuat nama file baru yang unik
            $fileName = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();

            // Menyimpan gambar ke folder storage/public/images
            $imagePath = $request->file('image')->storeAs('images', $fileName, 'public');

        } else {
            // Menangani kasus jika file tidak valid
            return redirect()->back()->with('error', 'Gambar yang diupload tidak valid.');
        }

        // Menyimpan laporan ke database
        $data =  [
            'user_id' => Auth::user()->id,
            'province' => $request->province,
            'regency' => $request->regency,
            'subdistrict' => $request->subdistrict,
            'village' => $request->village,
            'type' => $request->type,
            'description' => $request->description,
            'image' => $imagePath,
        ];

        if ($data && Auth::check()) {
            Report::create($data);
            return redirect()->back()->with('success', 'Berhasil membuat pengaduan!');
        } else {
            // Menangani kesalahan yang mungkin terjadi selama proses penyimpanan
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengupload file atau menyimpan data');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }

    public function article() {
        return view('article.index');
    }
}
