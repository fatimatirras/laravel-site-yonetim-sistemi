@extends('layouts.admin')

@section('title','Edit Menu')

@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit Menu      </li>
            </ul>
        </div>
    </div>

    <div class="card-body">

                 <div>
                     <p>Edit Menu</p>
                 </div>
                    <form action="{{ route('admin_menu_update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Parent</label>

                            <select  class="form-control" name="parent_id" style="...">

                                <option value="o" >Main Menu</option>

                                @foreach( $datalist as $rs)
                                <option value="{{ $rs->id }}"  @if ($rs->id == $data->parent_id) selected="selected" @endif >{{ $rs->title }}</option>
                                @endforeach
                            </select>

                        </div>


                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="{{$data->title}}"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" name="keywords" value="{{$data->keywords}}"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description"  value="{{$data->description}}" class="form-control">
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Status</label>
                            <div class="col-sm-10 mb-3">
                                <select name="status" class="form-control" >
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>False</option>
                                    <option>True</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <input type="submit" value="Update menu" class="btn btn-primary">

                        </div>
                    </form>




    </div>


@endsection
