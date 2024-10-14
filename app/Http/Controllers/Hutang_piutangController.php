<?php

namespace App\Http\Controllers;

use App\Models\Hutang_piutang;
use Illuminate\Http\Request;

class Hutang_piutangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hutang_piutang = Hutang_piutang::all();
        // return view("hutang_piutang.index", compact("hutang_piutang"));
        return response()->json($hutang_piutang);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("hutang_piutang.create");
        return response()->json(Hutang_piutang::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hutang_piutang = Hutang_piutang::create($request->all());
        // return redirect()->route("hutang_piutang.index")->with("success","");
        return response()->json($hutang_piutang);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hutang_piutang = Hutang_piutang::find($id);
        // return view("hutang_piutang.show", compact("hutang_piutang"));
        return response()->json(($hutang_piutang) ? $hutang_piutang : null,404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hutang_piutang = Hutang_piutang::find($id);
        // return view("hutang_piutang.edit", compact("hutang_piutang"));
        return response()->json(($hutang_piutang) ? $hutang_piutang : null,404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hutang_piutang = Hutang_piutang::find($id);
        $hutang_piutang->update($request->all());
        // return redirect()->route("hutang_piutang.index")->with("success","");
        return response()->json(($hutang_piutang) ? $hutang_piutang : null,404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hutang_piutang = Hutang_piutang::find($id);
        $hutang_piutang->delete();
        // return redirect()->route("hutang_piutang.index")->with("success","");
        return response()->json(($hutang_piutang) ? $hutang_piutang : null,404);
    }
}