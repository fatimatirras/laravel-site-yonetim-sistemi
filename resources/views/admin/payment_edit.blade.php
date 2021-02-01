
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

<div class="card-header">
    <h3 class="card-title">Payment Details: {{$data->title}}</h3>
</div>
<div class="card-body">
@include('home.message')
    <form action="{{route('admin_payment_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <table class="table table-striped">
            <tr><th>Name</th><td>{{$data->user->name}}</td></tr>
            <tr><th>Email</th><td>{{$data->user->email}}</td></tr>
            <tr><th>Phone</th><td>{{$data->user->phone}}</td></tr>
            <tr><th>Address</th><td>{{$data->user->address}}</td></tr>
            <tr><th>Flat Number</th><td>{{$data->user->flatnr}}</td></tr>
            <tr><th>Block</th><td>{{$data->user->block}}</td></tr>
            <tr><th>Date</th><td>{{$data->created_at}}</td></tr>
            <tr><th>Admin Note</th><td><textarea name="note" rows="3" cols="15">{{$data->note}}</textarea></td>
            <tr><th>Status</th><td>
                    <select name="status">
                        <option selected>{{$data->status}}</option>
                        <option>Ödendi</option>
                    </select>
                </td></tr>

        </table>
        <button type="submit">Update</button>
    </form>
</div>

</body>
</html>
