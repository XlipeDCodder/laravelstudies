<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProfessorsController;
use App\Http\Controllers\ExamsController;
use App\Http\Controllers\TestController;
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

Route::get('/contact',  [ContactController::class, 'contact'])->name('site.contact');

Route::get('/login', [LoginController::class, 'login'])->name('site.login');

Route::get('/professors', [ProfessorsController::class, 'professors']);


Route::prefix('/app')->group(function(){

        Route::get('/clients', [ClientsController::class, 'clients']);

        

        Route::get('/exams', [ExamsController::class, 'exams']);

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