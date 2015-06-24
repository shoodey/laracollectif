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
        <li class="active">Utilisateurs</li>
    </ol>

    <h1 class="page-header">Utilisateurs</h1>
    <table id="dataTable" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Rôle</th>
            <th>Pôle</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if($user->roles->first()['name'] === "admin")
                        <h5><span class="label label-success">{{ $user->roles->first()['display_name'] }}</span></h5>
                    @elseif($user->roles->first()['name'] === "super_admin")
                        <h5><span class="label label-danger">{{ $user->roles->first()['display_name'] }}</span></h5>
                    @else
                        <h5><span class="label label-default">{{ $user->roles->first()['display_name'] }}</span></h5>
                    @endif
                </td>
                <td></td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.users.edit', $user) }}">Editer</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection