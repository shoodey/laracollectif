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
        {!! BootForm::submit('Enregistrer')->addClass('btn-primary pull-right') !!}
    {!! BootForm::close() !!}
@endsection