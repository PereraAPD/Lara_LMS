<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeriodAssignmentController extends Controller
{
    public function index()
    {
        // Sample data to simulate database records
        $records = collect([
            (object)[
                'loan_scheme' => 'Jaya',
                'bank' => 'Bank of Ceylon',
                'loan_reg_number' => '123456',
                'from_date' => '2024-06-01',
                'to_date' => '2024-07-01',
            ],
            (object)[
                'loan_scheme' => 'Isura',
                'bank' => 'National Savings Bank',
                'loan_reg_number' => '789012',
                'from_date' => '2024-06-15',
                'to_date' => '2024-07-15',
            ],
            (object)[
                'loan_scheme' => 'Green Loan',
                'bank' => 'People\'s Bank',
                'loan_reg_number' => '345678',
                'from_date' => '2024-06-10',
                'to_date' => '2024-07-10',
            ],
            (object)[
                'loan_scheme' => 'Jaya',
                'bank' => 'Bank of Ceylon',
                'loan_reg_number' => '654321',
                'from_date' => '2024-06-05',
                'to_date' => '2024-07-05',
            ],
            (object)[
                'loan_scheme' => 'Isura',
                'bank' => 'National Savings Bank',
                'loan_reg_number' => '901234',
                'from_date' => '2024-06-20',
                'to_date' => '2024-07-20',
            ],
            (object)[
                'loan_scheme' => 'Green Loan',
                'bank' => 'People\'s Bank',
                'loan_reg_number' => '876543',
                'from_date' => '2024-06-25',
                'to_date' => '2024-07-25',
            ],
        ]);

        // Pass the sample data to the view
        return view('period-assign', ['records' => $records]);
    }
}
