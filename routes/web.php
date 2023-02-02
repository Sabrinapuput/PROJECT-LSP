<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\KelasController;

route::get('/',[IndexController::class,'index']);
route::post('/login/admin', [IndexController::class, 'loginAdmin']);
route::post('/login/siswa', [IndexController::class, 'loginSiswa']);
route::post('/login/guru', [IndexController::class, 'loginGuru']);
route::get('/home', [IndexController::class, 'welcome']);
route::get('/logout', [IndexController::class, 'logout']);

route::prefix('/jurusan')->group(function() {
    route::get('/index',[JurusanController:: class, 'index']);
    route::get('/create',[JurusanController:: class, 'create']);
    route::post('/store',[JurusanController:: class, 'store']);
    route::get('/edit/{jurusan}',[JurusanController:: class, 'edit']);
    route::post('/update/{jurusan}',[JurusanController:: class, 'update']);
    route::get('/destroy/{jurusan}',[JurusanController:: class, 'destroy']);


});
route::prefix('/guru')->group(function() {
    route::get('/index',[GuruController:: class, 'index']);
    route::get('/create',[GuruController:: class, 'create']);
    route::post('/store',[GuruController:: class, 'store']);
    route::get('/edit/{guru}',[GuruController:: class, 'edit']);
    route::post('/update/{guru}',[GuruController:: class, 'update']);
    route::get('/destroy/{guru}',[GuruController:: class, 'destroy']);


});
route::prefix('/mapel')->group(function() {
    route::get('/index',[MapelController:: class, 'index']);
    route::get('/create',[MapelController:: class, 'create']);
    route::post('/store',[MapelController:: class, 'store']);
    route::get('/edit/{mapel}',[MapelController:: class, 'edit']);
    route::post('/update/{mapel}',[MapelController:: class, 'update']);
    route::get('/destroy/{mapel}',[MapelController:: class, 'destroy']);


});
route::prefix('/Kelas')->group(function() {
    route::get('/index',[KelasController:: class, 'index']);
    route::get('/create',[KelasController:: class, 'create']);
    route::post('/store',[KelasController:: class, 'store']);
    route::get('/edit/{kelas}',[KelasController:: class, 'edit']);
    route::post('/update/{krlas}',[KelasController:: class, 'update']);
    route::get('/destroy/{kelas}',[KelasController:: class, 'destroy']);


});


