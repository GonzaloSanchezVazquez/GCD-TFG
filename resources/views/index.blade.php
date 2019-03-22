<!DOCTYPE html>
<html lang="{{ app() -> getLocale()}}">
<head>
    <meta charset="UTF-8">
    <title>G-Sport</title>
    <!-- Style -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/style-main.css')}}" rel="stylesheet">
</head>
<body>
    <!--<section class="cabecera">
        <include src="includes/header.html"></include>
    </section>-->
    <div class="row">
        <div class="col-xs-12 col-lg-9 index-main-section">

        </div>
        <div class="col-xs-12 col-lg-3 index-login-section d-none d-lg-block">
            <form id="login-form" method="post" action="#">
                <label>Usuario:</label>
                <br><input type="email" id="emailLogin" name="emailLogin"><br>
                <label>Password:</label>
                <br><input type="password" id="passwordLogin" name="passwordLogin"><br><br>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>

<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
</body>
</html>