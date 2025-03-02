@extends('layouts.admin')

@section('title','Edit Content')
@section('javascript')


    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

@endsection

@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit Content      </li>
            </ul>
        </div>
    </div>

    <div class="card-body">

                 <div>
                     <p>Edit Content</p>
                 </div>
                    <form action="{{ route('admin_content_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Menu</label>

                            <select  class="form-control" name="menu_id">

                                @foreach( $datalist as $rs)
                                    <option value="{{ $rs->id }}"  @if ($rs->id == $data->menu_id) selected="selected" @endif >
                                        {{ \App\Http\Controllers\Admin\MenuController::getParentsTree($rs, $rs->title) }}
                                    </option>
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
                            <textarea id="detail" name="detail">{{$data->detail}}</textarea>
                            <script>
                                CKEDITOR.replace( 'detail' );
                            </script>

                        </div>

                        <div class="form-group">
                            <label for="type">Type:</label>

                            <select name="type" id="type" style="width: 600px">
                                <option selected="selected">{{$data->type}}</option>
                                <option value="menu">Menu</option>
                                <option value="news">News</option>
                                <option value="announcement">Announcement</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image"  class="form-control">
                            @if ($data->image)
                                <img src="{{ Storage::url($data->image)}}" height="100" alt="">
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input id="slug" value="{{$data->slug}}" type="text" name="slug" placeholder="Slug"/>
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
                            <input type="submit" value="Update content" class="btn btn-primary">

                        </div>
                    </form>




    </div>


@endsection
