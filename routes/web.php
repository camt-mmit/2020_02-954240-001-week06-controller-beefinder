<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PriceCalculation;
use App\Http\Controllers\Area;
use App\Http\Controllers\Mul;
use App\Http\Controllers\Mulv2;


Route::get('/price-calculation', [PriceCalculation::class, 'form'])
       ->name('price-calculation-form');
Route::post('/price-calculation', [PriceCalculation::class, 'result'])
       ->name('price-calculation-result');

Route::get('/area', [Area::class, 'form'])
       ->name('area-form');
Route::post('/area', [Area::class, 'result'])
       ->name('area-result');

Route::get('/mul', [Mul::class, 'form'])
       ->name('mul-form');
Route::post('/mul', [Mul::class, 'result'])
       ->name('mul-result');

Route::get('/mulv2', [Mulv2::class, 'form'])
       ->name('mulv2-form');
Route::post('/mulv2', [Mulv2::class, 'result'])
       ->name('mulv2-result');