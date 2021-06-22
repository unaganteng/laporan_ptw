<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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
Route::get('mahasiswa/prints', 'MahasiswaController@printPDF');
Route::get('mahasiswa', 'MahasiswaController@index');
Route::get('mahasiswa/create', 'MahasiswaController@create');
Route::get('mahasiswa/{student}', 'MahasiswaController@show');
Route::post('mahasiswa', 'MahasiswaController@store');
Route::get('mahasiswa/delete/{student}', 'MahasiswaController@destroy');
Route::get('mahasiswa/edit/{student}', 'MahasiswaController@edit');
Route::patch('mahasiswa/{student}', 'MahasiswaController@update');
Route::put('mahasiswa', 'MahasiswaController@cetak');
