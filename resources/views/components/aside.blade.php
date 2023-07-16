@php
$url = url()->current();
$url = substr($url, strrpos($url, '/') + 1);
$page = "";
if(strpos($url,'sake_type') === 0){
    $page = "sake_type";
}
elseif(strpos($url,'sake') === 0 || $url=='home'){
    $page = "sake";
}
elseif(strpos($url,'brewery') === 0){
    $page = "brewery";
}
elseif(strpos($url,'camp') === 0){
    $page = "camp";
}
elseif(strpos($url,'place') === 0){
    $page = "place";
}
@endphp

<section class="side">
    @guest
    @else
        <div class="w-75 mx-auto mt-3 mb-3">
            <img src="{{ asset('img/logo_transparent.png') }}" class="w-100" alt="log">
        </div>
        <div class="w-100 text-center">
            @if($page == "sake")
            <a href="{{ route('sake.list') }}" class="btn btn-dark mx-auto mt-2 link-btn-disable" style="width:85%">
                <i class="fas fa-file-alt"></i>　酒
            </a>
            @else
            <a href="{{ route('sake.list') }}" class="btn mx-auto mt-2" style="width:85%">
                <i class="fas fa-file-alt"></i>　酒
            </a>
            @endif
        </div>
        <div class="w-100 text-center">
            @if($page == "sake_type")
            <a href="{{ route('sake_type.list') }}" class="btn btn-dark mx-auto mt-2 link-btn-disable" style="width:85%">
                <i class="fas fa-file-alt"></i>　酒分類
            </a>
            @else
            <a href="{{ route('sake_type.list') }}" class="btn mx-auto mt-2" style="width:85%">
                <i class="fas fa-file-alt"></i>　酒分類
            </a>
            @endif
        </div>
        <div class="w-100 text-center">
            @if($page == "brewery")
            <a href="{{ route('brewery.list') }}" class="btn btn-dark mx-auto mt-2 link-btn-disable" style="width:85%">
                <i class="fas fa-file-alt"></i>　酒造所
            </a>
            @else
            <a href="{{ route('brewery.list') }}" class="btn mx-auto mt-2" style="width:85%">
                <i class="fas fa-file-alt"></i>　酒造所
            </a>
            @endif
        </div>
        <div class="w-100 text-center">
            @if($page == "camp")
            <a href="{{ route('camp.list') }}" class="btn btn-dark mx-auto mt-2 link-btn-disable" style="width:85%">
                <i class="fas fa-file-alt"></i>　陣
            </a>
            @else
            <a href="{{ route('camp.list') }}" class="btn mx-auto mt-2" style="width:85%">
                <i class="fas fa-file-alt"></i>　陣
            </a>
            @endif
        </div>
        <div class="w-100 text-center">
            @if($page == "place")
            <a href="{{ route('place.list') }}" class="btn btn-dark mx-auto mt-2 link-btn-disable" style="width:85%">
                <i class="fas fa-file-alt"></i>　店情報
            </a>
            @else
            <a href="{{ route('place.list') }}" class="btn mx-auto mt-2" style="width:85%">
                <i class="fas fa-file-alt"></i>　店情報
            </a>
            @endif
        </div>
        <div class="side-nav-item logout">
            <a class="dropdown-item text-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    @endguest
</section>