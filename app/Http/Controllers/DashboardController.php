<?php

namespace App\Http\Controllers;
use AshAllenDesign\ShortURL\Models\ShortURL;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $links = ShortURL::all();
        return view('dashboard')->with('links', $links);
    }
}
