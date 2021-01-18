@php

    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@extends('layouts.home')

@section('title','Contact')

@section('content')



<div id="heading-breadcrumbs" class="brder-top-0 border-bottom-0">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
                <h1 class="h2">Contact</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb d-flex justify-content-end">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="content">
    <div id="contact" class="container">
        <section class="bar">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>We are here to help you</h2>
                    </div>
                    <p class="lead">Are you curious about something? Do you have some kind of problem with our products? As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built gay party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.</p>
                    <p class="text-sm">Please feel free to contact us, our customer service center is working for you 24/7.</p>
                </div>
            </div>
        </section>
        <section>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="box-simple">
                        <div class="icon-outlined"><i class="fa fa-map-marker"></i></div>
                        <h3 class="h4">Address</h3>
                        <p>{{$setting->company}}<br>                                        {{$setting->address}}<br>    </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-simple">
                        <div class="icon-outlined"><i class="fa fa-phone"></i></div>
                        <h3 class="h4">Call center</h3>
                        <p>This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
                        <p><strong> {{$setting->phone}}</strong></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-simple">
                        <div class="icon-outlined"><i class="fa fa-envelope"></i></div>
                        <h3 class="h4">Electronic support</h3>
                        <strong>Fax: </strong> {{$setting->fax}}<br>
                        <strong>Email: </strong> {{$setting->email}}<br></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bar pt-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>Contact form</h2>
                    </div>
                </div>
                <div class="col-md-8 mx-auto">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input id="firstname" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input id="lastname" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input id="subject" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea id="message" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-template-outlined"><i class="fa fa-envelope-o"></i> Send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

</div>

@endsection
