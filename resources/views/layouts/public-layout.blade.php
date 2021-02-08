<!DOCTYPE html>
    <html>
        <head>

            <meta charset="UTF-8"/>
            <meta name="copyright" content="Construction Web Services"/>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>

            <title>@yield('title')</title>

            <link href="{{ mix('css/app.css') }}" rel="stylesheet"/>

        </head>
        <body>
            <header class="public-header-bg">
                <div class="static-top">
                    <div class="row">
                        <div class="grid-container full">
                            <div class="grid-x">
                                <div class="cell small-3"></div>
                                <div class="cell small-6 align-center">
                                    <img src="{{ asset('/img/public_header/cws_public_weblogo.png') }}"/>
                                </div>
                                <div class="cell-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <nav class="static-top">
                <div class="container">
                    <ul class="menu bg-dark align-right">
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('public.homepage') }}">Home</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('public.estimating') }}">Estimating</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('public.pm') }}">Project Management</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('public.consulting') }}">Consulting</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('public.drafting') }}">Drafting & Design</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('public.contact') }}">Contact</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.index') }}">Admin</a>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('content')
                <footer>
                    <div class="footer text-center cws-menu-text">
                        <p class="font-weight-bold">Copyright &copy; Construction Web Services - 2019 - {{ now()->year }} Version <strong><em>{{ $version }}</em></strong></p>
                    </div>
                </footer>
            <script src="{{ mix('js/app.js') }}"></script>
        </body>
    </html>
