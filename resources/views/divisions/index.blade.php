@extends('layouts/admin-layout')

@section('title')
    CWS Admin Divisions
@endsection

@section('content')
    <div class="row">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell medium-1">
                    <ul class="vertical tabs bg-dark" data-tabs id="division-tabs">
                      <li class="tabs-title is-active bg-dark text-white-50"><a href="#panel1v" aria-selected="true">Division Index</a></li>
                      <li class="tabs-title bg-dark text-white-50"><a href="#panel2v">Add Division</a></li>
                      <li class="tabs-title bg-dark text-white-50"><a href="#panel3v">Edit Division</a></li>
                      <li class="tabs-title bg-dark text-white-50"><a href="#panel4v">Delete Division</a></li>
                    </ul>
                  </div>
            </div>
        </div>
    </div>
@endsection
