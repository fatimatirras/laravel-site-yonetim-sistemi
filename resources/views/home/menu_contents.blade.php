@php

    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('Menüler', $setting->title)

@section('description') {{ $setting->description}} @endsection

@section('keywords',$setting->keywords)

@section('content')


    <section class="bar background-pentagon no-mb text-md-center">
        <div class="container">
            <div class="heading text-center">
                <h2>{{$data->title}}</h2>
            </div>
            <br><br>
            <!-- Carousel Start-->
            <ul class="owl-carousel testimonials list-unstyled equal-height">
                @foreach($datalist as $rs)
                    <li class="item">
                        <div class="testimonial d-flex flex-wrap">
                            <div class="text">
                                <h1><a href="{{route('content',['id' => $rs->id,'slug' => $rs->title])}}">{{$rs->title}}</a></h1>
                            </div>
                            <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                                <div class="icon"><i class="fa fa-quote-left"></i></div>
                                <div class="testimonial-info d-flex">
                                    <div class="title">
                                        <h5>{{ \App\Http\Controllers\Admin\MenuController::getParentsTree($rs->menu, $rs->menu->title)}}</h5>
                                        <p>{{$rs->type}}</p>
                                    </div>
                                    <div class="avatar"><img alt="" src="{{ asset("storage/$rs->image") }}" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <br><br>
            <!-- Carousel End-->
        </div>






@endsection

