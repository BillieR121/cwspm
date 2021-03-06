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
                            <div class="grid-x align-middle">
                                <div class="cell small-6 align-center">
                                    <img src="{{ asset('/img/user_header/cws_page_weblogo.png') }}"/>
                                </div>
                                <div align="center" class="cell-6"><h2>Admin Console</h2></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <nav class="static-top">
                <div class="grid-container full">
                    <ul class="menu bg-dark align-right">
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.users.index') }}">Users</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.contacts.index') }}">Contacts</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.divisions.index') }}">Divisions</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.csi.index') }}">CSI Codes</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.version.index') }}">Version</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.index') }}">Admin Home</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('public.homepage') }}">Home</a>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('content')
                <footer class="footer">
                    <div class="text-center cws-menu-text">
                        <p class="font-weight-bold">Copyright &copy; Construction Web Services   2019 - {{ now()->year }} Version <strong><em>{{ $version }}</em></strong></p>
                    </div>
                </footer>
            <script src="{{ mix('js/app.js') }}"></script>
        </body>
    </html>
