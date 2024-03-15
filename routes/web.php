<?php

use App\Http\Controllers\LangController;
use App\Livewire\BlogNews;
use App\Livewire\Index;
use App\Livewire\Project;
use App\Livewire\Team;
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

Route::get('/', Index::class)->name('main');
Route::get('/team', Team::class)->name('team');
Route::get('/news', BlogNews::class)->name('news');
Route::get('/projects/{year?}/{type?}', Project::class)->name('projects');
Route::get('/getyear', [Project::class, 'getyear'])->name('getyear');
Route::post('/pull_from_repo', function(){
    return shell_exec("cd .. ; git pull origin main");
});
Route::post('/lang', LangController::class);