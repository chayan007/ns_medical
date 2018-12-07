@extends('admin.layouts.admin')
@section('page', 'Add Company')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Add Company</strong>
        </div>
        <div class="card-body card-block">
            <form action="/addCompany" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Company </label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Product" class="form-control"><small class="form-text text-muted">Just the Company</small></div>
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