@extends('admin')

@section('title', '- Permissions')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.permissions.index') }}">Permissions</a></li>
        <li class="active">Ajouter</li>
    </ol>

    <h1 class="page-header">Ajouter une permission</h1>
    {!! BootForm::open()->post()->action(route('admin.permissions.store')) !!}
        {!! BootForm::text('Permission', 'name')->placeholder('method-controller[plural]') !!}
        {!! BootForm::text('Nom', 'display_name') !!}
        {!! BootForm::text('Model', 'model')->placeholder('Singular & LowerCase') !!}
        {!! BootForm::textarea('Description', 'description') !!}
        {!! BootForm::submit('Enregistrer')->addClass('btn-primary pull-right') !!}
    {!! BootForm::close() !!}
@endsection