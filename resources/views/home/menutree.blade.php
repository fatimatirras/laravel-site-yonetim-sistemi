@foreach($children as $submenu)
    <ul class="list-unstyled mb-3">
        @if(count($submenu->children))
            <li class="nav-item"> {{$submenu->title}}</li>
            <ul class="list-unstyled mb-3">
                @include('home.menutree',['children'=> $submenu->children])
            </ul>
            <hr>
        @else
            <li class="nav-item"><a href="template-header-default.html" class="nav-link">{{$submenu->title}}</a></li>
        @endif
    </ul>
@endforeach
