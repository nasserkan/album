<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">


    <title>@yield('title')</title>
</head>
<body>
    {{-- nav --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route("home")}}" style="font-size: xx-large">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/' . $page='admin/user') }}" style="font-size: xx-large">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/' . $page='admin/album') }}" style="font-size: xx-large">Albums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/' . $page='admin/photo') }}" style="font-size: xx-large">Photos</a>
                </li>

            </ul>
        </div>
    </nav>

    {{-- nav --}}

    <main class="text-center">
        <section id="title">
            <h1>@yield('titleH1')</h1>
            <h2>@yield('titleH2')</h2>
        </section>
            @yield('content')
    </main>

    {{-- script --}}
<script src="{{ asset("js/app.js") }}"></script>
    {{-- script --}}

</body>
</html>
