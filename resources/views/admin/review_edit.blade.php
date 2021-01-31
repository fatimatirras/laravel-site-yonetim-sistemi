
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

    @include('home.message')
    <form action="{{route('admin_review_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <table>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <tr><th><b>Id</b></th><td>{{$data->id}}</td></tr>
                        <tr><th><b>User</b></th><td>{{$data->user->name}}</td></tr>
                        <tr><th><b>Content</b></th><td>{{$data->content->title}}</td></tr>
                        <tr><th><b>Subject</b></th><td>{{$data->subject}}</td></tr>
                        <tr><th><b>Review</b></th><td>{{$data->review}}</td></tr>
                        <tr><th><b>Date</b></th><td>{{$data->created_at}}</td></tr>
                        <tr><th><b>Status</b></th>
                            <td>
                                <select name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </td></tr>
                        <tr><th><button type="submit" class="btn btn-dark">Update Review</button></th></tr>
                        </thead>


                    </table>
                </div>
            </div>
        </table>
    </form>
</div>

</body>
</html>
