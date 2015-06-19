@extends('app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Se connecter</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    {!! BootForm::open()->post()->action(url('auth/login'))!!}
                    {!! BootForm::email('Adresse Email', 'email') !!}
                    {!! BootForm::password('Mot de passe', 'password') !!}
                    {!! BootForm::submit('Se connecter')->addClass('btn-primary pull-right') !!}
                    {!! BootForm::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection