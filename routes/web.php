<?php

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

Route::get('/', function () {
    // Artisan::call('cache:clear');
    // Artisan::call('config:clear');
    // Artisan::call('config:cache');
    // Artisan::call('storage:link');
    // Artisan::call('key:generate');
    // Artisan::call('migrate:fresh --seed');
    return view('welcome');

});

Route::get('/quienes-somos', function () {
    return view('quienesSomos');
})->name('quienesSomos');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


// esta ruta es para arquitectura religiosa
Route::get('/pagina/{tipo}', 'Estaticas@arquitecturaReligiosa')->name('pagina');
Route::get('/iglesia/{slug}', 'Estaticas@detalleIglesia')->name('detalleIglesia');

Route::get('/videos/{tipo}', 'Videos@index')->name('videos');


// rutas que requieren autenticacion
// crear iglesias
Route::middleware(['auth'])->group(function () {
    
    // administracion
    Route::get('/administracion', 'Administracion@index')->name('administracion');
    Route::get('/administracion-videos', 'Administracion@videos')->name('administracionvideos');
    Route::get('/administracion-audios', 'Administracion@audios')->name('administracionaudios');
    Route::get('/crear-iglesias', 'Administracion@crear')->name('crearIglesias');
    Route::post('/guardar-iglesias', 'Administracion@guardar')->name('guardarIglesia');
    Route::get('/editar-iglesia/{id}', 'Administracion@editar')->name('editarIglesia');
    Route::post('/actualizar-iglesias', 'Administracion@actualizar')->name('actualizarIglesia');
    Route::get('/eliminar-iglesia/{id}', 'Administracion@eliminar')->name('eliminarIglesia');
    Route::post('/guardar-audio', 'Administracion@guardarAudios')->name('guardarAudios');
    Route::post('/actualizar-audio', 'Administracion@actualizarAudio')->name('actualizarAudio');
    Route::get('/eliminar-audio/{id}', 'Administracion@eliminarAudios')->name('eliminarAudios');
    


    // videos
    
    Route::post('/videos-guardar', 'Videos@guardar')->name('guardarVideos');
    Route::get('/videos-eliminar/{id}', 'Videos@eliminar')->name('eliminarVideos');
    Route::post('/videos-actualizar', 'Videos@actualizar')->name('actualizarVideo');
    
});


