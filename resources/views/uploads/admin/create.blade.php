@extends('admin')

@section('title', '- Uploads')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.permissions.index') }}">Uploads</a></li>
        <li class="active">Ajouter</li>
    </ol>

    <h1 class="page-header">Ajouter un fichier</h1>
    {!! BootForm::open()->post()->action(route('admin.uploads.store'))->multipart() !!}
    {!! BootForm::file('Fichier', 'file') !!}
    {!! BootForm::text('Nom du fichier', 'name') !!}
    {!! BootForm::select('Catégorie', 'category_id')->options($categories) !!}
    {!! BootForm::submit('Enregistrer')->addClass('btn-primary pull-right') !!}
    {!! BootForm::close() !!}
@endsection