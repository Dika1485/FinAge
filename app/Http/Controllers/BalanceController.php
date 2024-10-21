<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $balance = Balance::all();
        // return view("balance.index", compact("balance"));
        return response()->json($balance);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("balance.create");
        return response()->json(Balance::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $balance = Balance::create($request->all());
        // return redirect()->route("balance.index")->with("success","");
        return response()->json($balance)->with("success","");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $balance = Balance::find($id);
        if (!$balance) return response()->json(null,404);
        // return view("balance.show", compact("balance"));
        return response()->json($balance);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $balance = Balance::find($id);
        if (!$balance) return response()->json(null,404);
        // return view("balance.edit", compact("balance"));
        return response()->json($balance);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $balance = Balance::find($id);
        if (!$balance) return response()->json(null,404);
        $balance->update($request->all());
        // return redirect()->route("balance.index")->with("success","");
        return response()->json($balance)->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $balance = Balance::find($id);
        if (!$balance) return response()->json(null,404);
        $balance->delete();
        // return redirect()->route("balance.index")->with("success","");
        return response()->json(null)->with("success","");
    }
}
