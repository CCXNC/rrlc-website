<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{

    public function index(): View
    {
        return view('pages.index');
    }

    public function contactus(): View
    {
        return view('pages.contactus');
    }

    public function ourproducts(): View
    {
        return view('pages.ourproducts');
    }

    public function technicalservices(): View
    {
        return view('pages.technicalservices');
    }

    public function articles(): View
    {
        return view('pages.article.index');
    }

    public function article($id): View
    {
        return view('pages.article.show', compact('id'));
    }

    public function aboutus(): View
    {
        return view('pages.aboutus');
    }
}
