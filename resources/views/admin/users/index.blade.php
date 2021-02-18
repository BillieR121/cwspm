@extends('../layouts.admin-layout')

@section('title')
    CWS Admin Users
@endsection

@section('content')
    <div class="row">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-2">
                    <ul class="menu vertical bg-dark admin-sidebar">
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.users.index') }}">Users Index</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.users.create') }}">Add User</a>
                        </li>
                    </ul>
                </div>
                <div class="cell small-10">
                    <h2 class="subheader" align="center">Users Index</h2><br><br>
                </div>
            </div>
        </div>
    </div>
@endsection
