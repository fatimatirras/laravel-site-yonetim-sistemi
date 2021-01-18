<!-- Login Modal-->
<div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">*</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin_logincheck') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input id="email" type="text" placeholder="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" placeholder="password" class="form-control">
                    </div>
                    <p class="text-center">
                        <a href="{{route('home')}}" class="btn btn-template-outlined"> <i class="fa fa-sign-in"></i>Login</a></a>
                    </p>
                </form>
                <p class="text-center text-muted">Not registered yet?</p>
                <p class="text-center text-muted"><a href="/register"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
            </div>
        </div>
    </div>
</div>
<!-- Login modal end-->
