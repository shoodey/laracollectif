@extends('admin')

@section('title', '- Categories')

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
        <li class="active">Catégories</li>
    </ol>

    <h1 class="page-header">Catégories</h1>
    <table id="dataTable" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Nom du dossier</th>
            <th>Dossier Parent</th>
            <th>Decription</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->display_name }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->parent['name'] }}</td>
                <td class="hidden-sm hidden-xs">{{ str_limit($category->description, 50) }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.categories.edit', $category) }}">Editer</a>
                    <a class="btn btn-danger" href="{{ route('admin.categories.destroy', $category) }}" data-method="delete" data-confirm="Êtes vous sûr de vouloir supprimer cet enregistrement?">Supprimer</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p><a class="btn btn-primary" href="{{ route('admin.categories.create') }}">Ajouter une catégorie</a></p>
@endsection