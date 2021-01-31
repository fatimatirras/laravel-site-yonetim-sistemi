
@php
     $parentMenus = \App\Http\Controllers\HomeController::menulist()
@endphp

<li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Menus<b class="caret"></b></a>
    <ul class="dropdown-menu megamenu">
        <li>
            <div class="row">
                <div class="col-md-2"><img src="{{ asset('assets') }}/img/template-easy-customize.png" alt="" class="img-fluid d-none d-lg-block"></div>
                @foreach($parentMenus as $rs)
                <div class="col-lg-3 col-md-6">
                    <ul class="list-unstyled mb-3">

                        <li class="nav-item"><h5>{{$rs->title}}</h5></li>
                            @if(count($rs->children))
                                @include('home.menutree',['children' => $rs->children])
                            @endif
                    </ul>
                </div>
                @endforeach
            </div>
        </li>
    </ul>
</li>
