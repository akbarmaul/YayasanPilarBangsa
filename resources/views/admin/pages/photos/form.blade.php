@extends('admin.app')

@section('title')
<title>Upload Photo - Admin</title>
@endsection

@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Upload Photo</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Portfolio</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Portfolio List</a></li>
            <li class="breadcrumb-item active">Upload Photo</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Upload Photo</h4>
        <h6 class="card-subtitle">Fill the form to add your image of portfolio</h6>
        <form class="form-material m-t-40" method="POST" action="{{ route('admin.photo.store')}}" enctype="multipart/form-data">
            
            <div class="form-group">
                <label>Portfolio Title</label>
                <input type="text" name="title" class="form-control form-control-line" placeholder=""> 
            </div>
            
            <div class="form-group">
                <input type="hidden" name="album_id" value="{{$album->id}}">
            </div>

            <br>

            {{-- <div class="form-group">
                <label>Portfolio img</label>
                <input type="text" name="image" class="form-control form-control-line" placeholder="imggg"> 
            </div> --}}
                
            <div class="form-group">
                <label>Portfolio Image</label>
                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                    <input type="hidden">
                    <input type="file" name="photo"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                    
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="button" class="btn btn-inverse">Cancel</button>
            </div>               
      
        </form>
    </div>
</div>        
@endsection