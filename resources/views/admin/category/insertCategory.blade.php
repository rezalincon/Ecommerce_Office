@extends('admin.layout.master')
@section('title', 'Add Category')
@section('parentPageTitle') <a href="{{route('category.view')}}">Categories</a> @endsection
@section('pageTitle') <a href="#">Add Category</a> @endsection


@section('content')
<div class="row clearfix card">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card-body">

            <form action="{{route('category.store')}}" method="post" class="form-horizontal" id="form" enctype="multipart/form-data">
                     
            @csrf                      

            <div class="form-group row">
                <label for="name" class="col-sm-3 text-right control-label col-form-label">Category Name</label>
                <div class="col-sm-4">
                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Category Name Here" required>
                </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>

            <div class="form-group row">
                <label for="image" class="col-sm-3 text-right control-label col-form-label">Category Image</label>
                <div class="col-sm-4">
                    <input name="image" type="file" class="form-control" id="image">
                </div>
            </div>

            <div class="border-top">
                <div class="card-body">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@stop
