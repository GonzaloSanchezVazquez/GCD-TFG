@extends("layouts.main-menu")
@include("layouts.head")

@section("main-menu")
    <section class="container">
        <div class="row submenu-player">

            <div class="col-12 col-md-6 margin-bottom_40-xs">
                <a href="{{url('/player/create')}}"><img src="{{asset('images/logo-club.png')}}" alt="usuario jugador" id="jugador"/><br><h2>Jugador</h2></a>
            </div>

            <div class="col-12 col-md-6">
                <a href=""><img src="{{asset('images/logo-club.png')}}"alt="usuario club" id="club" /><br><h2>Club organizador</h2></a>
            </div>

        </div>
    </section>
    <script>
        $( document ).ready(function() {
            /*$enlaces = $('.submenu-player a').onm;
            for($i=0;$i<$enlaces.length;$i++){
                $imagen=$('.submenu-player a img');
                alert($imagen.attr('src'));
            }*/
            $('.submenu-player a #jugador').mouseenter(function () {
                $('.submenu-player a #jugador').attr('src','http://127.0.0.1:8000/images/logo-club-color.png')
            });
            $('.submenu-player a #jugador').mouseleave(function () {
                $('.submenu-player a #jugador').attr('src','http://127.0.0.1:8000/images/logo-club.png')
            });

            $('.submenu-player a #club').mouseenter(function () {
                $('.submenu-player a #club').attr('src','http://127.0.0.1:8000/images/logo-club-color.png')
            });
            $('.submenu-player a #club').mouseleave(function () {
                $('.submenu-player a #club').attr('src','http://127.0.0.1:8000/images/logo-club.png')
            });
        });
    </script>
@endsection