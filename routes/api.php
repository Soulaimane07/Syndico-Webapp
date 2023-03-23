<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemandesController;
use App\Http\Controllers\ContactsController;
use App\http\controllers\NavbarController;
use App\http\controllers\AboutusController;
use App\http\controllers\HeaderController;
use App\http\controllers\ModulesController;
use App\http\controllers\FormsController;
use App\http\controllers\FooterController;
use App\http\controllers\DemandezController;

use App\Models\Demande;
use App\Models\Contact;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// POST

Route::resource('contacts', ContactsController::class);
Route::resource('demandes', DemandesController::class);

// GET

Route::get('/navbar', [NavbarController::class, 'api']);
Route::get('/aboutus', [AboutusController::class, 'api']);
Route::get('/header', [HeaderController::class, 'api']);
Route::get('/modules', [ModulesController::class, 'api']);
Route::get('/modulesex', [ModulesController::class, 'apiex']);
Route::get('/contact', [FormsController::class, 'api']);
Route::get('/footer', [FooterController::class, 'api']);
Route::get('/demandez', [DemandezController::class, 'api']);
