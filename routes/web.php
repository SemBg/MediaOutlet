<?php

use App\Http\Controllers\StoriesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('articles');
});

Route::get('/create-story', function () {
  return view('stories.create');
});

Route::post('/save-story', [StoriesController::class, 'draft']);
Route::post('/submit-story', [StoriesController::class, 'submit']);
Route::post('/resubmit-story/{story}', [StoriesController::class, 'resubmit']);

Route::get('/submitted-stories', [StoriesController::class, 'get']);
Route::get('/submitted-story/{story}', [StoriesController::class, 'story']);
Route::get('/submitted-story/{story}/approve', [StoriesController::class, 'approve']);
Route::get('/submitted-story/{story}/deny', [StoriesController::class, 'deny']);

Route::get('/rejected-stories', [StoriesController::class, 'getRejected']);
Route::get('/rejected-story/{story}', [StoriesController::class, 'rejectedStory']);
