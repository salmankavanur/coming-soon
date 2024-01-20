<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        // Calculate the countdown date (replace this with your logic)
        $countdownDate = now()->addDays(7); // Example: 7 days from now

        // Pass the $countdownDate variable to the view
        return View::make('index')->with('countdownDate', $countdownDate);
    }
}
