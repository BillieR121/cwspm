@extends('layouts/admin-layout')

@section('title')
    CWS Admin CSI Codes
@endsection

@section('content')
    <div class="row">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-1">
                    <ul class="vertical menu bg-dark cws-menu-text">
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('csi.index') }}">CSI Index</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('csi.create') }}">Add CSI Code</a>
                        </li>
                        <li><a class="bg-dark cws-menu-text" href="#">Edit CSI Code</a></li>
                        <li><a class="bg-dark cws-menu-text" href="#">Delete CSI Code</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
