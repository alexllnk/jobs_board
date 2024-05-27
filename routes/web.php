<?php

use App\Models\Offer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $topOffers = Offer::with('tags')->latest()->where('featured', true)->take(3)->get();
    $recentOffers = Offer::with('tags')->latest()->where('featured', false)->take(10)->get();
    return view('home', compact('topOffers', 'recentOffers'));
});
