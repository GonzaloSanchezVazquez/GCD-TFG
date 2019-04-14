@extends("layouts.main-menu")
@include("layouts.head")

@section("main-menu")
    <section class="container">
        <div class="section_register">
            <h2>¡Bienvenido Tenista!</h2>
            <p>Vamos a robarte tan solo 2 minutos de tu preciado tiempo, te lo prometemos. Completa el siguiente formulario y podras
            comenzar tu aventura junto a nosotros, apuntarte a los torneos, ver tu clasificacion, tus estadisticas. El tenis no es nuevo,
            pero todo esto si. Apuntate!!</p>
            <div class="justify-content-between">
                <form id="formu_registro" method="post" action="/player">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label>Nombre:<br><input type="text" name="nombre_player"></label>
                            {{csrf_field()}}
                        </div>
                        <div class="col-12 col-md-6">
                            <label>Apellido 1:<br><input type="text" name="apellido_1_player"></label>
                            {{csrf_field()}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label>Apellido 2:<br><input type="text" name="apellido_2_player"></label><br>
                            {{csrf_field()}}
                        </div>
                        <div class="col-12 col-md-6">
                            <label>Telefono:<br><input type="text" name="telefono_player"></label><br>
                            {{csrf_field()}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <label>Email:<br><input type="text" name="email_player"></label><br>
                            {{csrf_field()}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label>Password:<br><input type="password" name="pass_player"></label><br>
                            {{csrf_field()}}
                        </div>
                        <div class="col-12 col-md-6">
                            <label>Nº Licencia:<br><input type="text" name="licencia_player"></label><br>
                            {{csrf_field()}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label>Fecha Nacimiento:<br><input type="date" name="fecha_nac_player"></label><br>
                            {{csrf_field()}}
                        </div>
                        <div class="col-12 col-md-6">
                            <label>Pais nacimiento:<br><input type="text" name="pais_player"></label><br>
                            {{csrf_field()}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label>Localidad:<br><input type="text" name="localidad_player"></label><br><br>
                            {{csrf_field()}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 justify-content-end">
                            <input type="submit" value="Registrarse"><br><br>
                        </div>
                </form>
            </div>
        </div>
    </section>

@endsection