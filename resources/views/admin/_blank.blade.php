@extends('layouts.admin')

@section('title','Admin panel')

@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Category      </li>
            </ul>
        </div>
    </div>


@endsection
