<?php

namespace App\Http\Controllers;

use App\Models\TransactionNote;
use Illuminate\Http\Request;
use Response;

class TransactionNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaction_note = TransactionNote::all();
        // return view("transaction_note.index", compact("transaction_note"));
        return response()->json($transaction_note);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("transaction_note.create");
        return response()->json(TransactionNote::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaction_note = TransactionNote::create($request->all());
        // return redirect()->route("transaction_note.index")->with("success","");
        return response()->json($transaction_note);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaction_note = TransactionNote::find($id);
        if (!$transaction_note)
            return response()->json(null, 404);
        // return view("transaction_note.show", compact("transaction_note"));
        return response()->json($transaction_note);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaction_note = TransactionNote::find($id);
        if (!$transaction_note)
            return response()->json(null, 404);
        // return view("transaction_note.edit", compact("transaction_note"));
        return response()->json($transaction_note);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transaction_note = TransactionNote::find($id);
        if (!$transaction_note)
            return response()->json(null, 404);
        $transaction_note->update($request->all());
        // return redirect()->route("transaction_note.index")->with("success","");
        return response()->json($transaction_note);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaction_note = TransactionNote::find($id);
        if (!$transaction_note)
            return response()->json(null, 404);
        $transaction_note->delete();
        // return redirect()->route("transaction_note.index")->with("success","");
        return response()->json(null);
    }
}
