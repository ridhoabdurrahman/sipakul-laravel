<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
	DashboardController,
	DiagnosaController,
	RiwayatController,
	kulitController,
	GejalaController,
	RuleController,
	UserController,
	LandingPageController
};

Route::get('/', [LandingPageController::class, 'index']);

Route::group([
	'middleware' => 'auth',
	'prefix' => 'panel',
	'as' => 'admin.'
], function () {
	// diagnosa menu
	Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
	Route::get('/diagnosa', [DiagnosaController::class, 'index'])->name('diagnosa');
	Route::post('/diagnosa', [DiagnosaController::class, 'diagnosa'])->name('diagnosa');

	// logs
	Route::get('/logs', [DashboardController::class, 'activity_logs'])->name('logs');
	Route::post('/logs/delete', [DashboardController::class, 'delete_logs'])->name('logs.delete');

	// menu riwayat
	Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat.daftar');
	Route::get('/riwayat/detail/{riwayat}', [RiwayatController::class, 'show'])->name('riwayat');

	// Member menu
	Route::get('/member', [UserController::class, 'index'])->name('member');
	Route::get('/member/create', [UserController::class, 'create'])->name('member.create');
	Route::post('/member/create', [UserController::class, 'store'])->name('member.create');
	Route::get('/member/{id}/edit', [UserController::class, 'edit'])->name('member.edit');
	Route::post('/member/{id}/update', [UserController::class, 'update'])->name('member.update');
	Route::post('/member/{id}/delete', [UserController::class, 'destroy'])->name('member.delete');

	// menu kulit
	Route::get('/kulit', [KulitController::class, 'index'])->name('kulit');
	Route::post('/kulit', [KulitController::class, 'store'])->name('kulit.store');
	Route::get('/kulit/json', [KulitController::class, 'json'])->name('kulit.json');
	Route::post('/kulit/update', [KulitController::class, 'update'])->name('kulit.update');
	Route::post('/kulit/{kulit}/destroy', [KulitController::class, 'destroy'])->name('kulit.destroy');

	// menu gejala
	Route::get('/gejala', [GejalaController::class, 'index'])->name('gejala');
	Route::post('/gejala', [GejalaController::class, 'store'])->name('gejala.store');
	Route::get('/gejala/json', [GejalaController::class, 'json'])->name('gejala.json');
	Route::post('/gejala/update', [GejalaController::class, 'update'])->name('gejala.update');
	Route::post('/gejala/{gejala}/destroy', [GejalaController::class, 'destroy'])->name('gejala.destroy');

	// menu rules
	Route::get('/rules/{id}', [RuleController::class, 'index'])->name('rules');
	Route::post('/rules/{id}/update', [RuleController::class, 'update'])->name('rules.update');


	// Profile menu
	Route::view('/profile', 'admin.profile')->name('profile');
	Route::post('/profile', [DashboardController::class, 'profile_update'])->name('profile');
	Route::post('/profile/upload', [DashboardController::class, 'upload_avatar'])
		->name('profile.upload');

	Route::get('/tes', function () {
	})->name('test');
});


require __DIR__ . '/auth.php';
