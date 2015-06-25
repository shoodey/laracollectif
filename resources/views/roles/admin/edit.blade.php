@extends('admin')

@section('title', '- Roles')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.roles.index') }}">Rôles</a></li>
        <li class="active">Editer</li>
    </ol>

    <h1 class="page-header">Editer un rôle</h1>
    {!! BootForm::open()->put()->action(route('admin.roles.update', $role)) !!}
    {!! BootForm::text('Rôle', 'name')->value($role->name) !!}
    {!! BootForm::text('Nom', 'display_name')->value($role->display_name) !!}
    {!! BootForm::textarea('Description', 'description')->value($role->description) !!}


    <h1>Permissions</h1>
        @foreach($permissions as $permission)
               @if(in_array($permission->id, $role->perms->lists('id')->toArray()))
                   {!! BootForm::checkbox($permission->display_name, "permissions[$permission->id]")->check() !!}
               @else
                   {!! BootForm::checkbox($permission->display_name, "permissions[$permission->id]") !!}
               @endif
        @endforeach



    {!! BootForm::submit('Enregistrer')->addClass('btn-primary pull-right') !!}
    {!! BootForm::close() !!}
@endsection