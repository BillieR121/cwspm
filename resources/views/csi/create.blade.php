@extends('layouts/admin-layout')

@section('title')
    CWS Admin Add CSI Codes
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
                <div class="'cell small-3"></div>
                <div class="cell small-4 home-title home-content">
                    <h2 class="subheader" align="center">Add CSI Code</h2>
                    <form data-abide novalidate>
                        <label for="division">Division</label>
                        <input id="division" type="text" placeholder="Division"><br>
                        <label for="csicode">CSI Code</label>
                        <input id="csicode" type="text" placeholder="CSI Code"><br>
                        <label for="description">Desciption</label>
                        <input id="description" type="text" placeholder="Description"><br>
                        <a class="button bg-dark cws-menu-text" href="#">Submit</a>
                    </form>
                </div>
                <div class="cell small-2 align-center"></div>
                <div class="cell cmall-2">

                </div>
            </div>
        </div>
    </div>
@endsection

