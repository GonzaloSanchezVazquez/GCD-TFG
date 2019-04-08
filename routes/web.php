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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','pageController@index');
Route::get('/inicio','pageController@index');
Route::get('/main','pageController@main');


/*Route::get('/leer', function(){

    $clubes = \App\Club::where('localidad','Ávila')
        ->get();

    foreach($clubes as $club){
        echo $club->nombre ."<br>";
    }

    return $clubes;

});*/

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

    $clubes = \App\Club::find(5);

    $clubes -> nombre = "club 4";
    $clubes -> email = "club4@gmail.com";
    $clubes -> password = "club4";
    $clubes -> localidad = "Murcia";
    $clubes -> telefono = "987456123";
    $clubes -> CIF = 'QWE123456';

    $clubes->save();


});

Route::get('/borrar', function(){

    /*$club=\App\Club::find(5);

    $club->delete();*/

    \App\Club::where('localidad','Gijon')->delete();

});

Route::get('/insertVarios', function(){

    \App\Club::create(["nombre"=>'Club4',"email"=>'club4@gmail.com',"password"=>'club4',"localidad"=>'Tineo',"telefono"=>"999888777",
        "CIF"=>'ASD123456']);

});
