@extends('admin')

@section('title', '- Categories')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.roles.index') }}">Catégories</a></li>
        <li class="active">Ajouter</li>
    </ol>

    <h1 class="page-header">Ajouter une catégorie</h1>
    {!! BootForm::open()->post()->action(route('admin.categories.store')) !!}
        {!! BootForm::text('Nom de la catégorie', 'display_name') !!}
        {!! BootForm::text('Nom du dossier', 'name') !!}
        {!! BootForm::hidden('path') !!}
        {!! BootForm::textarea('Description', 'description') !!}
        {!! BootForm::select('Catégorie Parente', 'parent_id')->options($categories) !!}
        {!! BootForm::submit('Enregistrer')->addClass('btn-primary pull-right') !!}
    {!! BootForm::close() !!}
@endsection