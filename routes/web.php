<?php


use App\Http\Controllers\CardoftheDayController;
use App\Http\Controllers\outfitCombinationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OutfitManagementController;
use Illuminate\Support\Facades\Route;

// PUBLIC routes


// USER routes
Route::get('/', [outfitCombinationController::class, 'index'])->name('anyname');
Route::get('/card', [CardoftheDayController::class, 'index'])->name('card.show');

Route::get('articles', function () {
    return view('articles');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/outfitmanagement', [OutfitManagementController::class, 'index'])->name('outfits.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
