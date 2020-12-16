
@extends('layouts.home')

@section('title','laravel site yönetim sistemi github')

@section('description')
    türkiyenin en güvenilir siteleri
@endsection

@section('keywords','daireler,oda,bahçe')
@section('author')


@section('content')

    @include('home._feature')
    @include('home._about')
    @include('home._counter')
    @include('home._service')
    @include('home._table')
    @include('home._Testimonial')
    @include('home._Clients')
    @include('home._latestNews')
    @include('home._subscribeUs')


@endsection
