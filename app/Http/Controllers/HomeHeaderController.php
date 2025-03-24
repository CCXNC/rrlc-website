<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Carousel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HomeHeaderController extends Controller
{
    use AuthorizesRequests;
    
    //@desc create homepage carousel
    //@route GET /home_carousel/create
    public function create(): View {
        return view('rrlc.home.header.create');
    }

    //@desc STORE a homepage data
    //@route POST /home_carousel/store
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image_path' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['category'] = 1;

        // CHECK FOR IMAGE
        if ($request->hasFile('image_path')) {
            // Store the file and get path
            $path = $request->file('image_path')->store('images', 'public');

            $validatedData['image_path'] = $path;
        }

        Carousel::create($validatedData);

        return redirect()->route('dashboard.home')->with('success', 'Header Image created successfully!');
  
    }
}