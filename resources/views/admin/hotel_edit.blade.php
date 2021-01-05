@extends('layouts.admin')

@section('title','Edit Hotel')
@section('javascript')


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@endsection

@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit Hotel      </li>
            </ul>
        </div>
    </div>

    <div class="card-body">

                 <div>
                     <p>Edit Hotel</p>
                 </div>
                    <form action="{{ route('admin_hotel_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Parent</label>

                            <select  class="form-control" name="menu_id">

                                @foreach( $datalist as $rs)
                                    <option value="{{ $rs->id }}"  @if ($rs->id == $data->menu_id) selected="selected" @endif >{{ $rs->title }}</option>
                                @endforeach
                            </select>

                        </div>


                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title"  value="{{$data->title}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" value="{{$data->description}}" class="form-control">
                        </div>




                        <div class="form-group">
                            <label>Detail</label>
                            <textarea id="summernote" name="detail">{{$data->detail}}</textarea>
                            <script>
                                $(document).ready(function() {
                                    $(`#summernote`).summernote();
                                });
                            </script>

                        </div>

                        <div class="form-group">
                            <label>Menu</label>
                            <input type="text" name="menu" value="{{$data->menu}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Haber</label>
                            <input type="text" name="haber" value="{{$data->haber}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Duyuru</label>
                            <input type="text" name="duyuru"  value="{{$data->duyuru}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" value="{{$data->image}}" class="form-control">
                            @if ($data->image)
                                <img src="{{ Storage::url($data->image)}}" height="100" alt="">
                            @endif
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Status</label>
                            <div class="col-sm-12 mb-5">
                                <select name="status" class="form-control" >
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <input type="submit" value="Update hotel" class="btn btn-primary">

                        </div>
                    </form>




    </div>


@endsection
