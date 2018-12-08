@extends('admin.layouts.admin')
@section('page', 'Categories')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">List of Categories</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->category }}</td>
                        <td><!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal"
                                    data-target="#modelId">
                                Update
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                 aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title" id="modelTitleId">Update {{ $category }}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/updateCategory/{{ $category->id }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Category </label></div>
                                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Category" class="form-control"><small class="form-text text-muted">Just the Product Name</small></div>
                                                </div>
                                                <button type="submit" class="btn btn-success btn-block">
                                                    Submit
                                                </button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><a id="deletebtn" class="btn btn-outline-danger btn-sm" href="deleteCatefory/{{ $category->id }}" role="button">Delete</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
