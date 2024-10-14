<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemasukan = Pemasukan::all();
        // return view("pemasukan.index", compact("pemasukan"));
        return response()->json($pemasukan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("pemasukan.create");
        return response()->json(Pemasukan::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pemasukan = Pemasukan::create($request->all());
        // return redirect()->route("pemasukan.index")->with("success","");
        return response()->json($pemasukan);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pemasukan = Pemasukan::find($id);
        // return view("pemasukan.show", compact("pemasukan"));
        return response()->json(($pemasukan) ? $pemasukan : null,404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pemasukan = Pemasukan::find($id);
        // return view("pemasukan.edit", compact("pemasukan"));
        return response()->json(($pemasukan) ? $pemasukan : null,404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pemasukan = Pemasukan::find($id);
        $pemasukan->update($request->all());
        // return redirect()->route("pemasukan.index")->with("success","");
        return response()->json(($pemasukan) ? $pemasukan : null,404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pemasukan = Pemasukan::find($id);
        $pemasukan->delete();
        // return redirect()->route("pemasukan.index")->with("success","");
        return response()->json(($pemasukan) ? $pemasukan : null,404);
    }
}
