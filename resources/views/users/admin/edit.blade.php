@extends('admin')

@section('title', '- Users')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.users.index') }}">Utilisateurs</a></li>
        <li class="active">Editer</li>
    </ol>

    <h1 class="page-header">Editer un utilisateur</h1>
    {!! BootForm::open()->put()->action(route('admin.users.update', $user)) !!}
        {!! BootForm::text('Nom', 'name')->value($user->name)->disable() !!}
        {!! BootForm::email('Adresse Email', 'email')->value($user->email)->disable() !!}
        {!! BootForm::select('Rôle', 'role')->options($roles)->select($user->roles->first()['id']) !!}
        {!! BootForm::submit('Enregistrer')->addClass('btn-primary pull-right') !!}
    {!! BootForm::close() !!}
@endsection