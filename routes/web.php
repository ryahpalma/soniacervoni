<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::redirect('/', 'molde-pg-balao-festa-junina');
Route::get('/contato', [MainController::class, 'Contact'])->name('user.Contact');
Route::get('/politica-de-privacidade', [MainController::class, 'PrivacyPolicy'])->name('user.PrivacyPolicy');
Route::get('/molde-pg-balao-festa-junina', [MainController::class, 'MoldeBalao'])->name('capture.MoldeBalao');
Route::get('/molde-pg-espantalho-festa-junina', [MainController::class, 'MoldeEspantalho'])->name('capture.MoldeEspantalho');
Route::get('/moldes-festa-junina-obrigado', [MainController::class, 'MoldesFestaJuninaObrigado'])->name('capture.thanks.MoldesFestaJunina');
Route::get('/mesa-posta-para-todos', [MainController::class, 'MesaPostaParaTodos'])->name('user.MesaPostaParaTodos');
Route::get('/mesa-posta-para-todos-obrigado', [MainController::class, 'MesaPostaParaTodosObrigado'])->name('user.thanks.MesaPostaParaTodos');
