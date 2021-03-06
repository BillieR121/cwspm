@extends('layouts.admin-layout')

@section('title')
    CWS Admin CSI Major
@endsection

@section('content')
    <div class="row">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-1">
                    <ul class="menu vertical bg-dark">
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.csi.index') }}">CSI Index</a>
                        </li>
                        <li>
                            <a class="bg-dark cws-menu-text" href="{{ route('admin.csi.create') }}">Add CSI Code</a>
                        </li>
                    </ul>
                </div>
                <div class="cell small-2"></div>
                <div class="cell small-7">
                    <h2 class="subheader" align="center">CSI Major Index</h2><br>
                    <div class="cws-table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Division</th>
                                    <th>CSI Code</th>
                                    <th>Description</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($codes as $code)
                                    <tr>
                                        <td align="center">{{ $code->division }}</td>
                                        <td align="center">{{ $code->code }}</td>
                                        <td>{{ $code->description }}</td>
                                        <td align="center"><a href="#">Edit</a></td>
                                        <td align="center"><a href="#">Delete</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="cell small-2"></div>
            </div>
        </div>
    </div>
@endsection
