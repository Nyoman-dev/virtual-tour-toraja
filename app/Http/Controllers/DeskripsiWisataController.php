<?php

namespace App\Http\Controllers;

use App\Models\DeskripsiWisata;
use Illuminate\Http\Request;

class DeskripsiWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.dashboard-deskripsi-wisata',[
            'items' => DeskripsiWisata::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required | string | min:3',
            'map' => 'required',
            'deskripsi' => 'required',
        ]);

        DeskripsiWisata::create($validatedData);
        return redirect()->back()->with('success', 'Data berhasil dtambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DeskripsiWisata $deskripsiWisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeskripsiWisata $deskripsi_wisatum)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DeskripsiWisata $deskripsi_wisatum)
    {
        $validatedData = $request->validate([
            'judul' => 'required | string | min:3',
            'map' => 'required',
            'deskripsi' => 'required',
        ]);
        DeskripsiWisata::where('id', $deskripsi_wisatum->id)->update($validatedData);
        return redirect()->back()->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeskripsiWisata $deskripsi_wisatum)
    {
        DeskripsiWisata::destroy($deskripsi_wisatum->id);
        return redirect()->back()->with('success', 'Data Berhasil DiHapus');
    }
}
