@extends('admin')

@section('title', '- Poles')

@section('style')
    <style>
        .autocomplete-suggestions { border: 1px solid #999; background: #FFF; overflow: auto; }
        .autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
        .autocomplete-selected { background: #F0F0F0; }
        .autocomplete-suggestions strong { font-weight: normal; color: #3399FF; }
        .autocomplete-group { padding: 2px 5px; }
        .autocomplete-group strong { display: block; border-bottom: 1px solid #000; }
    </style>
@endsection

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
        <li class="active">Editer</li>
    </ol>

    <h1 class="page-header">Editer un pôle</h1>
    {!! BootForm::open()->put()->action(route('admin.poles.update', $pole)) !!}
    {!! BootForm::text('Nom', 'name')->value($pole->name) !!}
    {!! BootForm::text('Administrateur', 'email')->id('autocomplete')->value($pole->user->email) !!}
    {!! BootForm::submit('Enregistrer')->addClass('btn-primary pull-right') !!}
    {!! BootForm::close() !!}
@endsection