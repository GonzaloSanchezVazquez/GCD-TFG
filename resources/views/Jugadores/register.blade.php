@extends("layouts.main-menu")
@include("layouts.head")

@section("main-menu")
    <section class="container formu_register justify-content-center">
        <p>Bienvenido master de la raqueta, para poder beneficiarte de todos los beneficios de nuestra plataforma
        es necesario que te robemos 2 minutos, te lo prometemos, no te llevará más tiempo. Completa los campos
        del siguiente formulario:</p><br><br><br>

        <form id="formu_registro" method="post" action="#">

            <label>Nombre:<input type="text"></label><br>
            <label>Apellido 1:<input type="text"></label><br>
            <label>Apellido 2:<input type="text"></label><br>
            <label>Email:<input type="text"></label><br>
            <label>Password:<input type="text"></label><br>
            <label>Telefono:<input type="text"></label><br>
            <label>Nº Licencia:<input type="text"></label><br>
            <label>Pais nacimiento:<input type="text"></label><br>
            <label>Fecha Nacimiento:<input type="text"></label><br>
            <label>Localidad:<input type="text"></label>
        </form>


    </section>
@endsection