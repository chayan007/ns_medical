@extends('admin.layouts.admin')
@section('page', 'Add Category')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Add Category</strong>
        </div>
        <div class="card-body card-block">
            <form action="/addCategory" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Category </label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Product" class="form-control"><small class="form-text text-muted">Just the Category</small></div>
                </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
        </div>
        </form>
    </div>
@endsection