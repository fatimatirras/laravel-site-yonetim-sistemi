@extends('layouts.admin')

@section('title','Add Hotel')

@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Add Hotel      </li>
            </ul>
        </div>
    </div>

    <div class="card-body">

                 <div>
                     <p>Add Hotel</p>
                 </div>
                    <form action="{{ route('admin_hotel_store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Parent</label>

                            <select  class="form-control" name="menu_id">

                                @foreach( $datalist as $rs)
                                <option value="{{ $rs->id }}">{{ $rs->title }}</option>
                                @endforeach
                            </select>

                        </div>


                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" name="keywords"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description"  class="form-control">
                        </div>




                        <div class="form-group">
                            <label>Detail</label>
                            <input type="text" name="detail"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Menu</label>
                            <input type="text" name="menu"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Haber</label>
                            <input type="text" name="haber"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Duyuru</label>
                            <input type="text" name="duyuru"  class="form-control">
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Status</label>
                            <div class="col-sm-12 mb-5">
                                <select name="status" class="form-control" >
                                    <option>False</option>
                                    <option>True</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <input type="submit" value="Add hotel" class="btn btn-primary">

                        </div>
                    </form>




    </div>


@endsection
