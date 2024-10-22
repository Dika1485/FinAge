<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;
use Response;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $budget = Budget::all();
        // return view("budget.index", compact("budget"));
        return response()->json($budget);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("budget.create");
        return response()->json(Budget::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $budget = Budget::create($request->all());
        // return redirect()->route("budget.index")->with("success","");
        return response()->json($budget);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $budget = Budget::find($id);
        if (!$budget)
            return response()->json(null, 404);
        // return view("budget.show", compact("budget"));
        return response()->json($budget);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $budget = Budget::find($id);
        if (!$budget)
            return response()->json(null, 404);
        // return view("budget.edit", compact("budget"));
        return response()->json($budget);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $budget = Budget::find($id);
        if (!$budget)
            return response()->json(null, 404);
        $budget->update($request->all());
        // return redirect()->route("budget.index")->with("success","");
        return response()->json($budget);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $budget = Budget::find($id);
        if (!$budget)
            return response()->json(null, 404);
        $budget->delete();
        // return redirect()->route("budget.index")->with("success","");
        return response()->json(null);
    }
}