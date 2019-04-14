<?php

use App\Torneo;
use App\Club;
use App\Categoria;
use App\User;
use App\Jugador;
use App\Player;
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
Route::resource('player','playerController');



/*Route::get('/leer', function(){

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

Route::get('/borrar', function(){

    //$club=\App\Club::find(5);

    //$club->delete();

    //\App\Club::where('localidad','Gijon')->delete();

});
*/
// INTRODUCIR CLUBS
/*Route::get('/insertClubs', function(){

    \App\Club::create(["nombre"=>'Casa Social Catolica',"email"=>'casasocial@gmail.com',"password"=>'casasocial',"localidad"=>'Ávila',"telefono"=>"999888777",
        "CIF"=>'ASD123456']);
    \App\Club::create(["nombre"=>'Paramera',"email"=>'paramera@gmail.com',"password"=>'paramera',"localidad"=>'Ávila',"telefono"=>"999888777",
        "CIF"=>'ASD456789']);
    \App\Club::create(["nombre"=>'Club3',"email"=>'club3@gmail.com',"password"=>'club3',"localidad"=>'Madrid',"telefono"=>"999888777",
        "CIF"=>'ASD123789']);
    \App\Club::create(["nombre"=>'Club4',"email"=>'club4@gmail.com',"password"=>'club4',"localidad"=>'Tineo',"telefono"=>"999888777",
        "CIF"=>'ASD999999']);

});
// INTRODUCIR JUGADORES
Route::get('/insertJugadores', function() {
    \App\Player::create(["nombre"=>'Gonzalo',"apellido_1"=>'Sánchez',"apellido_2"=>'Vázquez',"email"=>'gonza@gmail.com',"password"=>'Gonza',"telefono"=>'666555444'
        ,"num_licencia"=>'BA123456',"pais_nacimiento"=>'España',"fecha_nac"=>'1988-12-19',"localidad"=>'Ávila']);
    \App\Player::create(["nombre"=>'Arancha',"apellido_1"=>'Sánchez',"apellido_2"=>'Maroto',"email"=>'arancha@gmail.com',"password"=>'Arancha',"telefono"=>'666555444'
        ,"num_licencia"=>'BA123578',"pais_nacimiento"=>'España',"fecha_nac"=>'1990-08-24',"localidad"=>'Madrid']);
    \App\Player::create(["nombre"=>'Isabel',"apellido_1"=>'Vázquez',"apellido_2"=>'Jimenez',"email"=>'isa@gmail.com',"password"=>'Isa',"telefono"=>'666555444'
        ,"num_licencia"=>'BA789456',"pais_nacimiento"=>'España',"fecha_nac"=>'1957-07-02',"localidad"=>'Ávila']);
    \App\Player::create(["nombre"=>'Rafael',"apellido_1"=>'Sánchez',"apellido_2"=>'Encinar',"email"=>'rafa@gmail.com',"password"=>'Rafa',"telefono"=>'666555444'
        ,"num_licencia"=>'BA654987',"pais_nacimiento"=>'España',"fecha_nac"=>'1957-09-18',"localidad"=>'Ávila']);
});
// INTRODUCIR TORNEOS
Route::get('/insertTorneos', function() {
    \App\Torneo::create(["club_id"=>1,"nombre"=>"Torneo de Verano ciudad de Ávila 2019","fecha_ini"=>"2019-07-14","fecha_fin"=>"2019-07-30",
        "superficie"=>"Pista dura","descripcion"=>"Lorem ipsum","localidad"=>"Ávila"]);
    \App\Torneo::create(["club_id"=>2,"nombre"=>"Torneo Fiestas de la Santa Ávila 2019","fecha_ini"=>"2019-10-14","fecha_fin"=>"2019-10-30",
        "superficie"=>"Pista dura","descripcion"=>"Lorem ipsum","localidad"=>"Ávila"]);
});
// INTRODUCIR CATEGORIAS
Route::get('/insertCategorias', function() {
    \App\Categoria::create(["id_ref_cat"=>"1","torneo_id"=>"1"]);
    \App\Categoria::create(["id_ref_cat"=>"2","torneo_id"=>"1"]);
    \App\Categoria::create(["id_ref_cat"=>"1","torneo_id"=>"2"]);
    \App\Categoria::create(["id_ref_cat"=>"2","torneo_id"=>"2"]);
    \App\Categoria::create(["id_ref_cat"=>"3","torneo_id"=>"2"]);
});
*/




/* RELACION 1:N Club->Torneos */
Route::get('/torneos', function(){

    $torneos = Club::find(1)->torneos->where('localidad','Ávila');

    foreach ($torneos as $torneo) {
        //
        echo $torneo->nombre . "<br>";
    }


});
/* RELACION 1: INVERSA Torneos->Club */
Route::get('/club', function(){

    $club = Torneo::find(1)->club;

    //
    echo $club->nombre . "<br>";



});
Route::get('/categorias', function(){

    $categorias = Torneo::find(1)->categorias;

    foreach ($categorias as $categoria) {
        //
        echo $categoria->id_ref_cat . "<br>";
    }


});

Route::get('/torneo-categoria', function(){

    $torneo = Categoria::find(1)->torneo;

    //
    echo $torneo->nombre . "<br>";



});
/* RELACION N:M EL USUARIO $id SE HA INSCRITO EN LOS TORNEOS... */
Route::get('/inscripcion/{id}/torneo', function($id){

    $inscripcion = User::find($id);

    foreach ($inscripcion->torneos as $inscrito) {
        echo $inscrito->nombre . "<br>";
    }


});
/* RELACION N:M EN EL TORNEO $id SE HAN INSCRITO LOS JUGADORES... */
Route::get('/inscripcion/{id}/jugador', function($id){

    $inscripcion = Torneo::find($id);

    foreach ($inscripcion->jugadores as $inscrito) {
        echo $inscrito->nombre ." ". $inscrito->apellido_1." ". $inscrito->apellido_2. "<br>";
    }


});


