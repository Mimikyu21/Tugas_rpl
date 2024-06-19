<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if(Auth::check())
<h1>welcome to our website</h1>
    
<a href="{{ route('logout') }}">Logout</a>
@else
<h1>Silahkan login terlebih dahulu</h1>
    
<a href="{{ route('login') }}">Login</a>
@endif
</body>
</html>