@extends('admin')

@section('title', '- Categories')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.categories.index') }}">Catégories</a></li>
        <li class="active">Editer</li>
    </ol>

    <h1 class="page-header">Editer une catégorie</h1>
    {!! BootForm::open()->put()->action(route('admin.categories.update', $category)) !!}
        {!! BootForm::text('Nom de la catégorie', 'display_name')->value($category->display_name) !!}
        {!! BootForm::text('Nom', 'name')->value($category->name) !!}
        {!! BootForm::textarea('Description', 'description')->value($category->description) !!}
        {!! BootForm::select('Catégorie parente', 'parent_id')->options($categories)->select$category->parent_id) !!}
        {!! BootForm::submit('Enregistrer')->addClass('btn-primary pull-right') !!}
    {!! BootForm::close() !!}
@endsection