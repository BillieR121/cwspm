@extends('layouts/admin-layout')

@section('title')
    CWS Admin Version
@endsection

@section('content')
    <div class="row">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-2">
                    <ul class="vertical tabs" data-tabs id="version-tabs">
                      <li class="tabs-title"><a href="#panel1v" aria-selected="true">Version Index</a></li>
                      <li class="tabs-title"><a href="#panel2v">Add Version</a></li>
                      <li class="tabs-title"><a href="#panel3v">Edit Version</a></li>
                      <li class="tabs-title"><a href="#panel4v">Delete Version</a></li>
                    </ul>
                  </div>
            </div>
        </div>
    </div>
@endsection
