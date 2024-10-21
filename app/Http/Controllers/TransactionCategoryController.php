<?php

namespace App\Http\Controllers;

use App\Models\TransactionCategory;
use Illuminate\Http\Request;

class TransactionCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaction_category = TransactionCategory::all();
        // return view("transaction_category.index", compact("transaction_category"));
        return response()->json($transaction_category);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("transaction_category.create");
        return response()->json(TransactionCategory::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaction_category = TransactionCategory::create($request->all());
        // return redirect()->route("transaction_category.index")->with("success","");
        return response()->json($transaction_category)->with("success","");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaction_category = TransactionCategory::find($id);
        if (!$transaction_category) return response()->json(null,404);
        // return view("transaction_category.show", compact("transaction_category"));
        return response()->json($transaction_category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaction_category = TransactionCategory::find($id);
        if (!$transaction_category) return response()->json(null,404);
        // return view("transaction_category.edit", compact("transaction_category"));
        return response()->json($transaction_category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transaction_category = TransactionCategory::find($id);
        if (!$transaction_category) return response()->json(null,404);
        $transaction_category->update($request->all());
        // return redirect()->route("transaction_category.index")->with("success","");
        return response()->json($transaction_category)->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaction_category = TransactionCategory::find($id);
        if (!$transaction_category) return response()->json(null,404);
        $transaction_category->delete();
        // return redirect()->route("transaction_category.index")->with("success","");
        return response()->json(null)->with("success","");
    }
}
