<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>G-Sport | Main page</title>
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles/style-main.css">
</head>
<body>

    <div class="row">
        <div class="line-top"></div>
        <div class="main-nav col-10 col-md-2 d-lg-block">
            <nav>
                <ul>
                    <a href=""><li><img src="../img/deporte-equipo.png">Deportes de equipo</li></a>
                    <a href=""><li><img src="../img/deporte-individual.png">Deportes por parejas</li></a>
                    <a href=""><li><img src="../img/deporte-individual.png">Deporte individual</li></a>
                </ul>
            </nav>
        </div>
        <div class="view-menu col-2 col-md-1">
            <ul class="hidden-menu">
                <li><img src="../img/Menu-Hamburguesa.png"></li>
            </ul>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
    <script>
        $( document ).ready(function() {
            $(".hidden-menu li img").on( "click", function() {
                if($(".main-nav").css("left") != "0px"){
                    $(".main-nav").css("left","0px");
                    $(".view-menu").css("left","10px");
                    $(".view-menu .hidden-menu li img").attr("src","../img/hidden-menu.png");
                }else{
                    $(".main-nav").css("left","-17%");
                    $(".view-menu").css("left","-16.5%");
                    $(".view-menu .hidden-menu li img").attr("src","../img/Menu-Hamburguesa.png");
                }
            })
        });
    </script>
</body>
</html>