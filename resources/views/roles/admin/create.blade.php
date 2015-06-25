@extends('admin')

@section('title', '- Roles')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.roles.index') }}">Rôles</a></li>
        <li class="active">Ajouter</li>
    </ol>

    <h1 class="page-header">Ajouter un rôle</h1>
    {!! BootForm::open()->post()->action(route('admin.roles.store')) !!}
        {!! BootForm::text('Rôle', 'name') !!}
        {!! BootForm::text('Nom', 'display_name') !!}
        {!! BootForm::textarea('Description', 'description') !!}

    <h1 class="page-header">Permissions</h1>
    <div class="row">
        @foreach($permissions->groupBy('model') as $model => $permissions)
            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ ucfirst($model) }}</h3>
                    </div>
                    <div class="panel-body">
                        @foreach($permissions as $permission)
                            {!! BootForm::checkbox($permission->display_name, "permissions[$permission->id]") !!}
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {!! BootForm::submit('Enregistrer')->addClass('btn-primary pull-right') !!}
    {!! BootForm::close() !!}
@endsection