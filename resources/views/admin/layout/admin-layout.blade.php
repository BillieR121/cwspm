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
            <header class="user-header-bg">
                <div class="static-top">
                    <div class="row">
                        <div class="grid-container full">
                            <div class="grid-x">
                                <div class="cell small-6 align-center">
                                    <img src="{{ asset('/img/user_header/cws_page_weblogo.png') }}"/>
                                </div>
                                <div align="center" class="cell-6"><h1>Admin Console</h1></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <nav class="static-top">
                <div class="container">
                    <ul class="menu bg-dark align-right">
                        <li>
                            <a class="{{ Request::path() === '/' ? 'current_page_item' : '' }} bg-dark text-white-50" href="{{ route('home.homepage') }}">Home</a>
                        </li>
                        <li>
                            <a class="{{ Request::path() === '/esimating' ? 'current_page_item' : '' }} bg-dark text-white-50" href="{{ route('home.estimating') }}">Estimating</a>
                        </li>
                        <li>
                            <a class="{{ Request::path() === '/pm' ? 'current_page_item' : '' }} bg-dark text-white-50" href="{{ route('home.pm') }}">Project Management</a>
                        </li>
                        <li>
                            <a class="{{ Request::path() === '/consulting' ? 'current_page_item' : '' }} bg-dark text-white-50" href="{{ route('home.consulting') }}">Consulting</a>
                        </li>
                        <li>
                            <a class="{{ Request::path() === '/drafting' ? 'current_page_item' : '' }} bg-dark text-white-50" href="{{ route('home.drafting') }}">Drafting & Design</a>
                        </li>
                        <li>
                            <a class="{{ Request::path() === '/contact' ? 'current_page_item' : '' }} bg-dark text-white-50" href="{{ route('home.contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('content')
                <footer>
                    <div class="footer text-center text-white-50">
                        <p class="font-weight-bold">Copyright &copy; Construction Web Services. 2019 - {{ now()->year }} Version <strong><em>{{ $version }}</em></strong></p>
                    </div>
                </footer>
            <script src="{{ mix('js/app.js') }}"></script>
        </body>
    </html>
