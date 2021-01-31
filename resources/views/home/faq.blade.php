@php

    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')
@section('title','FAQ '. $setting->title)
@section('description') {{ $setting->description}} @endsection

@section('keywords',$setting->keywords)

@section('content')

    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
                <div class="col-md-7">
                    <h1 class="h2">FAQ</h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="container">
        <div clas="row">
            @foreach($datalist as $rs)
                <h2>{{$rs->question}}</h2>
                {!! $rs->answer !!}
                <hr>
            @endforeach
        </div>
    </div>

    <br>
    <br>

@endsection
