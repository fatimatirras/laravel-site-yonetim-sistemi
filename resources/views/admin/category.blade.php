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
        <div class="card">
            <div class="card-header">
                <h4>Striped Table</h4>
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
                                <td>Delete</td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
