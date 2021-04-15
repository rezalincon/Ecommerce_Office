@extends('admin.layout.master')
@section('title', 'Add New Category')
@section('parentPageTitle', 'Category List')


@section('content')

    <div class="row clearfix">

        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="header">
                    <h2>Add New Category</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another Action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="body">
                                    <form action="{{route('categories.store')}}" method="post">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="categoryName">Category Name</label>
                                                <input type="text" id="categoryName" name="name" class="form-control" placeholder="Category name">
                                            </div>
                                        </div>
                                        @foreach($errors->all() as $error)
                                            <p class="ml-1" style="color: red">{{$error}}</p>
                                        @endforeach
                                        <button type="submit" class="btn btn-primary mt-3">Add Category</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop