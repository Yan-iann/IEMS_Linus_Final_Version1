<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\allInfocardMaintain;
use App\Http\Controllers\infocardMaintain;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('Flayout');
})->middleware(['auth'])->name('Flayout');

Route::post('/store',[allInfocardMaintain::class,'storeDataWildlife'])->name('store');
Route::post('/storeThesis',[allInfocardMaintain::class,'storeDataThesis'])->name('storeThesis');
Route::post('/storeJournal',[allInfocardMaintain::class,'storeDataJournal'])->name('storeJournal');

Route::post('/addWL',[infocardMaintain::class, 'storeDataWildlife'])->name('storeDataWildlife');
Route::post('/addThesis_Paper',[infocardMaintain::class, 'storeDataThesis'])->name('storeDataThesis');
Route::post('/addJournal_Article',[infocardMaintain::class, 'storeDataJournal'])->name('storeDataJournal');

Route::get('/wildlife',[infocardMaintain::class, 'wildlife'])->name('wildlife');
Route::get('/showWildlife/{info_ID}',[infocardMaintain::class, 'showWildlife'])->name('showWildlife');
Route::get('/editWildlife/{info_ID}',[infocardMaintain::class, 'editWildlife'])->name('editWildlife');
Route::post('/updateWildlife/{info_ID}',[infocardMaintain::class, 'updateWildlife'])->name('updateWildlife');
Route::get('/deleteWildlife/{info_ID}',[infocardMaintain::class, 'deleteWildlife'])->name('deleteWildlife');
Route::get('/searchWildlife',[infocardMaintain::class, 'searchWildlife'])->name('searchWildlife');

Route::get('/thesis_paper',[infocardMaintain::class, 'thesis'])->name('thesis');
Route::get('/showThesis/{info_ID}',[infocardMaintain::class, 'showThesis'])->name('showThesis');
Route::get('/editThesis/{info_ID}',[infocardMaintain::class, 'editThesis'])->name('editThesis');
Route::post('/updateThesis/{info_ID}',[infocardMaintain::class, 'updateThesis'])->name('updateThesis');
Route::get('/deleteThesis/{info_ID}',[infocardMaintain::class, 'deleteThesis'])->name('deleteThesis');
Route::get('/searchThesis',[infocardMaintain::class, 'searchThesis'])->name('searchThesis');


Route::get('/journal_article',[infocardMaintain::class, 'journal'])->name('journal');
Route::get('/showJournal/{info_ID}',[infocardMaintain::class, 'showJournal'])->name('showJournal');
Route::get('/editJournal/{info_ID}',[infocardMaintain::class, 'editJournal'])->name('editJournal');
Route::post('/updateJournal/{info_ID}',[infocardMaintain::class, 'updateJournal'])->name('updateJournal');
Route::get('/deleteJournal/{info_ID}',[infocardMaintain::class, 'deleteJournal'])->name('deleteJournal');
Route::get('/searchJournal',[infocardMaintain::class, 'searchJournal'])->name('searchJournal');

require __DIR__.'/auth.php';
