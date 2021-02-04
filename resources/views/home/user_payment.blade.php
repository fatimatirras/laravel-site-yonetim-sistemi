@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title','My Payments')

@section('content')

    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
                <div class="col-md-7">
                    <h1 class="h2">User Panel</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">My Payments</li>
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
                            @include('home.message')
                            <h1>MY PAYMENTS</h1>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                    <th>Block</th>
                                    <th>Flat Number</th>
                                    <th>Payment</th>
                                    <th>Month</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Manager Note</th>
                                    </thead>
                                    @php
                                        $payment=200;
                                    @endphp


                                    <tbody>
                                    @foreach($datalist as $rs)
                                        <tr>
                                            <td>
                                                {{$rs->user->block}}
                                            </td>
                                            <td>
                                                {{$rs->user->flatnr}}
                                            </td>
                                            <td>
                                                {{$payment}} ₺
                                            </td>
                                            <td>
                                                {{$rs->month}}
                                            </td>
                                            <td>
                                                {{$rs->year}}
                                            </td>
                                            <td>
                                                {{$rs->status}}
                                            </td>
                                            <td>
                                                {{$rs->created_at}}
                                            </td>
                                            <td>
                                                {{$rs->note}}
                                            </td>

                                        </tr>

                                    </tbody>
                                    @endforeach
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
                                <li class="nav-item"><a href="{{route('user_payments')}}" class="nav-link"><i class="fa fa-heart"></i> My Payments</a></li>
                                <li class="nav-item"><a href="{{route('user_request')}}" class="nav-link"><i class="fa fa-heart"></i> My Request</a></li>
                                @php
                                    $userRoles=Auth::User()->roles->pluck('name');
                                @endphp
                                @if($userRoles->contains('admin'))
                                <li class="nav-item"><a href="{{route('admin_home')}}" class="nav-link"  target="_blank"><i class="fa fa-heart"></i> ADMIN PANEL</a></li>
                                @endif
                                <li class="nav-item"><a href="{{route('logout')}}" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></li>             </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
