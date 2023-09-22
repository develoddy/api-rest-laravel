<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return 'Hello world';
});

Route::get('/pruebas/{name?}', function( $name = null ) {
    $text = '<h2>Texto desde una ruta</h2>';
    $text .= "Name: ".$name;
    return view('pruebas', array(
        'text' => $text
    ));
});

//Route::get('/animales', 'PruebasController@index');
use App\Http\Controllers\PruebasController;
Route::get('/animales', [PruebasController::class, 'index']);

Route::get('/test-orm', [PruebasController::class, 'testOrm']);

//Auth
use App\Http\Controllers\AuthController;

// RUTAS DEL API
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

/**
 * Metodos HTTP comunes
 * 
 * GET: Conseguir datos o recursos
 * POST: Guardar datos o recursos o hacer la logica desde un formulario
 * PUT:  Actualizar datos o recursos
 * DELETE: Eliminar datos o recursos
 */

Route::group(['middleware' => 'cors', 'prefix' => 'api/'], function() {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('register', [UserController::class, 'register']);
});

// Api User
Route::group([
    'middleware' => 'auth.api',
    'prefix' => 'api/user/',
], function () {
    Route::get(
        'index', [ UserController::class, 'index' ]
    );
    Route::post(
        'upload', [ UserController::class, 'upload' ]
    );
    Route::get(
        'avatar/{filename}', [ UserController::class, 'getImage' ]
    );
    Route::get(
        'getUser/{id}', [UserController::class, 'getUser' ]
    );
    Route::post(
        'update', [ UserController::class, 'update' ]
    );
});

// Api Category
Route::group([
    'prefix' => 'api/',
], function () {
    Route::resource(
        'categories', CategoryController::class
    );
});

// Api Post
Route::group([
    //'middleware'    => 'auth.api',
    'prefix' => 'api/',
], function () {
    Route::resource(
        'posts', PostController::class
    );
    Route::post(
        'posts/upload', [ PostController::class, 'upload' ]
    );
    Route::get(
        'posts/image/{filename}', [ PostController::class, 'getImage' ]
    );
    Route::get(
        'posts/category/{id}', [ PostController::class, 'getPostsbyCategory' ]
    );
    Route::get(
        'posts/user/{id}', [ PostController::class, 'getPostsByUser' ]
    );
});