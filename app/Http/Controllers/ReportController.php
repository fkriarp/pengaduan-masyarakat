<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('report.index');
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
        $request->validate([
            'province' => 'required',
            'regency' => 'required',
            'subdistrict' => 'required',
            'village' => 'required',
            'type' => 'required',
            'description' => 'required|min:128',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);
    
        try {
            // Generate a unique file name using UUID
            $fileName = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
    
            // Store the image in the 'images' folder under public storage
            $imagePath = $request->file('image')->storeAs('images', $fileName, 'public');
    
            // Create a new report
            Report::create([
                'province' => $request->province,
                'regency' => $request->regency,
                'subdistrict' => $request->subdistrict,
                'village' => $request->village,
                'type' => $request->type,
                'description' => $request->description,
                'image' => $imagePath,
            ]);
    
            return redirect()->back()->with('success', 'Berhasil membuat pengaduan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengupload file atau menyimpan data.');
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
}
