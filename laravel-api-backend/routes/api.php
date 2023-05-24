<?php

use App\Http\Controllers\API\V1\ArticleController;
use App\Http\Controllers\API\V1\AuthorController;
use Illuminate\Support\Facades\Route;

// V1
// ->middleware('auth:sanctum')
Route::prefix('V1')->group(function () {
    // Articles 
    Route::apiResource('/articles' , ArticleController::class);

    // Authors 
    Route::get('/authors/{user}' , [AuthorController::class , 'show'])->name('authors.show');
});
