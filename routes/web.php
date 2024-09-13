<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\frmRegistroCtrl;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario-registro',[frmRegistroCtrl::class, 'mostrarDatos']);