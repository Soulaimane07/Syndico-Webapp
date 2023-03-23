<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\DemandesController;
use App\http\controllers\ContactsController;
use App\http\controllers\UsersController;
use App\http\controllers\NavbarController;
use App\http\controllers\HeaderController;
use App\http\controllers\AboutusController;
use App\http\controllers\ModulesController;
use App\http\controllers\FormsController;
use App\http\controllers\FooterController;
use App\http\controllers\DemandezController;
use App\http\controllers\ModulesextraController;


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



Route::get('locale/{locale}', function($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});


Route::get('/', function () {
    return view('auth/login');
});


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/demandes', function ($lang) {
    App::setlocale($lang);
    return view('demandes');
});
Route::get('/demandes', [DemandesController::class,'index']);
Route::post('create-demandes', [DemandesController::class,'store']);




Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('contacts', [ContactsController::class,'index']);


Route::get('/users', function () {
    return view('users');
});
Route::get('users', [UsersController::class,'index']);
Route::delete('/delete-profile/{id}', [UsersController::class,'destroyP']);



Route::get('/profile', function () {
    return view('profile');
});







// if(Auth::check() && Auth::user()->is_admin == 1 ){


    Route::get('/edit-demande/{id}', [DemandesController::class,'edit_demande']);
    Route::post('/edit-demande/{id}', [DemandesController::class,'update']);
    Route::delete('/delete-demande/{id}', [DemandesController::class,'destroy']);
    
    
    Route::get('/edit-contact/{id}', [ContactsController::class,'edit_contact']);
    Route::post('/edit-contact/{id}', [ContactsController::class,'update']);
    Route::delete('/delete-contact/{id}', [ContactsController::class,'destroy']);
    
    
    Route::get('/edit-user/{id}', [UsersController::class,'edit_demande']);
    Route::post('/edit-user/{id}', [UsersController::class,'update']);
    Route::post('create-user', [UsersController::class,'store']);
    Route::delete('/delete-user/{id}', [UsersController::class,'destroy']);


    Route::get('/navbar', function () {
        return view('topics/navbar');
    });
    Route::get('navbar', [NavbarController::class,'index']);
    Route::post('create-navbar-item', [NavbarController::class,'store']);
    Route::delete('/delete-navbar-item/{id}', [NavbarController::class,'destroy']);
    Route::get('/edit-navbar/{id}', [NavbarController::class,'edit_navbar']);
    Route::post('/edit-navbar/{id}', [NavbarController::class,'update']);


    Route::get('/header', function () {
        return view('topics/header');
    });
    Route::get('header', [HeaderController::class,'index']);
    Route::post('create-header-bloc', [HeaderController::class,'store']);
    Route::delete('/delete-header-item/{id}', [HeaderController::class,'destroy']);
    Route::get('/edit-header/{id}', [HeaderController::class,'edit_header']);
    Route::post('/edit-header/{id}', [HeaderController::class,'update']);


    Route::get('/aboutus', function () {
        return view('topics/aboutus');
    });
    Route::get('aboutus', [AboutusController::class,'index']);
    Route::post('create-aboutus-item', [AboutusController::class,'store']);
    Route::delete('/delete-aboutus/{id}', [AboutusController::class,'destroy']);
    Route::get('/edit-aboutus/{id}', [AboutusController::class,'edit_aboutus']);
    Route::post('/edit-aboutus/{id}', [AboutusController::class,'update']);


    Route::get('/modules', function () {
        return view('topics/modules');
    });
    

    Route::get('modules', [ModulesController::class,'index']);
    Route::post('create-module', [ModulesController::class,'store']);
    Route::delete('/delete-module/{id}', [ModulesController::class,'destroy']);
    Route::get('/edit-module/{id}', [ModulesController::class,'edit_module']);
    Route::post('/edit-module/{id}', [ModulesController::class,'update']);


    Route::delete('/delete-modulesextra/{id}', [ModulesController::class,'destroyex']);
    Route::post('create-modulesextra', [ModulesController::class,'storeex']);
    Route::get('/edit-moduleextra/{id}', [ModulesController::class,'edit_moduleex']);
    Route::post('/edit-moduleextra/{id}', [ModulesController::class,'updateex']);

    

    Route::get('/contact', function () {
        return view('topics/contact');
    });
    Route::get('/contact', [FormsController::class,'index']);
    Route::post('create-contact', [FormsController::class,'store']);
    Route::delete('/delete-connect/{id}', [FormsController::class,'destroy']);
    Route::get('/edit-connect/{id}', [FormsController::class,'edit_connect']);
    Route::post('/edit-connect/{id}', [FormsController::class,'update']);


    Route::get('/footer', function () {
        return view('topics/footer');
    });
    Route::get('/footer', [FooterController::class,'index']);
    Route::post('create-footer', [FooterController::class,'store']);
    Route::delete('/delete-footer/{id}', [FooterController::class,'destroy']);
    Route::get('/edit-item/{id}', [FooterController::class,'edit_footer']);
    Route::post('/edit-footer/{id}', [FooterController::class,'update']);
    

    Route::get('/demandez', function () {
        return view('topics/demandez');
    });
    Route::get('/demandez', [DemandezController::class,'index']);
    Route::post('create-demandez', [DemandezController::class,'store']);
    Route::delete('/delete-demandez/{id}', [DemandezController::class,'destroy']);
    Route::get('/edit-demandez/{id}', [DemandezController::class,'edit_demandez']);
    Route::post('/edit-demandez/{id}', [DemandezController::class,'update']);


// }



// Route::get('modules', [ModulesController::class,'index']);
// Route::post('create-module', [ModulesController::class,'store']);
// Route::delete('/delete-module/{id}', [ModulesController::class,'destroy']);


