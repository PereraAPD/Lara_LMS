<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index()
    {
        $districts = District::all();
        return view('loans.general.common-reference.district', compact('districts')); 
    }

    public function create()
    {
        return view('loans.general.common-reference.district-create'); 
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'district_name' => 'required|unique:districts',
        ]);

        District::create($validatedData);
        return redirect()->route('district.index')->with('success', 'District created successfully.');
    }

    public function show(District $district) 
    {
        // Not typically used for this functionality
    }

    public function edit(District $district)
    {
        return view('loans.general.common-reference.district-edit', compact('district')); 
    }

    public function update(Request $request, District $district)
    {
        $validatedData = $request->validate([
            'district_name' => 'required|unique:districts,district_name,' . $district->id,
        ]);

        $district->update($validatedData);
        return redirect()->route('district.index')->with('success', 'District updated successfully.');
    }

    public function destroy(District $district)
    {
        $district->delete();
        return redirect()->route('district.index')->with('success', 'District deleted successfully.');
    }
}