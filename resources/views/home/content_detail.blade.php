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
            </div>
        </div>
    </div>







@endsection

