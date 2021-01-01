@extends('layouts.admin')

@section('title','Admin panel')

@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Add Category      </li>
            </ul>
        </div>
    </div>

    <div class="card-body">

                 <div>
                     <p>Add Category</p>
                 </div>
                    <form action="{{ route('admin_category_create')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Parent</label>

                            <select  class="form-control" name="parent_id">
                                <option value="o" selected="selected">Main Category</option>

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

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Status</label>
                            <div class="col-sm-10 mb-3">
                                <select name="status" class="form-control" >
                                    <option>False</option>
                                    <option>True</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <input type="submit" value="Add category" class="btn btn-primary">

                        </div>
                    </form>




    </div>


@endsection
