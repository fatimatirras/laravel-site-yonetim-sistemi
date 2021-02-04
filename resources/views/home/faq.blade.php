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
                    <h2 class="h2">FAQ</h2>
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

    <div id="content">
        <div class="container">
            <div class="row bar">
                <div class="col-md-9">
                    <section>
                        <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        <div id="accordion" role="tablist">

                            @foreach($datalist as $rs)
                            <div class="card card-primary">
                                <div id="headingThree" role="tab" class="card-header">
                                    <h5 class="mb-0 mt-0"><a data-toggle="collapse" href="#xx{{$rs->id}}" aria-expanded="false" aria-controls="xx{{$rs->id}}" class="collapsed"> {{$rs->question}} </a></h5>
                                </div>
                                <div id="xx{{$rs->id}}" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" class="collapse">
                                    <div class="card-body"> {!! $rs->answer !!} </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <p class="text-muted">In case you haven't found the answer for your question please feel free to <a href="{{route('contact')}}">contact us</a>, our customer support will be happy to help you.</p>
                    </section>
                </div>
                <div class="col-sm-3">
                    <!-- PAGES MENU -->
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="h4 panel-title">Pages</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills flex-column text-sm">
                                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact page</a></li>
                                <li class="nav-item"><a href="{{route('faq')}}" class="nav-link">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
