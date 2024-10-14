<?php

namespace App\Http\Controllers;

use App\Models\Anggaran;
use Illuminate\Http\Request;
use Response;

class AnggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggaran = Anggaran::all();
        // return view("anggaran.index", compact("anggaran"));
        return response()->json($anggaran);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("anggaran.create");
        return response()->json(Anggaran::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $anggaran = Anggaran::create($request->all());
        // return redirect()->route("anggaran.index")->with("success","");
        return response()->json($anggaran);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $anggaran = Anggaran::find($id);
        // return view("anggaran.show", compact("anggaran"));
        return response()->json(($anggaran) ? $anggaran : null,404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anggaran = Anggaran::find($id);
        // return view("anggaran.edit", compact("anggaran"));
        return response()->json(($anggaran) ? $anggaran : null,404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $anggaran = Anggaran::find($id);
        $anggaran->update($request->all());
        // return redirect()->route("anggaran.index")->with("success","");
        return response()->json(($anggaran) ? $anggaran : null,404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anggaran = Anggaran::find($id);
        $anggaran->delete();
        // return redirect()->route("anggaran.index")->with("success","");
        return response()->json(($anggaran) ? $anggaran : null,404);
    }
}
