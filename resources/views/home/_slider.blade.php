<section style="background: url('{{ asset('assets') }}/img/photogrid.jpg') center center repeat; background-size: cover;" class="bar background-white relative-positioned">
    <div class="container">
        <!-- Carousel Start-->
        <div class="home-carousel">
            <div class="dark-mask mask-primary"></div>
            <div class="container">
                <div class="homepage owl-carousel">

                    @foreach($slider as $rs)
                    <div class="item">
                        <div class="row">
                            <div class="col-md-7 text-center"><img src="{{Storage::url($rs->image)}}" alt="" style="height: 475px" class="img-fluid"></div>
                            <div class="col-md-5">
                                <h2>{{$rs->title}}</h2>
                                <ul class="list-unstyled">
                                    <li>{{$rs->type}}</li>
                                    <li>4 Header variations</li>
                                    <li>Google maps, Forms, Megamenu, CSS3 Animations and much more</li>
                                    <li>+ 11 extra pages showing template features</li>
                                    <a href="{{route('content',['id' => $rs->id,'slug' => $rs->title])}}" style="color: #2d3748" class="btn btn-primary">Detaya gir</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div>
        </div>
        <!-- Carousel End-->
    </div>
</section>
