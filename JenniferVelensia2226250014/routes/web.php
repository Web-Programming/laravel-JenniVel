<?php

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

Route::get('/', function () {
    return view('welcome');
});

//Buat route ke halaman profil
Route::get('/profil', function () {
    return view('profil');
});

//route dengan parameter {wajib}
Route::get('/mahasiswa/{nama}', function ($nama = "Jenni") {
    echo "<h2>Halo Nama Saya $nama</h2>";
});

//route dengan parameter {tidak wajib}
Route::get('/mahasiswa2/{nama?}', function ($nama = "Jenni") {
    echo "<h2>Halo Nama Saya $nama</h2>";
});

//route dengan parameter > 1
Route::get('/profil/{nama?}/{pekerjaan?}', function ($nama = "Jenni", $pekerjaan = "Mahasiswa") {
    echo "<h2>Halo Nama Saya $nama. Saya adalah $pekerjaan</h2>";
});

//Redirect dan Named Route
Route::get("/hubungi", function (){
    echo "<h1>Hubungi Kami<h1>";
})->name("call");  //named route

Route::redirect("/contact", "/hubungi");

Route::get('/halo', function () {
    echo "<a href = '". route('call') . "'>" . route('call'). "</a>";
});

//Route Group

Route::prefix("/dosen")->group(function(){
    
Route::get('/jadwal', function () {
    echo "<h2>Jadwal Dosen</h2>";
});
Route::get('/materi', function () {
    echo "<h2>Materi Perkuliahan</h2>";
});
//dan lain lain
});