@extends('layouts.admin')

@section('title','Payment List')

@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Payments  </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-12">
        <div>
            <h4>Payments</h4>
        </div>
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>Id</th>
                        <th>User</th>
                        <th>Year</th>
                        <th>Month</th>
                        <th>Block</th>
                        <th>Flat Number</th>
                        <th>Status</th>
                        <th>Admin Note</th>
                        <th>Date</th>

                        <th colspan="3">Actions</th>

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
                                    {{$rs->year}}
                                </td>
                                <td>
                                    {{$rs->month}}
                                </td>
                                <td>
                                    {{$rs->user->block}}
                                </td>
                                <td>
                                    {{$rs->user->flatnr}}
                                </td>
                                <td>
                                    {{$rs->status}}
                                </td>
                                <td>
                                    {{$rs->note}}
                                </td>
                                <td>
                                    {{$rs->created_at}}
                                </td>
                                <td>
                                    <a href="{{route('admin_payment_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><img src="{{asset('assets/admin/images')}}/edit.png" height="30"></a>
                                </td>
                            </tr>

                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
