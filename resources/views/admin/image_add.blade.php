
<html>
<head>
    <title>Image Galleri</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
</head>
<body>

<div class="card-header">
    <h3 class="card-title">Content: {{$data->title}}</h3>
</div>
<div class="card-body">

    <form action="{{ route('admin_image_store',['content_id' => $data->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title"  class="form-control">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image"  class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="Add image" class="btn btn-primary">
        </div>
        <table class="table table-striped">
            <thead class=" text-primary">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($images as $rs )
                <tr>
                    <td>{{ $rs->id }}</td>
                    <td>{{ $rs->title }}</td>
                    <td>
                        @if ($rs->image)
                            <img src="{{ Storage::url($rs->image)}}" height="30" alt="">
                        @endif
                    </td>
                    <td><a href="{{route('admin_image_delete',['id' => $rs->id,'content_id'=>$data->id ])}}" onclick="return confirm('Emin misiniz?')">
                            <img src="{{asset('assets/admin/images')}}/delete.png" height="26"></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </form>
</div>

</body>
</html>
