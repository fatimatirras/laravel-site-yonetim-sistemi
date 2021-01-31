@extends('layouts.admin')

@section('title','Add FAQ')

@section('javascript')

    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

@endsection

@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Add FAQ</li>
            </ul>
        </div>
    </div>

    <div class="card-body">

        <form action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <table>

                <div class="form-group">
                    <label>Positon</label>
                    <input type="number" name="position"  class="form-control">
                </div>
                <div class="form-group">
                    <label>Question</label>
                    <input type="text" name="question"  class="form-control">
                </div>

                <div class="form-group">
                    <label>Answer</label>
                    <textarea name="answer"></textarea>
                    <script>
                        CKEDITOR.replace( 'answer' );
                    </script>
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
                    <input type="submit" value="Add faq" class="btn btn-primary">
                </div>
            </table>
        </form>
    </div>


@endsection
