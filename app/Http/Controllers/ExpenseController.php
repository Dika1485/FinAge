<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expense = Expense::all();
        // return view("expense.index", compact("expense"));
        return response()->json($expense);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("expense.create");
        return response()->json(Expense::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $expense = Expense::create($request->all());
        // return redirect()->route("expense.index")->with("success","");
        return response()->json($expense);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $expense = Expense::find($id);
        if (!$expense)
            return response()->json(null, 404);
        // return view("expense.show", compact("expense"));
        return response()->json($expense);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $expense = Expense::find($id);
        if (!$expense)
            return response()->json(null, 404);
        // return view("expense.edit", compact("expense"));
        return response()->json($expense);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $expense = Expense::find($id);
        if (!$expense)
            return response()->json(null, 404);
        $expense->update($request->all());
        // return redirect()->route("expense.index")->with("success","");
        return response()->json($expense);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $expense = Expense::find($id);
        if (!$expense)
            return response()->json(null, 404);
        $expense->delete();
        // return redirect()->route("expense.index")->with("success","");
        return response()->json(null);
    }
}
