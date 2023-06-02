<?php

namespace App\Http\Controllers;
use AshAllenDesign\ShortURL\Models\ShortURL;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $links = ShortURL::all();
        var_dump($links);
        return view('dashboard', compact('links'));
    }
}
