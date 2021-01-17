@extends('layouts.admin')

@section('title','Content List')

@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Content  </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-12">
        <div>
            <h4>Contents</h4>
        </div>
        <div class="card">
            <div class="card-header">
                <a  href="{{route('admin_content_add')}}" type="submit" class="btn btn-primary">Add Content</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>

                        <tr>
                            <th>Id</th>
                            <th>Menu</th>
                            <th>Title</th>
                            <th>Apartments</th>
                            <th>News</th>
                            <th>Announcement</th>
                            <th>Image</th>
                            <th>Image Gallery</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs )

                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>{{ \App\Http\Controllers\Admin\MenuController::getParentsTree($rs->menu, $rs->menu->title)}}</td>
                                <td>{{ $rs->title }}</td>
                                <td>{{ $rs->apartments }}</td>
                                <td>{{ $rs->news }}</td>
                                <td>{{ $rs->announcement }}</td>
                               <td>
                                   @if ($rs->image)
                                       <img src="{{ Storage::url($rs->image)}}" height="30" alt="">
                                   @endif
                               </td>
                                <td><a href="{{route('admin_image_add',['content_id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"> <img src="{{asset('assets/admin/images')}}/gallery.png" height="26"> </a></td>
                                <td>{{ $rs->status }}</td>
                                <td><a href="{{route('admin_content_edit',['id' => $rs->id])}}"> <img src="{{asset('assets/admin/images')}}/edit.png" height="26"></a></td>
                                <td><a href="{{route('admin_content_delete',['id' => $rs->id])}}" onclick="return confirm('Emin misiniz?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="26"></a></td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
