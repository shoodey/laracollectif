@extends('admin')

@section('title', '- Roles')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.permissions.index') }}">Permissions</a></li>
        <li class="active">Editer</li>
    </ol>

    <h1 class="page-header">Editer une permission</h1>
    {!! BootForm::open()->put()->action(route('admin.permissions.update', $permission)) !!}
        {!! BootForm::text('Permission', 'name')->value($permission->name) !!}
        {!! BootForm::text('Nom', 'display_name')->value($permission->display_name) !!}
        {!! BootForm::textarea('Description', 'description')->value($permission->description) !!}
        {!! BootForm::submit('Enregistrer')->addClass('btn-primary pull-right') !!}
    {!! BootForm::close() !!}
@endsection