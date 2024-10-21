<?php

namespace App\Http\Controllers;

use App\Models\DebtCredit;
use Illuminate\Http\Request;

class DebtCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $debt_credit = DebtCredit::all();
        // return view("debt_credit.index", compact("debt_credit"));
        return response()->json($debt_credit);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("debt_credit.create");
        return response()->json(DebtCredit::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $debt_credit = DebtCredit::create($request->all());
        // return redirect()->route("debt_credit.index")->with("success","");
        return response()->json($debt_credit)->with("success","");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $debt_credit = DebtCredit::find($id);
        if (!$debt_credit) return response()->json(null,404);
        // return view("debt_credit.show", compact("debt_credit"));
        return response()->json($debt_credit);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $debt_credit = DebtCredit::find($id);
        if (!$debt_credit) return response()->json(null,404);
        // return view("debt_credit.edit", compact("debt_credit"));
        return response()->json($debt_credit);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $debt_credit = DebtCredit::find($id);
        if (!$debt_credit) return response()->json(null,404);
        $debt_credit->update($request->all());
        // return redirect()->route("debt_credit.index")->with("success","");
        return response()->json($debt_credit)->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $debt_credit = DebtCredit::find($id);
        if (!$debt_credit) return response()->json(null,404);
        $debt_credit->delete();
        // return redirect()->route("debt_credit.index")->with("success","");
        return response()->json(null)->with("success","");
    }
}
