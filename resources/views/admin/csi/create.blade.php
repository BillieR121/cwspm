@extends('layouts/admin-layout')

@section('title')
    CWS Admin Add CSI Codes
@endsection

@section('content')
    <div class="row">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-1">
                    <!-- Sidebar -->
                    <ul class="vertical menu bg-dark">
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.csi.index') }}">CSI Index</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.csi.create') }}">Add CSI Code</a>
                        </li>
                    </ul>
                </div>
                <div class="'cell small-4"></div>
                <div class="cell small-3"><br><br>
                    <h3 class="subheader" align="center">Add CSI Code</h3><br>
                    <form data-abide novalidate>
                        <div class="row">
                        <label for="division">Division</label>
                        <input id="division" type="text" size="50" placeholder="Division"><br>
                        <label for="csicode">CSI Code</label>
                        <input id="csicode" type="text" placeholder="CSI Code"><br>
                        <label for="description">Desciption</label>
                        <input id="description" type="text" placeholder="Description"><br>
                        <a class="button bg-dark cws-menu-text" href="#">Submit</a>
                    </form>
                </div>
                <div class="cell small-4"></div>
            </div>
        </div>
    </div>
@endsection

