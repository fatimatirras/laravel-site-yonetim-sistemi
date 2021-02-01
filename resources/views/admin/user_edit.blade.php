@extends('layouts.admin')

@section('title','Edit User')


@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit User      </li>
            </ul>
        </div>
    </div>

    <div class="card-body">

        <div>
            <p>Edit User</p>
        </div>
        <form action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <table>

                <tr><h4>Name:</h4><input style="width: 400px" id="name" value="{{$data->name}}" type="text" name="name" placeholder="Name"/></tr>
                <tr><h4>Email:</h4> <input style="width: 400px" id="email" value="{{$data->email}}" type="text" name="email" placeholder="Email"/></tr>
                <tr><h4>Phone: </h4><input style="width: 400px" id="phone" value="{{$data->phone}}" type="text" name="phone" placeholder="Phone"/></tr>
                <tr><h4>Address: </h4><input style="width: 400px" id="address" value="{{$data->address}}" type="text" name="address" placeholder="Address"/></tr>
                <tr><h4>Image: </h4><input type="file" name="image">

                    @if($data->profile_photo_path)
                        <img src="{{Storage::url($data->profile_photo_path)}}" height="200" style="border-radius: 10px">
                    @endif
                </tr>

                <tr><button type="submit" style="color:#95999c; background-color: #4a5568; width: 150px;">Düzenle</button></tr>
            </table>
        </form>




    </div>


@endsection
