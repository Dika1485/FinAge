<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $investment = Investment::all();
        // return view("investment.index", compact("investment"));
        return response()->json($investment);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("investment.create");
        return response()->json(Investment::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $investment = Investment::create($request->all());
        // return redirect()->route("investment.index")->with("success","");
        return response()->json($investment);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $investment = Investment::find($id);
        if (!$investment)
            return response()->json(null, 404);
        // return view("investment.show", compact("investment"));
        return response()->json($investment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $investment = Investment::find($id);
        if (!$investment)
            return response()->json(null, 404);
        // return view("investment.edit", compact("investment"));
        return response()->json($investment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $investment = Investment::find($id);
        if (!$investment)
            return response()->json(null, 404);
        $investment->update($request->all());
        // return redirect()->route("investment.index")->with("success","");
        return response()->json($investment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $investment = Investment::find($id);
        if (!$investment)
            return response()->json(null, 404);
        $investment->delete();
        // return redirect()->route("investment.index")->with("success","");
        return response()->json(null);
    }
}
