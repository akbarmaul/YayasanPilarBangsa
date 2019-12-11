@extends('admin.app')

@section('title')
<title>{{ isset($album) ? 'Edit Portfotlio' : 'Add Portfolio'}} - Admin</title>
@endsection

@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">{{ isset($album) ? 'Edit Portfotlio' : 'Add Portfolio'}}</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Portfolio</a></li>
            <li class="breadcrumb-item active">{{ isset($album) ? 'Edit Portfotlio' : 'Add Portfolio'}}</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ isset($album) ? 'Edit Portfolio' : 'Add Portfolio' }}</h4>
        <h6 class="card-subtitle">Fill to add your portfolio</h6>
        <form class="form-material m-t-40" action=" {{ isset($album) ? route('admin.album.update', $album->id) : route('admin.album.store') }}" method="POST">
            {{ isset($album) ? method_field('PUT') : '' }}
            {{ csrf_field() }}
            <div class="form-group">
                <label>Portfolio Name</label>
                <input type="text" name="name" class="form-control form-control-line" placeholder="input your portfolio name" value="{{ isset($album) ? $album->name : ''}}">
            </div>

            <div class="form-group">
                <label>Portfolio Description</label>
                <textarea class="form-control" name="description" rows="5"> {{ isset($album) ? $album->description : ''}}</textarea>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-success">{{isset($album) ? 'Update' : 'Submit' }}</button>
                <button type="button" class="btn btn-inverse">Cancel</button>
            </div>  
        </form>
    </div>
</div>

@endsection