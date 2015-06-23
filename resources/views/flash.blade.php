@if(session()->has('success'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ session('success') }}
            </div>
        </div>
    </div>
@endif

@if(session()->has('error'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ session('error') }}
            </div>
        </div>
    </div>
@endif