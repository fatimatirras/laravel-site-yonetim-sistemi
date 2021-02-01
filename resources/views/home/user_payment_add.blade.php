@extends('layouts.home')

@section('title', 'Aidat Öde')

@include('home._header')

@section('content')
    <div id="about" class="about top_layer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{route('user_payment_store')}}" method="post">
                        @csrf
                        <table>
                            <tr><h2>BİLGİLERİM: </h2><br><br>
                            <tr><h4></h4> <input style="width: 400px" id="name" type="text" value="{{Auth::user()->name}}" name="name" placeholder="Name"/></tr>
                            <tr><h4></h4> <input style="width: 400px" id="email" type="email" value="{{Auth::user()->email}}" name="email" placeholder="Email"/></tr>
                            <tr><h4></h4><input style="width: 400px" id="address" type="text" value="{{Auth::user()->address}}" name="address" placeholder="Address"/></tr>
                            <tr><h4></h4><input style="width: 400px" id="phone" type="text" value="{{Auth::user()->phone}}" name="phone" placeholder="Phone"/></tr>
                            <tr><h4></h4><input style="width: 400px" id="flatnr" type="number" value="{{Auth::user()->flatnr}}" name="flatnr" placeholder="Flat Number"/></tr>
                            <tr><h4></h4><input style="width: 400px" id="block" type="text" value="{{Auth::user()->block}}" name="block" placeholder="Block"/></tr>
                            <tr><h4></h4><input style="width: 400px" id="year" type="number" name="year" placeholder="Year"/></tr>
                            <tr><h4></h4><input style="width: 400px" id="month" type="number" name="month" placeholder="Month"/></tr>
                        </table>
                </div>

                <div class="col-md-6">
                    <h2>AİDAT TUTARI = {{$payment}}₺</h2><br><br>
                    <table>
                        <tr><input type="hidden" id="payment" name="payment" value="{{$payment}}"/></tr>
                        <tr><input style="width: 300px" id="cardname" type="text"  name="cardname" placeholder="Name Surname"/></tr><br><br>
                        <tr><input style="width: 300px" id="cardnumber" type="text"  name="cardnumber" placeholder="Card Number"/></tr><br><br>
                        <tr><input style="width: 150px" id="dates" type="text"  name="dates" placeholder="Valid Dates mm/yy"/><input style="width: 150px" id="secret" type="text" name="key" placeholder="Secret Number"/></tr><br><br><br>

                        <tr><button type="submit" class="btn btn-primary">AİDAT ÖDE</button></tr>
                    </table>

                    </form>
                </div><!-- end col -->
            </div>
        </div>
    </div>








@endsection
