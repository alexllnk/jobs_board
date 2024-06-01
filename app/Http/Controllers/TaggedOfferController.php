<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaggedOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Tag $tag): View
    {
        //$offers = Offer::latest()->whereHas($tag)->paginate(10);
        $offers = Offer::whereHas('tags', function (Builder $query) use ($tag) {
            $query->where('name', $tag->name);
        })->latest()->paginate(10);
        return view('offers.tagged.index', compact('offers', 'tag'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
