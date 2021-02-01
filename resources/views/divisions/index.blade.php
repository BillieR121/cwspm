@extends('layouts/admin-layout')

@section('title')
    CWS Admin Divisions
@endsection

@section('content')
    <div class="row">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-2">
                    <ul class="vertical tabs" data-tabs id="division-tabs">
                      <li class="tabs-title"><a href="#panel1v" aria-selected="true">Division Index</a></li>
                      <li class="tabs-title"><a href="#panel2v">Add Division</a></li>
                      <li class="tabs-title"><a href="#panel3v">Edit Division</a></li>
                      <li class="tabs-title"><a href="#panel4v">Delete Division</a></li>
                    </ul>
                  </div>
            </div>
        </div>
    </div>
@endsection
