<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LoanController extends Controller
{
    public function showView($view)
    {
        // Check if the view exists
        if (View::exists($view)) {
            return view($view);
        }

        // If the view does not exist, show a 404 error
        abort(404);
    }
    public function showLoanView($scheme, $view)
    {
        // Check if the view exists within the specified loan scheme
        $viewPath = "loans.$scheme.$view";
        if (View::exists($viewPath)) {
            return view($viewPath);
        }

        // If the view does not exist, show a 404 error
        abort(404);
    }
    public function showSubLoanView($scheme, $view, $subview)
    {
        $subViewPath = "loans.$scheme.$view.$subview";
        if (View::exists($subViewPath)) {
            return view($subViewPath);
        }
        // If the view does not exist, show a 404 error
        abort(404);
    }
}
