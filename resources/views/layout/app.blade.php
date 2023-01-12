<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("css/app.css")}}">
    <title>Document</title>
</head>
<body>
    <header>
        @include('partials.menu')
    </header>
    <div class="jumbotron">

    </div>
    <main>
        @yield('main-content')
    </main>
    <footer>
        @include('partials.footer')
    </footer>
    
</body>
</html>