<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Bank;
use App\Models\District;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch::with('bank', 'district')->get();
        return view('loans.general.common-reference.branch', compact('branches')); 
    }

    public function create()
    {
        $banks = Bank::all();
        $districts = District::all();
        return view('loans.general.common-reference.branch-create', compact('banks', 'districts')); 
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'bank_id' => 'required|exists:banks,id',
            'branch_code' => 'required|unique:branches',
            'district_id' => 'required|exists:districts,id',
            'branch_name' => 'required',
            'telephone' => 'nullable',
            'fax' => 'nullable',
        ]);

        Branch::create($validatedData);
        return redirect()->route('branch.index')->with('success', 'Branch created successfully.');
    }

    public function show(Branch $branch) 
    {
        // Not typically used for this functionality
    }

    public function edit(Branch $branch)
    {
        $banks = Bank::all();
        $districts = District::all();
        return view('loans.general.common-reference.branch-edit', compact('branch', 'banks', 'districts')); 
    }

    public function update(Request $request, Branch $branch)
    {
        $validatedData = $request->validate([
            'bank_id' => 'required|exists:banks,id',
            'branch_code' => 'required|unique:branches,branch_code,' . $branch->id, 
            'district_id' => 'required|exists:districts,id',
            'branch_name' => 'required',
            'telephone' => 'nullable',
            'fax' => 'nullable',
        ]);

        $branch->update($validatedData);
        return redirect()->route('branch.index')->with('success', 'Branch updated successfully.');
    }

    public function destroy(Branch $branch)
    {
        $branch->delete();
        return redirect()->route('branch.index')->with('success', 'Branch deleted successfully.');
    }
}