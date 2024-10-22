<?php

namespace App\Http\Controllers;

use App\Models\MonthlyReport;
use Illuminate\Http\Request;

class MonthlyReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $monthly_report = MonthlyReport::all();
        // return view("monthly_report.index", compact("monthly_report"));
        return response()->json($monthly_report);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("monthly_report.create");
        return response()->json(MonthlyReport::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $monthly_report = MonthlyReport::find($id);
        if (!$monthly_report)
            return response()->json(null, 404);
        // return view("monthly_report.show", compact("monthly_report"));
        return response()->json($monthly_report);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $monthly_report = MonthlyReport::find($id);
        if (!$monthly_report)
            return response()->json(null, 404);
        // return view("monthly_report.edit", compact("monthly_report"));
        return response()->json($monthly_report);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $monthly_report = MonthlyReport::find($id);
        if (!$monthly_report)
            return response()->json(null, 404);
        $monthly_report->update($request->all());
        // return redirect()->route("monthly_report.index")->with("success","");
        return response()->json($monthly_report);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $monthly_report = MonthlyReport::find($id);
        if (!$monthly_report)
            return response()->json(null, 404);
        $monthly_report->delete();
        // return redirect()->route("monthly_report.index")->with("success","");
        return response()->json(null);
    }
}
