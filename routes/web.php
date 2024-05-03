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
    //outfit
    Route::get('/outfitmanagement', [OutfitManagementController::class, 'index'])->name('outfits.index');
    Route::get('/outfitmanagement/edit/{id}', [OutfitManagementController::class, 'edit'])->name('outfits.edit');
    Route::post('/outfitmanagement/update/{id}', [OutfitManagementController::class, 'update'])->name('outfits.update');
    Route::delete('/outfitmanagement/delete/{id}', [OutfitManagementController::class, 'destroy'])->name('outfits.destroy');
    Route::get('/outfitmanagement/create', [OutfitManagementController::class, 'create'])->name('outfits.create');
    Route::post('/outfitmanagement', [OutfitManagementController::class, 'store'])->name('outfits.store');


    //color


    //occasion

    
    //profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
