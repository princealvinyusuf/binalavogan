<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\StatisticsSnapshot;

/*
|--------------------------------------------------------------------------
| API Routes - BINALAVOGAN
|--------------------------------------------------------------------------
|
| Endpoint contoh untuk mengakses data statistik agregat. Pada implementasi
| penuh, endpoint ini dapat diamankan dengan autentikasi token/API key dan
| digunakan oleh dashboard internal atau sistem BI.
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/statistics/snapshots', function (Request $request) {
        $query = StatisticsSnapshot::query();

        if ($batch = $request->input('batch')) {
            $query->where('batch', $batch);
        }
        if ($province = $request->input('province')) {
            $query->where('province', $province);
        }
        if ($sector = $request->input('sector')) {
            $query->where('sector', $sector);
        }

        return $query->orderByDesc('period_start')->limit(500)->get();
    });
});


