<?php

namespace App\Http\Controllers;

use App\Models\Mata_uang;
use Illuminate\Http\Request;

class Mata_uangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mata_uang = Mata_uang::all();
        // return view("mata_uang.index", compact("mata_uang"));
        return response()->json($mata_uang);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("mata_uang.create");
        return response()->json(Mata_uang::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mata_uang = Mata_uang::create($request->all());
        // return redirect()->route("mata_uang.index")->with("success","");
        return response()->json($mata_uang);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mata_uang = Mata_uang::find($id);
        // return view("mata_uang.show", compact("mata_uang"));
        return response()->json(($mata_uang) ? $mata_uang : null,404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mata_uang = Mata_uang::find($id);
        // return view("mata_uang.edit", compact("mata_uang"));
        return response()->json(($mata_uang) ? $mata_uang : null,404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mata_uang = Mata_uang::find($id);
        $mata_uang->update($request->all());
        // return redirect()->route("mata_uang.index")->with("success","");
        return response()->json(($mata_uang) ? $mata_uang : null,404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mata_uang = Mata_uang::find($id);
        $mata_uang->delete();
        // return redirect()->route("mata_uang.index")->with("success","");
        return response()->json(($mata_uang) ? $mata_uang : null,404);
    }
}
