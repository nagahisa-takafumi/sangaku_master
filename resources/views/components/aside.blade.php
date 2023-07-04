@php
//$url = url()->current();
//$url = substr($url, strrpos($url, '/') + 1);
$page = "";
//if(strpos($url,'client') === 0){
//    $page = "client";
//}
//elseif(strpos($url,'project') === 0 || $url=='home'){
//    $page = "project";
//}
//elseif(strpos($url,'report') === 0){
//    $page = "report";
//}
@endphp

<section class="side">
    @guest
    @else
        <div class="w-75 mx-auto mt-3">
            <img src="{{ asset('img/logo_transparent.png') }}" class="w-100" alt="log">
        </div>
        <div class="w-100 text-center">
            @if($page == "report")
            <a href="" class="btn btn-dark mx-auto mt-2 link-btn-disable" style="width:85%">
                <i class="fas fa-file-alt"></i>　日報
            </a>
            @else
            <a href="" class="btn mx-auto mt-2" style="width:85%">
                <i class="fas fa-file-alt"></i>　日報
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