<?php

namespace App\Http\Controllers;

use App\Models\Laporan_bulanan;
use Illuminate\Http\Request;

class Laporan_bulananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporan_bulanan = Laporan_bulanan::all();
        // return view("laporan_bulanan.index", compact("laporan_bulanan"));
        return response()->json($laporan_bulanan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("laporan_bulanan.create");
        return response()->json(Laporan_bulanan::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $laporan_bulanan = Laporan_bulanan::create($request->all());
        // return redirect()->route("laporan_bulanan.index")->with("success","");
        return response()->json($laporan_bulanan);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $laporan_bulanan = Laporan_bulanan::find($id);
        // return view("laporan_bulanan.show", compact("laporan_bulanan"));
        return response()->json(($laporan_bulanan) ? $laporan_bulanan : null,404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $laporan_bulanan = Laporan_bulanan::find($id);
        // return view("laporan_bulanan.edit", compact("laporan_bulanan"));
        return response()->json(($laporan_bulanan) ? $laporan_bulanan : null,404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $laporan_bulanan = Laporan_bulanan::find($id);
        $laporan_bulanan->update($request->all());
        // return redirect()->route("laporan_bulanan.index")->with("success","");
        return response()->json(($laporan_bulanan) ? $laporan_bulanan : null,404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $laporan_bulanan = Laporan_bulanan::find($id);
        $laporan_bulanan->delete();
        // return redirect()->route("laporan_bulanan.index")->with("success","");
        return response()->json(($laporan_bulanan) ? $laporan_bulanan : null,404);
    }
}
