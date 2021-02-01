
<html>
<head>
    <title>Payment Details</title>
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

<div class="card">
    <div class="card-header">
        <h5 class="title">User: {{$data->user->name}}</h5>

    </div>
    <div class="card-body">

        <div style="width:400px; height: 600px;">
            @include('home.message')
            <form action="{{route('admin_requestmng_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf

                <table class="table" style="width: 800px">

                    <tr><th>Subject</th><td>{{$data->subject}}</td></tr>
                    <tr><th>Request</th><td>{{$data->request}}</td></tr>
                    <tr><th>Date</th><td>{{$data->created_at}}</td></tr>
                    <tr><th>Status</th><td>
                            <select name="status">
                                <option selected>{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </td></tr>



                </table>
                <button type="submit">Update</button>
            </form>
        </div>

    </div>
</div>

</body>
</html>
