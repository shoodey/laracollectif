@extends('admin')

@section('title', '- Permissions')

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
        <li class="active">Permissions</li>
    </ol>

    <h1 class="page-header">Permissions</h1>
    <table id="dataTable" class="table table-striped table-bordered table-responsive">
        <thead>
        <tr>
            <th>ID</th>
            <th>Permission</th>
            <th>Nom</th>
            <th class="hidden-sm hidden-xs">Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($permissions as $permission)
            <tr>
                <td>{{ $permission->id }}</td>
                <td>{{ $permission->name }}</td>
                <td>{{ $permission->display_name }}</td>
                <td class="hidden-sm hidden-xs">{{ str_limit($permission->description, 50) }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.permissions.edit', $permission) }}">Editer</a>
                    <a class="btn btn-danger" href="{{ route('admin.permissions.destroy', $permission) }}" data-method="delete" data-confirm="Êtes vous sûr de vouloir supprimer cette permission?">Supprimer</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p><a class="btn btn-primary" href="{{ route('admin.permissions.create') }}">Ajouter une permission</a></p>
@endsection