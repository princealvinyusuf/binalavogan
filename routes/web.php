<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\IndustryController as AdminIndustryController;
use App\Http\Controllers\Admin\StatisticSnapshotController as AdminStatisticSnapshotController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/tentang', [PublicController::class, 'about'])->name('about');

Route::get('/pendaftaran', [RegistrationController::class, 'index'])->name('registration.index');
Route::post('/pendaftaran/industri', [RegistrationController::class, 'storeIndustry'])->name('registration.industry.store');

Route::get('/statistik', [StatisticsController::class, 'publicDashboard'])->name('statistics.public');
Route::get('/cerita-sukses', [StoryController::class, 'index'])->name('stories.index');
Route::get('/cerita-sukses/{slug}', [StoryController::class, 'show'])->name('stories.show');
Route::get('/publikasi', [DocumentController::class, 'index'])->name('documents.index');
Route::get('/publikasi/{slug}', [DocumentController::class, 'show'])->name('documents.show');
Route::get('/berita', [NewsController::class, 'index'])->name('news.index');
Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('news.show');

Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');

Route::view('/kebijakan-privasi', 'static.privacy')->name('privacy');
Route::view('/syarat-ketentuan', 'static.terms')->name('terms');

Route::get('/lang/{locale}', [LocaleController::class, 'switch'])
    ->whereIn('locale', ['id', 'en'])
    ->name('locale.switch');

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/industries', [AdminIndustryController::class, 'index'])->name('industries.index');
    Route::get('/statistics', [AdminStatisticSnapshotController::class, 'index'])->name('statistics.index');
});

Route::get('/dashboard', function () {
    return auth()->check() && auth()->user()->is_admin
        ? to_route('admin.dashboard')
        : to_route('home');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
