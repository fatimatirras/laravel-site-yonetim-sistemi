@php

    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')
@section('title','Request '. $setting->title)
@section('description') {{ $setting->description}} @endsection

@section('keywords',$setting->keywords)

@section('content')
    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
                <div class="col-md-7">
                    <h1 class="h2">Talepte Bulun</h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Talep</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div id="comment-form"><br><br>
                <h6 class="text-uppercase">Talepte Bulun</h6>
                @include('home.message')
                <form action="{{route('sendrequest')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="subject">Subject <span class="required text-primary">*</span></label>
                                <input id="subject" name="subject" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="request">Request <span class="required text-primary">*</span></label>
                                <textarea id="request" name="request" rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <button class="btn btn-template-outlined"><i class="fa fa-comment-o"></i> Talep Et!</button>
                        </div>
                    </div>
                </form>
                <br><br>
            </div>
        </div>
    </div>

@endsection
