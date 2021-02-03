@extends('layouts/admin-layout')

@section('title')
    CWS Admin Version
@endsection

@section('content')
    <div class="row">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-1">
                    <ul class="vertical menu bg-dark cws-menu-text">
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('version.index') }}">Version Index</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('version.create') }}">Add Version</a>
                        </li>
                        <li><a class="bg-dark cws-menu-text" href="#">Edit Version</a></li>
                        <li><a class="bg-dark cws-menu-text" href="#">Delete Version</a></li>
                      </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
