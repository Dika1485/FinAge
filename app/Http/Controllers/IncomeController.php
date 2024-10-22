<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $income = Income::all();
        // return view("income.index", compact("income"));
        return response()->json($income);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("income.create");
        return response()->json(Income::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $income = Income::create($request->all());
        // return redirect()->route("income.index")->with("success","");
        return response()->json($income);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $income = Income::find($id);
        if (!$income)
            return response()->json(null, 404);
        // return view("income.show", compact("income"));
        return response()->json($income);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $income = Income::find($id);
        if (!$income)
            return response()->json(null, 404);
        // return view("income.edit", compact("income"));
        return response()->json($income);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $income = Income::find($id);
        if (!$income)
            return response()->json(null, 404);
        $income->update($request->all());
        // return redirect()->route("income.index")->with("success","");
        return response()->json($income);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $income = Income::find($id);
        if (!$income)
            return response()->json(null, 404);
        $income->delete();
        // return redirect()->route("income.index")->with("success","");
        return response()->json(null);
    }
}
