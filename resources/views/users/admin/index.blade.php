@extends('admin')

@section('title', '- Users')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="active">Utilisateurs</li>
    </ol>

    <h1 class="page-header">Utilisateurs</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Pôle</th>
            <th>Rang</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>---</td>
                <td>
                    {!! $user->role == 'admin' ? "<span class='label label-success'>Administrateur</span>" : "<span class='label label-default'>Utilisateur</span>" !!}
                </td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.users.edit', $user) }}">Editer</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection