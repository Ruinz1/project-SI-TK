<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/formulir', function () {
    return view('pages/formulir');
});


\Illuminate\Support\Facades\Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('visi-misi', [App\Http\Controllers\landing::class, 'visimisi']);
Route::get('sejarah', [App\Http\Controllers\landing::class, 'sejarah']);
Route::get('sarana', [App\Http\Controllers\landing::class, 'sarana']);
Route::get('blog', [App\Http\Controllers\landing::class, 'blog']);

Route::prefix('/')->middleware(['auth'])->group(function () {
    Route::get('daftar', [App\Http\Controllers\landing::class, 'daftar'])->name('landing.daftar');
    Route::post('daftar', [App\Http\Controllers\landing::class, 'create']);
});


\Illuminate\Support\Facades\Auth::routes();

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {

    // Admin Dashboard Route
    Route::get('/dashboard', [App\Http\Controllers\admin\dashboard::class, 'dashboard']);

    Route::get('add-data', [App\Http\Controllers\admin\dashboard::class,'create']);
    Route::post('add-data', [App\Http\Controllers\admin\dashboard::class,'store']);
    
    Route::get('data-peserta', [App\Http\Controllers\admin\dashboard::class,'peserta']);
    Route::get('delete-peserta/{id}', [App\Http\Controllers\admin\dashboard::class,'destroy']);
    Route::get('edit-peserta/{id}', [App\Http\Controllers\admin\dashboard::class,'edit']);
    Route::put('update-peserta/{id}', [App\Http\Controllers\admin\dashboard::class,'update']);

    Route::get('verifikasi-peserta/{id}', [App\Http\Controllers\admin\dashboard::class,'verifikasipeserta']);
    
    Route::get('data-ayah', [App\Http\Controllers\admin\dashboard::class,'ayah']);
    Route::get('verifikasi-ayah/{id}', [App\Http\Controllers\admin\dashboard::class,'verifikasiayah']);

    Route::get('data-ibu', [App\Http\Controllers\admin\dashboard::class,'ibu']);
    Route::get('verifikasi-ibu/{id}', [App\Http\Controllers\admin\dashboard::class,'verifikasiibu']);

    Route::get('data-wali', [App\Http\Controllers\admin\dashboard::class,'wali']);
    Route::get('verifikasi-wali/{id}', [App\Http\Controllers\admin\dashboard::class,'verifikasiwali']);

    Route::get('data-pendahuluan', [App\Http\Controllers\admin\dashboard::class,'pendahuluan']);
    Route::get('verifikasi-pendahuluan/{id}', [App\Http\Controllers\admin\dashboard::class,'verifikasipendahuluan']);

    Route::get('data-pribadi', [App\Http\Controllers\admin\dashboard::class,'pribadi']);
    Route::get('verifikasi-pribadi/{id}', [App\Http\Controllers\admin\dashboard::class,'verifikasipribadi']);

    Route::get('data-detail-pribadi/{id}', [App\Http\Controllers\admin\dashboard::class,'detail']);

    Route::get('data-survei', [App\Http\Controllers\admin\dashboard::class,'survei']);
    Route::get('verifikasi-survei/{id}', [App\Http\Controllers\admin\dashboard::class,'verifikasisurvei']);

    Route::get('data-pendanaan', [App\Http\Controllers\admin\dashboard::class,'pendanaan']);
    Route::get('verifikasi-pendanaan/{id}', [App\Http\Controllers\admin\dashboard::class,'verifikasipendanaan']);
    
    

});