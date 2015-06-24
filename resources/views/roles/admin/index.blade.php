@extends('admin')

@section('title', '- Roles')

@section('style')
    <link href="{{ url("/css/datatables.css") }}" rel="stylesheet">
@endsection

@section('script')
    <script src="{{ url('/js/datatables.min.js') }}"></script>
    <script src="{{ url('/js/datatables.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').dataTable( {
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/French.json"
                }
            } );
        } );
    </script>
@endsection

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="active">Rôles</li>
    </ol>

    <h1 class="page-header">Rôles</h1>
    <table id="dataTable" class="table table-striped table-bordered table-responsive">
        <thead>
        <tr>
            <th>ID</th>
            <th>Rôle</th>
            <th>Nom</th>
            <th class="hidden-sm hidden-xs">Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>{{ $role->display_name }}</td>
                <td class="hidden-sm hidden-xs">{{ str_limit($role->description, 50) }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.roles.edit', $role) }}">Editer</a>
                    <a class="btn btn-danger" href="{{ route('admin.roles.destroy', $role) }}" data-method="delete" data-confirm="Êtes vous sûr de vouloir supprimer ce rôle?">Supprimer</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p><a class="btn btn-primary" href="{{ route('admin.roles.create') }}">Ajouter un rôle</a></p>
@endsection