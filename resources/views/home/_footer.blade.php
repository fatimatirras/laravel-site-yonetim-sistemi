<!-- FOOTER -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h4 class="h6">Address</h4>
                <p>{{$setting->company}}<br>
                    {{$setting->address}}<br>
                   </p>
            </div>

            <div class="col-lg-3">
                <h4 class="h6">Contact</h4>
                <p > <strong>Phone: </strong> {{$setting->phone}}<br>
                    <strong>Fax: </strong> {{$setting->fax}}<br>
                    <strong>Email: </strong> {{$setting->email}}<br></p>
               <!-- <a href="contact.html" class="btn btn-template-main">Go to contact page</a>  -->

                <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
                <ul class="list-inline photo-stream">
                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets') }}/img/2_foto.jpg" alt="..." class="img-fluid"></a></li>
                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets') }}/img/2_foto.jpg" alt="..." class="img-fluid"></a></li>
                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets') }}/img/2_foto.jpg" alt="..." class="img-fluid"></a></li>
                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets') }}/img/2_foto.jpg" alt="..." class="img-fluid"></a></li>
                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets') }}/img/2_foto.jpg" alt="..." class="img-fluid"></a></li>
                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets') }}/img/2_foto.jpg" alt="..." class="img-fluid"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center-md">
                    <p>&copy; 2021. Your company / {{$setting->company}}</p>
                </div>
            </div>
        </div>
    </div>
</footer>



