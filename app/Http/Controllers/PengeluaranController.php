<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengeluaran = Pengeluaran::all();
        // return view("pengeluaran.index", compact("pengeluaran"));
        return response()->json($pengeluaran);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("pengeluaran.create");
        return response()->json(Pengeluaran::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pengeluaran = Pengeluaran::create($request->all());
        // return redirect()->route("pengeluaran.index")->with("success","");
        return response()->json($pengeluaran);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengeluaran = Pengeluaran::find($id);
        // return view("pengeluaran.show", compact("pengeluaran"));
        return response()->json(($pengeluaran) ? $pengeluaran : null,404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengeluaran = Pengeluaran::find($id);
        // return view("pengeluaran.edit", compact("pengeluaran"));
        return response()->json(($pengeluaran) ? $pengeluaran : null,404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pengeluaran = Pengeluaran::find($id);
        $pengeluaran->update($request->all());
        // return redirect()->route("pengeluaran.index")->with("success","");
        return response()->json(($pengeluaran) ? $pengeluaran : null,404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengeluaran = Pengeluaran::find($id);
        $pengeluaran->delete();
        // return redirect()->route("pengeluaran.index")->with("success","");
        return response()->json(($pengeluaran) ? $pengeluaran : null,404);
    }
}
