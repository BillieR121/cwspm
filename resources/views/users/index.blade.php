@extends('layouts/admin-layout')

@section('title')
    CWS Admin Users
@endsection

@section('content')
    <div class="row">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-2">
                    <ul class="vertical tabs" data-tabs id="user-tabs">
                      <li class="tabs-title"><a href="#panel1v" aria-selected="true">User Index</a></li>
                      <li class="tabs-title"><a href="#panel2v">Add User</a></li>
                      <li class="tabs-title"><a href="#panel3v">Edit User</a></li>
                      <li class="tabs-title"><a href="#panel4v">Delete User</a></li>
                    </ul>
                  </div>
            </div>
        </div>
    </div>
@endsection
