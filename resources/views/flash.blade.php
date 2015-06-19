@if(session()->has('success'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session('success') }}
            </div>
        </div>
    </div>
@endif