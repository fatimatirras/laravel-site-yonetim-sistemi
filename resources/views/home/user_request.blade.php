@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title','My Profile')

@section('content')

    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
                <div class="col-md-7">
                    <h1 class="h2">My Requests</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">My Requests</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="row bar mb-0">
                <div id="customer-orders" class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h2>My Requests</h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>

                                    <tr>
                                        <th>Subject</th>
                                        <th>Request</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                        <tr>

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
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4 mt-md-0">
                    <!-- CUSTOMER MENU -->
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="h4 panel-title">Customer section</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills flex-column text-sm">
                                <li class="nav-item"><a href="{{route('user_review')}}" class="nav-link active"><i class="fa fa-list"></i> My Reviews</a></li>
                                <li class="nav-item"><a href="{{route('myprofile')}}" class="nav-link"><i class="fa fa-user"></i> My account</a></li>
                                <li class="nav-item"><a href="customer-wishlist.html" class="nav-link"><i class="fa fa-heart"></i> My wishlist</a></li>
                                <li class="nav-item"><a href="{{route('home')}}" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
