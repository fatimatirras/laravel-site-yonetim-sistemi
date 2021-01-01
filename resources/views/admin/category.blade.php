@extends('layouts.admin')

@section('title','Category List')

@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Category   </li>
            </ul>
        </div>
    </div>


    <div class="col-lg-6">
        <div>
            <h4>Categories</h4>
        </div>
        <div class="card">

            <div class="card-header">

               <a  href="{{route('admin_category_add')}}" type="submit" class="btn btn-primary">Add Category</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>

                        <tr>
                            <th>Id</th>
                            <th>Parent</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs )

                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>{{ $rs->parent_id }}</td>
                                <td>{{ $rs->title }}</td>
                                <td>{{ $rs->status }}</td>
                                <td>Edit</td>
                                <td><a href="{{route('admin_category_delete',['id' => $rs->id])}}" onclick="return confirm('Are you sure?')">Delete</a></td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
