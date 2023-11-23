<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfessorsController;
use App\Http\Controllers\ProvaController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\InstitutoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\CadastroProva;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ResetSenhaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

|Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');


| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'login'])->name('site.login');
Route::get('/login', [LoginController::class, 'login'])->name('site.login');
Route::post('/login', [LoginController::class, 'store'])->name('site.login');
Route::get('/logout', [LoginController::class, 'destroy'])->name('site.logout');

Route::get('/login', [LoginController::class, 'login'])->name('site.login');

Route::get('/resetsenha', [ResetSenhaController::class, 'reset'])->name('site.reset');
Route::post('/resetsenha', [ResetSenhaController::class, 'resetpost'])->name('site.reset.post');

Route::get('/sobre',  [AboutUsController::class, 'about'])->name('site.aboutus');

Route::match(array('get','post'), '/contact',  [RequestController::class, 'contact'])->name('site.contact');

Route::get('/home', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/professors', [ProfessorsController::class, 'professors']);

Route::get('/provas', [ProvaController::class, 'exams']);

Route::match(array('get','post'), '/cadastrop',  [CadastroProva::class, 'crudprova'])->name('site.cadastro');

Route::get('/registro', [RegistroController::class, 'create'])->name('site.registro');
Route::post('/registro', [RegistroController::class, 'store'])->name('site.registro');

Route::prefix('/jimin')->group(function(){

});



Route::fallback(function(){
       echo 'A página acessada não existe por favor clique <a href="'.route('site.index').'">AQUI</a> para retornar a página principal.'; 
});


//teste pull
//machine instanced 2.00.1 S.A.E.B




































//Route::get('/contact/{name}/{category_id?}', function(string $name = 'Name not defined',
//                                                     int $category_id = 1){
        //echo "User: $name, Category: $category_id";
//})->where('category_id', '[0-9]+')->where('name', '[A-Za-z]+');