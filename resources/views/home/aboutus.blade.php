@php

    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')
@section('title','About Us '. $setting->title)
@section('description') {{ $setting->description}} @endsection

@section('keywords',$setting->keywords)

@section('content')

    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
                <div class="col-md-7">
                    <h2 class="h2">About Us</h2>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<br>
<div class="container">
       <div clas="row">
         {!! $setting->aboutus !!}
       </div>
</div>

<br>
<br>

@endsection
