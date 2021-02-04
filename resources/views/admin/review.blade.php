@extends('layouts.admin')

@section('title','Review List')

@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Review  </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-12">
        <div>
            <h4>Reviews</h4>
        </div>
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class=" text-primary">

                        <tr>
                            <th>Id</th>
                            <th>User</th>
                            <th>Content</th>
                            <th>Subject</th>
                            <th>Review</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th colspan="3">Actions</th>

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
                                    <a href="{{route('content',['id'=>$rs->content->id,'slug'=>$rs->content->slug])}}" target="_blank">{{$rs->content->title}}</a>
                                </td>
                                <td>
                                    {{$rs->subject}}
                                </td>
                                <td>
                                    {{$rs->review}}
                                </td>
                                <td>
                                    {{$rs->status}}
                                </td>
                                <td>
                                    {{$rs->created_at}}
                                </td>
                                <td>
                                    <a href="{{route('admin_review_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><img src="{{asset('assets/admin/images')}}/edit.png" height="30"></a>
                                </td>
                                <td>
                                    <a href="{{route('admin_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="30"></a>
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
