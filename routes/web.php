<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', ['App\Http\Controllers\Home\HomeController', 'index'])->name('home');

Route::get('/home', ['App\Http\Controllers\Home\HomeController', 'index'])->name('home');

Route::get('/series', ['App\Http\Controllers\Series\SeriesController', 'index'])->name('series');
Route::get('/series/assistir/{id}', ['App\Http\Controllers\Series\SeriesController', 'assistir'])->name('series.assistir');

Route::get('/filmes', ['App\Http\Controllers\Filmes\FilmesController', 'index'])->name('filmes');
Route::get('/filmes/assistir/{id}', ['App\Http\Controllers\Filmes\FilmesController', 'assistir'])->name('filmes.assistir');

Route::get('/login', ['App\Http\Controllers\Auth\AuthController', 'formLogin'])->name('login');
Route::get('/deslogar', ['App\Http\Controllers\Auth\AuthController', 'deslogar'])->name('login.logout');
Route::post('/login/do', ['App\Http\Controllers\Auth\AuthController', 'login'])->name('login.do');

Route::get('/register', ['App\Http\Controllers\Register\RegisterController', 'formRegister'])->name('register');
Route::post('/register/storage', ['App\Http\Controllers\Register\RegisterController', 'registerUser'])->name('register.storage');

Route::get('/perfil/favoritos', ['App\Http\Controllers\Favoritos\FavoritosController', 'index'])->name('user.perfil.favoritos');
Route::post('/perfil/favoritos/storage', ['App\Http\Controllers\Favoritos\FavoritosController', 'adicionarFavorito'])->name('user.perfil.favoritos.storage');

//ADMIN
Route::get('/admin/home', ['App\Http\Controllers\Admin\AdminController', 'index'])->name('admin');

Route::get('/admin/criar/diretor', ['App\Http\Controllers\Admin\AdminController', 'formaddDiretor'])->name('admin.criar.diretor');
Route::post('/admin/criar/diretor/storage', ['App\Http\Controllers\Admin\AdminController', 'addDiretor'])->name('admin.criar.diretor.storage');

Route::get('/admin/criar/filme', ['App\Http\Controllers\Admin\AdminController', 'formaddFilme'])->name('admin.criar.filme');
Route::post('/admin/criar/filme/storage', ['App\Http\Controllers\Admin\AdminController', 'addFilme'])->name('admin.criar.filme.storage');

Route::get('/perfil', ['App\Http\Controllers\User\UserController', 'index'])->name('user.perfil');
Route::get('/perfil/update', ['App\Http\Controllers\User\UserController', 'formupdateUser'])->name('user.perfil.formUpdate');
Route::post('/perfil/update/do', ['App\Http\Controllers\User\UserController', 'updateUser'])->name('user.perfil.update.do');