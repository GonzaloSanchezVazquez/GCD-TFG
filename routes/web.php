<?php

use App\Torneo;
use App\Club;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','pageController@index');
Route::get('/inicio','pageController@index');
Route::get('/main','pageController@main');


Route::get('/leer', function(){

    $clubes = Club::where('id',1)
        ->get();

    foreach($clubes as $club){
        echo $club->nombre ."<br>";
    }

    return $clubes;

});

Route::get('/insertar', function(){

    $clubes = new \App\Club();

    $clubes -> nombre = "club 3";
    $clubes -> email = "club3@gmail.com";
    $clubes -> password = "club3";
    $clubes -> localidad = "Murcia";
    $clubes -> telefono = "987456123";
    $clubes -> CIF = 'QWE123456';

    $clubes->save();


});

Route::get('/actualizar', function(){

    $clubes = Club::find(7);

    $clubes -> nombre = "club 4";
    $clubes -> email = "club4@gmail.com";
    $clubes -> password = "club4";
    $clubes -> localidad = "Mingorria";
    $clubes -> telefono = "987456123";
    $clubes -> CIF = 'QWE123456';

    $clubes->save();


});

Route::get('/torneos', function(){

    $torneos = Club::find(1)->torneos->where('localidad','Ávila');

    foreach ($torneos as $torneo) {
        //
        echo $torneo->nombre . "<br>";
    }


});