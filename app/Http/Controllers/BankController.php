<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index()
    {
        $banks = Bank::all();
        return view('resources.views.loans.general.common-reference.bank', compact('banks'));
    }

    public function create()
    {
        return view('loans.general.common-reference.bank-create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'bank_code' => 'required|unique:banks',
            'bank_name' => 'required',
            'short_name' => 'required',
            'telephone' => 'nullable',
            'fax' => 'nullable',
        ]);

        Bank::create($validatedData);
        return redirect()->route('bank.index')->with('success', 'Bank created successfully.');
    }

    public function show(Bank $bank) 
    {
        // Not typically used for this functionality
    }

    public function edit(Bank $bank)
    {
        return view('loans.general.common-reference.bank-edit', compact('bank')); 
    }

    public function update(Request $request, Bank $bank)
    {
        $validatedData = $request->validate([
            'bank_code' => 'required|unique:banks,bank_code,' . $bank->id, 
            'bank_name' => 'required',
            'short_name' => 'required',
            'telephone' => 'nullable',
            'fax' => 'nullable',
        ]);

        $bank->update($validatedData);
        return redirect()->route('bank.index')->with('success', 'Bank updated successfully.');
    }

    public function destroy(Bank $bank)
    {
        $bank->delete();
        return redirect()->route('bank.index')->with('success', 'Bank deleted successfully.');
    }
}