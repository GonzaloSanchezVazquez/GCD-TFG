<body>

<div class="row login-menu">
    <!-- Menu Desktop -->
    <div class="line-top"></div>

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">¿Quienes somos?</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Preguntas frecuentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a class="nav-link" href="#">¡Registrate!</a>
                <input class="form-control mr-sm-2" type="text" placeholder="Usuario" aria-label="usuario">
                <input class="form-control mr-sm-2" type="password" placeholder="Contraseña" aria-label="usuario">
                <button class="btn btn-outline-success my-2 my-sm-0 btn-login" type="submit">Login</button>
            </form>
        </div>
    </nav>

</div>

<div class="main-video">
    <video autoplay="autoplay" muted loop>
        <source src="{{asset("video/video-tennis.mp4")}}"/>
    </video>
</div>



@include("layouts.script")
</body>
</html>