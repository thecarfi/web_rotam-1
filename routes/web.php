<?php

use Illuminate\Routing\RouteGroup;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtigosController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\PortfolioController;

Route::get('/', [HomeController::class, 'index'])->name('index.home');
Route::get('/portfolio', [PortfolioController::class, 'inicioPortfolio'])->name('index.portfolio');
Route::get('/artigos', [ArtigosController::class, 'inicioArtigos'])->name('index.artigos');
Route::get('/galeria', [GaleriaController::class, 'inicioGaleria'])->name('index.galeria');
