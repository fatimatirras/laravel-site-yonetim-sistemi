@extends('layouts.admin')

@section('title','Hotel List')

@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Hotel  </li>
            </ul>
        </div>
    </div>


    <div class="col-lg-12">
        <div>
            <h4>Holtes</h4>
        </div>
        <div class="card">

            <div class="card-header">

                <a  href="{{route('admin_hotel_add')}}" type="submit" class="btn btn-primary">Add Hotel</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>

                        <tr>
                            <th>Id</th>
                            <th>Menu</th>
                            <th>Title</th>
                            <th>Menu</th>
                            <th>Haber</th>
                            <th>Duyuru</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs )

                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>{{ $rs->menu_id }}</td>
                                <td>{{ $rs->title }}</td>
                                <td>{{ $rs->menu }}</td>
                                <td>{{ $rs->haber }}</td>
                                <td>{{ $rs->duyuru }}</td>
                                <td>{{ $rs->image }}</td>
                                <td>{{ $rs->status }}</td>
                                <td><a href="{{route('admin_hotel_edit',['id' => $rs->id])}}"> <ion-icon name="create-outline" > Edit</ion-icon></a></td>
                                <td><a href="{{route('admin_hotel_delete',['id' => $rs->id])}}" onclick="return confirm('Emin misiniz?')"><ion-icon name="trash-outline">Delete</ion-icon></a></td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
