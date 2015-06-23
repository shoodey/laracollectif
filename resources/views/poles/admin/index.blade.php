@extends('admin')

@section('title', '- Users')

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
        <li class="active">Pôles</li>
    </ol>

    <h1 class="page-header">Pôles</h1>
    <table id="dataTable" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Administrateur</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($poles as $pole)
            <tr>
                <td>{{ $pole->id }}</td>
                <td>{{ $pole->name }}</td>
                <td>{!! ($pole->user->email == Auth::user()->email) ? "<span class='label label-success'>{$pole->user->email}" : $pole->user->email !!}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.users.edit', $pole) }}">Editer</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection