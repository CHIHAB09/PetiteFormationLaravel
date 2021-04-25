<!-- Construction de layout pour tout le site devision par partie-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon super site</title>
    <!-- permet d'inclure notre propre css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.navbar')
    <div class="container mx-auto">
    <!-- grave a yield qui est inclue dans blade ceux-la va nous permettre d integrer des contenue dinamic-->
        @yield('content')
    </div>

<!-- faire un appel de notre js -->
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>