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

    public function animalhealth(): View
    {
        return view('pages.ourproducts.animalhealth');
    }

    public function animalnutrition1(): View
    {
        return view('pages.ourproducts.animalnutrition1');
    }

    public function animalnutrition(): View
    {
        return view('pages.ourproducts.animalnutrition');
    }

    public function tolling(): View
    {
        return view('pages.ourproducts.tolling');
    }

    public function rawmats(): View
    {
        return view('pages.ourproducts.rawmats');
    }

    public function showproduct(): View
    {
        return view('pages.ourproducts.show');
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

    public function newsletter(): View
    {
        return view('pages.newsletter');
    }

    public function careers(): View
    {
        return view('pages.careers');
    }

    public function careerform(): View
    {
        return view('pages.careerform');
    }

  
}