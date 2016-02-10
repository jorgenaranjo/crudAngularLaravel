@extends('layouts.maintemplate')

@section('content')
    <div class="container" data-ng-controller="UserController as users">
        <table class="table">
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
            </tr>
            <tr data-ng-repeat="d in data">
                <td>@{{ d.name }}</td>
                <td>@{{ d.email }}</td>
            </tr>
        </table>
    </div>
@endsection
