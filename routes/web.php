<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\TaggedOfferController;
use App\Models\Offer;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route::get('/', function () {
    $topOffers = Offer::with(['tags', 'company'])->latest()->where('featured', true)->take(3)->get();
    $recentOffers = Offer::with(['tags', 'company'])->latest()->where('featured', false)->paginate(10);

    return view('home', compact('topOffers', 'recentOffers'));
});


Route::get('/offers/tags/{tag:name}', [TaggedOfferController::class, 'index']);
Route::controller(OfferController::class)->group(function () {
    Route::get('/offers/create', 'create')->middleware('auth');
    Route::post('/offers', 'store');
});
