<nav class="nav is-transparent is-fixed" id="main-nav">
    <div class="container">
        <div class="nav-left">
            <a href="{{'/'}}" class="nav-item">
                <svg width="30" height="30" class="brand-logo">
                    {{-- {!! \File::get(public_path('img/tama-logo.jpg')) !!} --}}
                </svg>
                <h1 class="brand-name"><i>Marvella Consultants Uganda Ltd</i></h1>
            </a>
        </div>

        <span class="nav-toggle" id="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
      </span>

        <div class="nav-right nav-menu" id="nav-menu">
            <a href="{{url('/')}}" class="nav-item is-tab" title="home">Home</a>
            <a href="{{url('/property')}}" class="nav-item is-tab" title="property">Property</a>
            <a href="{{url('/#')}}" class="nav-item is-tab" title="car hire">Hotel Booking</a>
            <a href="{{url('/#')}}" class="nav-item is-tab dropdown" title="Services">Car Hire</a>
            <a href="{{url('/about-us')}}" class="nav-item is-tab" title="about us">About us</a>
            <a href="{{url('https://medium.com/@vmtumukugize')}}" class="nav-item is-tab">Blog</a>
            @if(Auth::check())
                <!-- <a href="" class="nav-item is-tab" title="contact us">
                    {{ auth()->user()->name }}
                </a> -->
                <a href="{{ url('/logout') }}" class="nav-item is-tab" title="contact us" onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                    Logout
                </a>
            @endif
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</nav>


