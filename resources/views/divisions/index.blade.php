@extends('layouts/admin-layout')

@section('title')
    CWS Admin Divisions
@endsection

@section('content')
    <div class="row">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-1">
                    <ul class="vertical menu bg-dark cws-menu-text">
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('division.index') }}">Division Index</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('division.create') }}">Add Division</a>
                        </li>
                        <li><a class="bg-dark cws-menu-text" href="#">Edit Division</a></li>
                        <li><a class="bg-dark cws-menu-text" href="#">Delete Division</a></li>
                      </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
