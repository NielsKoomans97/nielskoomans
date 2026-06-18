<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Dagboek' }}</title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="/dist/app.css">
    <script src="/dist/app.js" defer></script>
</head>

<body>
    <header>
        <section class="header">
            <div class="container">
                <div class="row justify-content-between align-items-center padding-y-1">
                    <a class="col-auto flex-column align-items-center gap-3 transparent" href="{{ route('home') }}">
                        <i class="ti ti-book-2"></i>
                        <h3 class="m-0">Dagboek</h3>
                    </a>

                    <div class="col-auto flex-column align-items-center gap-3">
                        @auth
                            <div class="row align-items-center gap-2">
                                {{-- <small class="mb-1"></small> --}}
                                <a href="{{ route('profile.edit') }}" class="d-flex align-items-center gap-2">
                                    <i class="ti ti-user"></i>
                                    {{ Auth::user()->name }}
                                </a>
                                <a href="{{ route('logout') }}" class="d-flex align-items-center gap-3"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="ti ti-logout"></i>

                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        @endauth

                        @guest
                            <div class="row align-items-center">
                                <a href="{{ route('login') }}" class="d-flex align-items-center gap-2 login">
                                    <i class="ti ti-login"></i>
                                    Inloggen
                                </a>
                                <a href="{{ route('register') }}" class="d-flex align-items-center gap-2 register">
                                    <i class="ti ti-user-plus"></i>
                                    Registreren
                                </a>
                            </div>
                        @endguest
                    </div>
                </div>

            </div>
        </section>

    </header>

    <main>
        <section class="button-bar">
            <x-button-bar :url="request()->path()" />
        </section>

        @yield('content')
    </main>
</body>

</html>
