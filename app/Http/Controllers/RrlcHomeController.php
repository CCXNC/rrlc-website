<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Carousel;

class RrlcHomeController extends Controller
{
    //@desc all home page content
    //@route GET /dashboard/home
    public function index(): View {
        $carousels = Carousel::latest()->paginate(9);
        return view('rrlc.home.index')->with('carousels', $carousels);
    }
}