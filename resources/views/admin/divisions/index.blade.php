@extends('layouts/admin-layout')

@section('title')
    CWS Admin Divisions
@endsection

@section('content')
    <div class="row">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-1">
                    <ul class="vertical menu bg-dark">
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.divisions.index') }}">Division Index</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.divisions.create') }}">Add Division</a>
                        </li>
                    </ul>
                </div>
                <div class="cell small-11">
                    <h2 class="subheader" align="center">Divisions Index</h2><br><br>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
