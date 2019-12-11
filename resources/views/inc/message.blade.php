@if(session()->has('album'))
    <div class="alert alert-success"> <i class="ti-user"></i> {{session()->get('album')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div>
@endif

@if(session()->has('album_update'))
    <div class="alert alert-success"> <i class="ti-user"></i> {{session()->get('album_update')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div>
@endif

@if(session()->has('album_delete'))
    <div class="alert alert-success"> <i class="ti-user"></i> {{session()->get('album_delete')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div>
@endif

@if(session()->has('photo'))
    <div class="alert alert-success"> <i class="ti-user"></i> {{session()->get('photo')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div>
@endif

@if(session()->has('photo_delete'))
    <div class="alert alert-success"> <i class="ti-user"></i> {{session()->get('photo_delete')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div>
@endif