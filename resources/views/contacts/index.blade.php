@extends('layouts/admin-layout')

@section('title')
    CWS Admin Contacts
@endsection

@section('content')
    <div class="row">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-2">
                    <ul class="vertical tabs" data-tabs id="contacts-tabs">
                      <li class="tabs-title"><a href="#panel1v" aria-selected="true">Contacts Index</a></li>
                      <li class="tabs-title"><a href="#panel2v">Add Contact</a></li>
                      <li class="tabs-title"><a href="#panel3v">Edit Contact</a></li>
                      <li class="tabs-title"><a href="#panel4v">Delete Contact</a></li>
                    </ul>
                  </div>
            </div>
        </div>
    </div>
@endsection
