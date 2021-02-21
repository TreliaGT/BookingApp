<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Booking o.0</title>
        <style src="{{asset('css/styles.css')}}"> </style>
    </head>
    <body>
        <div class="container">
            <header>
                <nav>
                    <ul>
                        <li><a>Home!</a></li>
                    </ul>
                </nav>
            </header>

            @yield('body');
        </div>
        <script src="{{ asset('js/script.js') }}" defer></script>
    </body>
</html>
