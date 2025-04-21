<?php

use App\Models\DeskripsiWisata;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DeskripsiWisataController;
use App\Http\Controllers\VisitorsController;

Route::get('/', [VisitorsController::class, 'trackVisitor'])->name('home');

Route::get('/wisata', function () {
    return view('deskripsi-wisata', [
        'wisata' => DeskripsiWisata::all()
    ]);
});
Route::get('/tour', function () {
    return view('virtual-tour');
});
Route::get('/buntu-burake', function () {
    return view('virtual-tour.buntu-burake');
});
Route::get('/tilangga', function () {
    return view('virtual-tour.tilangga');
});
Route::get('/kete-kesu', function () {
    return view('virtual-tour.kete-kesu');
});
Route::get('/rambu-solo', function () {
    return view('virtual-tour.rambu-solo');
});
Route::get('/pasar-kerbau', function () {
    return view('virtual-tour.pasar-kerbau');
});

// Route::get('/virtual-tour', function () {
//     return view('dashboard.dashboard-virtual-tour');
// });

Route::get('/login', [LoginController::class, 'indexLogin'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/sigin', [LoginController::class, 'indexRegister']);
Route::post('/sigin', [LoginController::class, 'register']);

Route::resource('/deskripsi-wisata', DeskripsiWisataController::class)->middleware('auth');
