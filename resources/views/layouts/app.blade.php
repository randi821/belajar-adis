<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                @yield('navbar')
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script>
        var addModal = function (url, title = "", type="html") {
            $('#add-modal-box .modal-body').html(`<br><div class='text-center'><i class="fa fa-circle-o-notch fa-spin"></i></div>`);
            loadUrlTo('#add-modal-box .modal-body', url, type);
            $('#add-modal-box .modal-title').html(title);
            $('#add-modal-box').modal('show');
        }
        var loadUrlTo = function (tmpTarget, tmpUrl, type) {
            if (type == 'img') {
                $(tmpTarget).empty().append("<img src='" + tmpUrl + "' class='w-100'/>");
            } else {
                $.ajax({
                    type: 'GET',
                    cache: false,
                    url: tmpUrl,
                    dataType: 'HTML',
                    success: function (response) {
                        // stopPageLoading();
                        window.onerror 	= true;
                        $(tmpTarget).empty().append(response);
                        // handleInit()
                    },
                    error: function (xhr, status, error) {
                        // stopPageLoading();
                        $(tmpTarget).empty().append(`<font color='red'>`+xhr.statusText+`</font>`);
                    }
                });
            }
        }
        $('body').on('click', '[data-toggle=popajax]', function (e) {
            e.preventDefault();
            if (e.which != 1) return false;

            let url = $(this).attr('data-url');
            let title = $(this).attr('data-title') ?? '&nbsp;';
            let type = $(this).attr('data-url-type') ?? 'html';

            addModal(url, title, type);
        });
    </script>
</body>
</html>
