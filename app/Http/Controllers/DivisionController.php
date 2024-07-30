<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\District;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $divisions = Division::with('district')->get();
        return view('loans.general.common-reference.division', compact('divisions'));
    }

    public function create()
    {
        $districts = District::all();
        return view('loans.general.common-reference.division-create', compact('districts')); 
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'district_id' => 'required|exists:districts,id',
            'division_name' => 'required|unique:divisions,division_name,NULL,id,district_id,' . $request->district_id,
        ]);

        Division::create($validatedData);
        return redirect()->route('division.index')->with('success', 'Division created successfully.');
    }

    public function show(Division $division) 
    {
        // Not typically used for this functionality
    }

    public function edit(Division $division)
    {
        $districts = District::all();
        return view('loans.general.common-reference.division-edit', compact('division', 'districts'));
    }

    public function update(Request $request, Division $division)
    {
        $validatedData = $request->validate([
            'district_id' => 'required|exists:districts,id',
            'division_name' => 'required|unique:divisions,division_name,' . $division->id . ',id,district_id,' . $request->district_id,
        ]);

        $division->update($validatedData);
        return redirect()->route('division.index')->with('success', 'Division updated successfully.');
    }

    public function destroy(Division $division)
    {
        $division->delete();
        return redirect()->route('division.index')->with('success', 'Division deleted successfully.');
    }
}