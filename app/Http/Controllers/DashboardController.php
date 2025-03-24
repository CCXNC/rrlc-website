<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    // @desc Dashboard View
    // @route GET /dahboard/
    public function index(): View
    {
        return view('rrlc.dashboard');
    }
}