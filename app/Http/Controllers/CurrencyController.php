<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currency = Currency::all();
        // return view("currency.index", compact("currency"));
        return response()->json($currency);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("currency.create");
        return response()->json(Currency::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $currency = Currency::create($request->all());
        // return redirect()->route("currency.index")->with("success", "");
        return response()->json($currency);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $currency = Currency::find($id);
        if (!$currency)
            return response()->json(null, 404);
        // return view("currency.show", compact("currency"));
        return response()->json($currency);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $currency = Currency::find($id);
        if (!$currency)
            return response()->json(null, 404);
        // return view("currency.edit", compact("currency"));
        return response()->json($currency);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $currency = Currency::find($id);
        if (!$currency)
            return response()->json(null, 404);
        $currency->update($request->all());
        // return redirect()->route("currency.index")->with("success","");
        return response()->json($currency);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $currency = Currency::find($id);
        if (!$currency)
            return response()->json(null, 404);
        $currency->delete();
        // return redirect()->route("currency.index")->with("success","");
        return response()->json();
    }
}
