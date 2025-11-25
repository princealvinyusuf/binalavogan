<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocaleController;

/*
|--------------------------------------------------------------------------
| Web Routes - BINALAVOGAN
|--------------------------------------------------------------------------
*/

// Public pages
Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/tentang', [PublicController::class, 'about'])->name('about');

Route::get('/program-pemagangan-nasional', [ProgramController::class, 'index'])->name('program.index');

// Registration
Route::get('/pendaftaran', [RegistrationController::class, 'index'])->name('registration.index');
Route::post('/pendaftaran/industri', [RegistrationController::class, 'storeIndustry'])->name('registration.industry.store');

// Statistics & dashboards
Route::get('/statistik', [StatisticsController::class, 'publicDashboard'])->name('statistics.public');
Route::get('/dashboard/internal', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard.internal');

// Success stories & news
Route::get('/cerita-sukses', [StoryController::class, 'index'])->name('stories.index');
Route::get('/cerita-sukses/{slug}', [StoryController::class, 'show'])->name('stories.show');

Route::get('/berita', [NewsController::class, 'index'])->name('news.index');
Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('news.show');

// Documents & downloads
Route::get('/dokumen', [DocumentController::class, 'index'])->name('documents.index');
Route::get('/dokumen/{slug}', [DocumentController::class, 'show'])->name('documents.show');

// Contact & helpdesk
Route::get('/kontak', [ContactController::class, 'index'])->name('contact.index');
Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');

// Static pages
Route::view('/kebijakan-privasi', 'static.privacy')->name('privacy');
Route::view('/syarat-ketentuan', 'static.terms')->name('terms');

// Locale switcher
Route::get('/lang/{locale}', [LocaleController::class, 'switch'])
    ->whereIn('locale', ['id', 'en'])
    ->name('locale.switch');

