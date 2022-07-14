<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- GoogleFonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{asset('assets/bootstrap/bootstrap.css')}}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- FontAwesome --}}
    <link rel="stylesheet" href="{{asset('assets/fontawesome/CSS/fontawesome.min.css')}}">
    <script src="{{asset('assets/index.js')}}"></script>

</head>
<script>


</script>
<body>
    <header>
        <a href="{{Route('home')}}"><h3>ToDoList</h3></a>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>

    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="{{asset('assets/bootstrap/bootstrap.js')}}"></script>
</body>
</html>
