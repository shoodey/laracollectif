@extends('admin')

@section('title', '- Users')

@section('script')
    <script src="{{ url('/js/autocomplete.js') }}"></script>
    <script>
        var users = <?php echo $users; ?>;

        $('#autocomplete').autocomplete({
            lookup: users,
            onSelect: function (suggestion) {
                this.value = suggestion.email;
            }
        });
    </script>
@endsection

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.poles.index') }}">Pôles</a></li>
        <li class="active">Ajouter</li>
    </ol>

    <h1 class="page-header">Ajouter un pôle</h1>
    {!! BootForm::open()->post()->action(route('admin.poles.store')) !!}
        {!! BootForm::text('Nom', 'name') !!}
        {!! BootForm::text('Administrateur', 'email')->id('autocomplete')->value(Auth::user()->email) !!}
        {!! BootForm::submit('Enregistrer')->addClass('btn-primary pull-right') !!}
    {!! BootForm::close() !!}
@endsection