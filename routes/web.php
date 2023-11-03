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

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/about-us',  [AboutUsController::class, 'about'])->name('site.aboutus');

Route::match(array('get','post'), '/contact',  [RequestController::class, 'contact'])->name('site.contact');

Route::get('/login', [LoginController::class, 'login'])->name('site.login');

Route::get('/professors', [ProfessorsController::class, 'professors']);

Route::get('/exams', [ProvaController::class, 'exams']);

Route::get('/clients', [UserController::class, 'clients']);

Route::match(array('get','post'), '/cadastrop',  [CadastroProva::class, 'crudprova'])->name('site.cadastro');

Route::prefix('/jimin')->group(function(){

});

Route::get('/test/{p1}/{p2}', [TestController::class, 'test']);

Route::fallback(function(){
       echo 'The route accessed does not exist, please click <a href="'.route('site.index').'">HERE</a> to return to the main page.'; 
});


//teste pull




































//Route::get('/contact/{name}/{category_id?}', function(string $name = 'Name not defined',
//                                                     int $category_id = 1){
        //echo "User: $name, Category: $category_id";
//})->where('category_id', '[0-9]+')->where('name', '[A-Za-z]+');