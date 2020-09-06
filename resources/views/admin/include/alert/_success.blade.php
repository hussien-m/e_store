@if(Session::has('success'))
    <div class="row mr-2 ml-2">
        <button type="text" class="btn btn-lg btn-block btn-success mb-2"
                id="type-success">{{Session::get('error')}}
        </button>
    </div>
@endif
