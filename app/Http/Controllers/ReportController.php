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
        // Cek apakah user sudah login
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Validasi input
        $request->validate([
            'province' => 'required|string|max:255',
            'regency' => 'required|string|max:255',
            'subdistrict' => 'required|string|max:255',
            'village' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|min:128',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2028',
        ]);

        try {
            // Validasi data
            $validatedData = $request->validate([
                'province' => 'required|string|max:255',
                'regency' => 'required|string|max:255',
                'subdistrict' => 'required|string|max:255',
                'village' => 'required|string|max:255',
                'type' => 'required|string|max:50',
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // maksimal 2MB
            ]);
        
            // Simpan gambar
            $imagePath = $request->file('image')->store('images/' . date('Y/m/d'), 'public');

            function getName($name) {
                $result = explode("-", $name);
                return $result[1];
            }
        
            // Simpan data ke database
            Report::create([
                'user_id' => Auth::id(),
                'province' => getName($validatedData['province']),
                'regency' => getName($validatedData['regency']),
                'subdistrict' => getName($validatedData['subdistrict']),
                'village' => getName($validatedData['village']),
                'type' => $validatedData['type'],
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'image' => $imagePath,
            ]);
        
            return redirect()->back()->with('success', 'Berhasil membuat pengaduan!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Log error untuk debugging
            \Log::error('Error saat membuat pengaduan: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan, silakan coba lagi.');
        }
        
    }


    /**
     * Display the specified resource.
     */
    public function show(Report $report, $id)
    {
        $report = Report::where('id', $id)->first();

        return view('article.show', compact('report'));
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

    public function article(Request $request)
    {
        $reports = Report::when($request->filled('province'), function ($query) use ($request) {
            $query->where('province', $request->province);
        })->get();
    
        return view('article.index', compact('reports'));
    }
    

    public function dashboard()
    {
        $report = Report::where('user_id', Auth::user()->id)->count();
        $reports = Report::all()->count();

        return view('dashboard', compact('report', 'reports'));
    }
}
