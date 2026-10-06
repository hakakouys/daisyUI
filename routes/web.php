<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Redirect halaman utama ke login jika belum terautentikasi
Route::get('/', function () {
    return redirect()->route('login');
});

// Route Khusus Guest (Belum Login)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});
// Redirect halaman utama ke login jika belum terautentikasi
Route::get('/', function () {
    return redirect()->route('login');
});

// Redirect /home bawaan Laravel ke /dashboard
Route::get('/home', function () {
    return redirect()->route('dashboard');
});

// Route Khusus Auth (Sudah Login)
Route::middleware('auth')->group(function () {

    // Route /dashboard umum: Otomatis mengarahkan ke dashboard sesuai role
    Route::get('/dashboard', function () {
        $role = auth()->user()->role;
        return redirect()->route($role . '.dashboard');
    })->name('dashboard');

    // Group Dashboard Admin
    Route::middleware('role:admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', function () {
            return view('welcome');
        })->name('dashboard');
    });

    // Group Dashboard Dokter
    Route::middleware('role:dokter')->prefix('dokter')->name('dokter.')->group(function () {
        Route::get('/dashboard', function () {
            return view('welcome');
        })->name('dashboard');
    });

    // Group Dashboard Pasien
    Route::middleware('role:pasien')->prefix('pasien')->name('pasien.')->group(function () {
        Route::get('/dashboard', function () {
            return view('welcome');
        })->name('dashboard');
    });

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});