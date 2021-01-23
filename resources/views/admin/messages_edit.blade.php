<link rel="stylesheet" href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css">
<!-- Font Awesome CSS-->
<link rel="stylesheet" href="{{ asset('assets') }}/vendor/font-awesome/css/font-awesome.min.css">
<!-- Google fonts - Roboto-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
<!-- Bootstrap Select-->
<link rel="stylesheet" href="{{ asset('assets') }}/vendor/bootstrap-select/css/bootstrap-select.min.css">
<!-- owl carousel-->
<link rel="stylesheet" href="{{ asset('assets') }}/vendor/owl.carousel/assets/owl.carousel.css">
<link rel="stylesheet" href="{{ asset('assets') }}/vendor/owl.carousel/assets/owl.theme.default.css">
<!-- theme stylesheet-->
<link rel="stylesheet" href="{{ asset('assets') }}/css/style.default.css" id="theme-stylesheet">
<!-- Custom stylesheet - for your changes-->
<link rel="stylesheet" href="{{ asset('assets') }}/css/custom.css">

    <div class="card-body">

                 <div>
                     <p>Message Detail</p>
                     @include('home.message')
                 </div>
                    <form action="{{ route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">

                            <table class="table table-striped">


                                <tr>
                                    <th>Id</th>  <td>{{ $data->id }}</td>
                                </tr>

                                </tr>
                                    <th>Name</th>    <td>{{ $data->name }}</td>

                                </tr>
                                <tr>
                                    <th>Email</th>      <td>{{ $data->email }}</td>
                                <tr>
                                </tr>
                                    <th>Phone</th>    <td>{{ $data->phone }}</td>
                                <tr>
                                </tr>
                                    <th>Subject</th>   <td>{{ $data->subject }}</td>
                                <tr>
                                </tr>
                                    <th>Message</th> <td>{{ $data->message }}</td>
                                <tr>
                                </tr>

                                <th>Admin Note</th><td><textarea name="note">{{$data->note}}</textarea></td>


                                <tr>
                                    <td></td>
                                    <td>
                                        <div> <input type="submit" value="Update message" class="btn btn-primary"></div>
                                    </td>
                                </tr>

                            </table>
                        </div>

                    </form>

    </div>



