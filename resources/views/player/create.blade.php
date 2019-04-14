@extends("layouts.main-menu")
@include("layouts.head")

@section("main-menu")
    <section class="container formu_register justify-content-center">
        <p>Bienvenido master de la raqueta, para poder beneficiarte de todos los beneficios de nuestra plataforma
        es necesario que te robemos 2 minutos, te lo prometemos, no te llevará más tiempo. Completa los campos
        del siguiente formulario:</p><br><br><br>

        <form id="formu_registro" method="post" action="/player">

            <label>Nombre:<input type="text" name="nombre_player"></label><br>
            {{csrf_field()}}
            <label>Apellido 1:<input type="text" name="apellido_1_player"></label><br>
            {{csrf_field()}}
            <label>Apellido 2:<input type="text" name="apellido_2_player"></label><br>
            {{csrf_field()}}
            <label>Email:<input type="text" name="email_player"></label><br>
            {{csrf_field()}}
            <label>Password:<input type="password" name="pass_player"></label><br>
            {{csrf_field()}}
            <label>Telefono:<input type="text" name="telefono_player"></label><br>
            {{csrf_field()}}
            <label>Nº Licencia:<input type="text" name="licencia_player"></label><br>
            {{csrf_field()}}
            <label>Pais nacimiento:<input type="text" name="pais_player"></label><br>
            {{csrf_field()}}
            <label>Fecha Nacimiento:<input type="date" name="fecha_nac_player"></label><br>
            {{csrf_field()}}
            <label>Localidad:<input type="text" name="localidad_player"></label><br><br>
            {{csrf_field()}}
            <input type="submit" value="Registrarse"><br><br>
        </form>


    </section>
@endsection