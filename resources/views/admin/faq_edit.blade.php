@extends('layouts.admin')

@section('title','Edit FAQ')
@section('javascript')


    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

@endsection

@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit FAQ      </li>
            </ul>
        </div>
    </div>

    <div class="card-body">

        <div>
            <p>Edit Content</p>
        </div>
        <form action="{{ route('admin_faq_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf



            <div class="form-group">
                <label>Question</label>
                <input type="text" name="question"  value="{{$data->question}}" class="form-control">
            </div>

            <div class="form-group">
                <label>Position</label>
                <input type="number" name="position" value="{{$data->position}}" class="form-control">
            </div>
            <div class="form-group">
                <label>Detail</label>
                <textarea id="answer" name="detail">{{$data->answer}}</textarea>
                <script>
                    CKEDITOR.replace( 'answer' );
                </script>

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
                <input type="submit" value="Update FAQ" class="btn btn-primary">

            </div>
        </form>




    </div>


@endsection
