<?php

namespace App\Http\Controllers;
use AshAllenDesign\ShortURL\Models\ShortURL;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $links = ShortURL::all();
        // return view('dashboard', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('links');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();

        $shortURLObject = $builder->destinationUrl($request['old-link'])->urlKey($request['alias'])
            ->trackVisits()
            ->trackRefererURL()
            ->trackOperatingSystem()
            ->trackBrowserVersion()
            ->trackBrowser()
            ->trackIPAddress()
            ->make();
        $shortURL = $shortURLObject->default_short_url;
        return view('new-link', compact('shortURL'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        //
    }
}
