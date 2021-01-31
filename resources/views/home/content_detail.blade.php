@php

    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('Content', $setting->title)

@section('description') {{ $setting->description}} @endsection

@section('keywords',$setting->keywords)

@section('content')


    <div id="heading-breadcrumbs" class="border-top-0 border-bottom-0">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
                <div class="col-md-7">
                    <h1 class="h2">{{$data->title}}</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="row bar">
                <!-- LEFT COLUMN _________________________________________________________-->
                <div id="blog-post" class="col-md-9">
                    <div id="post-content">
                        <h2>{{$data->type}}</h2>
                        <p><img src="{{ asset("storage/$data->image") }}" alt="Example blog post alt" class="img-fluid"></p>
                        <p class="text-sm">{!! $data->detail !!}</p>
                    </div>
                    <div id="comments">
                        <h4 class="text-uppercase">Yorumlar</h4>
                        @foreach($reviews as $rs)
                        <div class="row comment">

                            <div class="col-sm-9 col-md-10">
                                <h5 class="text-uppercase">{{$rs->user->name}}</h5>
                                <p class="posted"><i class="fa fa-clock-o"></i> {{$rs->created_at}}</p>
                                <p class="posted"> {{$rs->subject}}</p>
                                <p>{{$rs->review}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div id="comment-form">
                        <h4 class="text-uppercase">Leave a comment</h4>
                        <form action="{{route('sendreview',['id'=>$data->id,'slug'=>$data->slug])}}" method="post">
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
                                        <label for="comment">Review <span class="required text-primary">*</span></label>
                                        <textarea id="review" name="review" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button class="btn btn-template-outlined"><i class="fa fa-comment-o"></i> Yorum Yap</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="h4 panel-title">Text widget</h3>
                        </div>
                        <div class="panel-body text-widget">
                            <p>Improved own provided blessing may peculiar domestic. Sight house has never. No visited raising gravity outward subject my cottage mr be. Hold do at tore in park feet near my case.</p>
                        </div>
                    </div>
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="h4 panel-title">Search</h3>
                        </div>
                        <div class="panel-body">
                            <form role="search">
                                <div class="input-group">
                                    <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                        <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="h4 panel-title">Categories</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills flex-column text-sm">
                                <li class="nav-item"><a href="blog.html" class="nav-link">Webdesign</a></li>
                                <li class="nav-item"><a href="blog.html" class="nav-link active">Tutorials</a></li>
                                <li class="nav-item"><a href="blog.html" class="nav-link">Print</a></li>
                                <li class="nav-item"><a href="blog.html" class="nav-link">Our tips</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="h4 panel-title">Tags</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="tag-cloud list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-tags"></i> html5</a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-tags"></i> css3</a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-tags"></i> jquery</a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-tags"></i> ajax</a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-tags"></i> php</a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-tags"></i> responsive</a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-tags"></i> visio</a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-tags"></i> bootstrap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GET IT-->
    <div class="get-it">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center p-3">
                    <h3>Do you want cool website like this one?</h3>
                </div>
                <div class="col-lg-4 text-center p-3">   <a href="#" class="btn btn-template-outlined-white">Buy this template now</a></div>
            </div>
        </div>
    </div>





@endsection

