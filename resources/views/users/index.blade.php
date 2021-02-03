@extends('layouts/admin-layout')

@section('title')
    CWS Admin Users
@endsection

@section('content')
    <div class="row">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-1">
                    <ul class="vertical menu bg-dark cws-menu-text">
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('user.index') }}">User Index</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('user.create') }}">Add User</a>
                        </li>
                        <li><a class="bg-dark cws-menu-text" href="#">Edit User</a></li>
                        <li><a class="bg-dark cws-menu-text" href="#">Delete User</a></li>
                      </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
