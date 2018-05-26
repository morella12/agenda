<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Agenda">
    <meta name="author" content="Ellen Morganna">

    <meta property="og:title" content="Agenda" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Agenda" />

    <title>Agenda</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('/js/style.js') }}"></script>

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<div id="app">

    <ul >
    <section id="home" name="home"></section>
    <div class="container">
        <h1 id="inicio">Seja bem vindo a sua agenda!</h1>
        <div class="login">
            <h2>Escolha uma das opções:</h2>
                @if (Auth::guest())
            <div class="list-group row">
                <a href="{{ url('/login') }}"><button class="list-group-item col-md-6 col-xs-12">Entrar</button></a>
                <a href="{{ url('/register') }}"><button class="list-group-item col-md-6 col-xs-12">Cadastrar</button></a>
                @else
                    <a href="/home"><button class="list-group-item">{{ Auth::user()->name }}</a>
                @endif
           </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/smoothscroll.js') }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
