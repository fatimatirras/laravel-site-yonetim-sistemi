@extends('layouts.admin')

@section('title','Request List')

@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Request  </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-12">
        <div>
            <h4>Requests</h4>
        </div>
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>

                        <tr>
                            <th>Id</th>
                            <th>User</th>
                            <th>Subject</th>
                            <th>Request</th>
                            <th>Status</th>
                            <th>Date</th>

                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td>
                                    {{$rs->id}}
                                </td>
                                <td>
                                    {{$rs->user->name}}
                                </td>
                                <td>
                                    {{$rs->subject}}
                                </td>
                                <td>
                                    {{$rs->request}}
                                </td>
                                <td>
                                    {{$rs->status}}
                                </td>
                                <td>
                                    {{$rs->created_at}}
                                </td>
                                <td>
                                    <a href="{{route('admin_requestmng_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><img src="{{asset('assets/admin/images')}}/edit.png" height="30"></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
