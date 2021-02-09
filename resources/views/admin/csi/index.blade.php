@extends('layouts.admin-layout')

@section('title')
    CWS Admin CSI Major
@endsection

@section('content')
    <div class="row">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-2">
                    <ul class="menu vertical bg-dark">
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.csi.index') }}">CSI Index</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.csi.create') }}">Add CSI Code</a>
                        </li>
                    </ul>
                </div>
                <div class="cell small-8">
                    <h2 class="subheader" align="center">CSI Major Index</h2><br><br>
                </div>
                <div class="cell small-2"></div>
            </div>
        </div>
    </div>
@endsection
