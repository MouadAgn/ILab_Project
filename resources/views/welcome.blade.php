<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ url('/img/ilab_logo.png') }}">
    <title>ILAB</title>
    <link rel="stylesheet" href="/css/welcome.css">
</head>
<body>
    <div style="float: right; margin-top: 25px;">
        @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a style="text-decoration: none; color: white; padding-right: 20px; margin-top: 20px; font-size:18px; color: #03e9f4" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                @endauth
            </div>
        @endif
    </div>    
    <div class="login-box">
        <h2>Bienvenido a ILAB</h2><br>
        <form>
          <div class="user-box">
            <input type="text" name="" required="">
            <label>Nr de muestra</label>
          </div>
          <div class="user-box">
            <input type="password" name="" required="">
            <label>PIN</label>
          </div>
          <a href="#" style="margin-left: 70px;">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Descargar
          </a>
        </form>
      </div>
</body>
</html>