@extends('layouts.admin')

@section('title','Menu List')

@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Menu   </li>
            </ul>
        </div>
    </div>


    <div class="col-lg-12">
        <div>
            <h4>Menus</h4>
        </div>
        <div class="card">

            <div class="card-header">

               <a  href="{{route('admin_menu_add')}}" type="submit" class="btn btn-primary">Add Menu</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class=" text-primary">

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
                                <td>{{ \App\Http\Controllers\Admin\MenuController::getParentsTree($rs, $rs->title)  }}</td>
                                <td>{{ $rs->title }}</td>
                                <td>{{ $rs->status }}</td>
                                <td><a href="{{route('admin_menu_edit',['id' => $rs->id])}}"> <img src="{{asset('assets/admin/images')}}/edit.png" height="26"></a></td>
                                <td><a href="{{route('admin_menu_delete',['id' => $rs->id])}}" onclick="return confirm('Emin misiniz?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="26"></a></td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
