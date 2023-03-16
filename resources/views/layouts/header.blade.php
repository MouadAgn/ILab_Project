<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="left">
        <div class="item">
        <span class="glyphicon glyphicon-th-large"></span>
        </div>
        <div class="item active">
        <span class="glyphicon glyphicon-home"></span>
        <a href="{{ Route('welcome')}}" class="nav_items">Home</a></div>
        <div class="item">
        <span class="glyphicon glyphicon-th-list"></span>
        <a href="{{ url('/Informes') }}" class="nav_items">Informes</a></div>
        <div class="item">
        <span class="glyphicon glyphicon-briefcase"></span>
        <a href="{{ url('/Clinicas') }}" class="nav_items">Clinicas</a></div>
        <div class="item">
        <span class="glyphicon glyphicon-list-alt"></span>
        <a href="{{ url('/Plantillas') }}" class="nav_items">Plantillas</a></div> 
        <div class="item">
        <span class="glyphicon glyphicon-king"></span>
        <a href="{{ url('/Cliente') }}" class="nav_items">Clientes</a></div>
        <div class="item">
        <span class="glyphicon glyphicon-user"></span>
        <a href="{{ url('/Usuarios') }}" class="nav_items">Usuarios</a></div>    
        </div>
        
    </div>
    
</body>
</html>

