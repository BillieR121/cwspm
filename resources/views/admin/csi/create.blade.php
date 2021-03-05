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
                    <h3 class="subheader" align="center">Add CSI Code</h3>
                    <p class="required-before">Indicates Required Field</p>
                    <form data-abide novalidate method="POST" action="admin.csi.store">
                        @csrf
                        <div class="row">
                            <label for="division" class="required-after">Division</label>
                            <select id="division" required><br>
                            <label for="code" class="required-after">CSI Code</label>
                            <input id="code" type="text" placeholder="CSI Code"><br>
                            <label for="description" class="required-after">Desciption</label>
                            <input id="description" type="text" placeholder="Description"><br>
                            <a class="button bg-dark cws-menu-text" href="{{ route('admin.csi.store') }}">Submit</a>
                        </div>
                    </form>
                </div>
                <div class="cell small-4"></div>
            </div>
        </div>
    </div>
@endsection

