@extends('layouts/admin-layout')

@section('title')
    CWS Admin Contacts
@endsection

@section('content')
    <div class="row">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-1">
                    <ul class="vertical menu bg-dark cws-menu-text">
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('contacts.index') }}">Contacts Index</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('contacts.create') }}">Add Contact</a>
                        </li>
                        <li><a class="bg-dark cws-menu-text" href="#">Edit Contact</a></li>
                        <li><a class="bg-dark cws-menu-text" href="#">Delete Contact</a></li>
                      </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
