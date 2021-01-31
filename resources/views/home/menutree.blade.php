@foreach($children as $submenu)
    <ul class="list-unstyled mb-3">
        @if(count($submenu->children))
            <li class="nav-item"><a href="#" class="nav-link">{{$submenu->title}}</a></li>
            <ul class="list-unstyled mb-3">
                @include('home.menutree',['children'=> $submenu->children])
            </ul>
            <hr>
        @else
            <li class="nav-item"><a href="{{route('menucontents',['id'=>$submenu->id,'slug'=>$submenu->title])}}" class="nav-link">{{$submenu->title}}</a></li>
        @endif
    </ul>
@endforeach
