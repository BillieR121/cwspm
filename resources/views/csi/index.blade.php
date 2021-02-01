@extends('layouts/admin-layout')

@section('title')
    CWS Admin CSI Codes
@endsection

@section('content')
    <div class="row">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-2">
                    <ul class="vertical tabs" data-tabs id="csi-tabs">
                      <li class="tabs-title"><a href="#panel1v" aria-selected="true">CSI Index</a></li>
                      <li class="tabs-title"><a href="#panel2v">Add CSI Code</a></li>
                      <li class="tabs-title"><a href="#panel3v">Edit CSI Code</a></li>
                      <li class="tabs-title"><a href="#panel4v">Delete CSI Code</a></li>
                    </ul>
                  </div>
            </div>
        </div>
    </div>
@endsection
