@extends('layouts.admin-layout')

@section('content')
    <div class="row">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-2">
                    <ul class="menu vertical bg-dark">
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.version.index') }}">Version Index</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.version.create') }}">Add Version</a>
                        </li>
                    </ul>
                </div>
                <div class="cell small-10">
                    <h2 class="subheader" align="center">CSI Version Index</h2><br><br>
                </div>
            </div>
        </div>
    </div>
@endsection
