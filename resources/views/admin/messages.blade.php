@extends('layouts.admin')

@section('title','Content Message List')

@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Message  </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-12">
        <div>
            <h4>Messages</h4>
        </div>
        <div class="card">
            <div class="card-header">
               @include('home.message')
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>

                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Admin Note</th>
                            <th>Action</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs )

                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>{{ $rs->name }}</td>
                                <td>{{ $rs->email }}</td>
                                <td>{{ $rs->phone }}</td>
                                <td>{{ $rs->subject }}</td>
                                <td>{{ $rs->message }}</td>
                                <td>{{ $rs->note }}</td>
                                <td>{{ $rs->status }}</td>

                                <td><a href="{{route('admin_message_edit',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"> <img src="{{asset('assets/admin/images')}}/edit.png" height="26"> </a></td>

                                <td><a href="{{route('admin_message_delete',['id' => $rs->id])}}" onclick="return confirm('Emin misiniz?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="26"></a></td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
