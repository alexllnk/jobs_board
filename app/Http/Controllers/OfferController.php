<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('offers.create')->with([
            'tags' => Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedAttributes = $request->validate([
            'title' => 'required|min:5',
            'salary' => 'required',
            'description' => 'sometimes',
            'logo' => ['required', File::types(['png', 'jpg', 'webp'])]
        ]);
        $logoPath = $request->logo->store('logos');
        $validatedAttributes['company_id'] = auth()->user()->company->id;
        $validatedAttributes['logo'] = $logoPath;
        Offer::create($validatedAttributes)->tags()->attach($request->tags);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        //
    }
}
