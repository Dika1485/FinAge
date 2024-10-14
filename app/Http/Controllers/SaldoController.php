<?php

namespace App\Http\Controllers;

use App\Models\Saldo;
use Illuminate\Http\Request;

class SaldoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $saldo = Saldo::all();
        // return view("saldo.index", compact("saldo"));
        return response()->json($saldo);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("saldo.create");
        return response()->json(Saldo::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $saldo = Saldo::create($request->all());
        // return redirect()->route("saldo.index")->with("success","");
        return response()->json($saldo);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $saldo = Saldo::find($id);
        // return view("saldo.show", compact("saldo"));
        return response()->json(($saldo) ? $saldo : null,404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $saldo = Saldo::find($id);
        // return view("saldo.edit", compact("saldo"));
        return response()->json(($saldo) ? $saldo : null,404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $saldo = Saldo::find($id);
        $saldo->update($request->all());
        // return redirect()->route("saldo.index")->with("success","");
        return response()->json(($saldo) ? $saldo : null,404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $saldo = Saldo::find($id);
        $saldo->delete();
        // return redirect()->route("saldo.index")->with("success","");
        return response()->json(($saldo) ? $saldo : null,404);
    }
}
