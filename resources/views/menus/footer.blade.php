<div class="section footer-menu">
    <div class="container content">
        <div class="columns">
            <div class="column is-offset-3 is-6">
                <p class="has-text-centered tag-line">Subscribe to our newsletter to get the latest news</p>
                <form action="{{ url('subscribe') }}" method="POST">
                {!! csrf_field() !!}
                <div class="field is-grouped">
                    <div class="control has-icons-left is-expanded">
                        <input type="email" value="" name="EMAIL" class="input is-flat required email" id="mce-EMAIL"
                               placeholder="email address" required="" aria-required="true">
                        <span class="icon is-small is-left">
                    <i class="fa fa-envelope"></i>
                  </span>
                    </div>
                    <div class="control">
                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"
                               class="button  is-primary">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<nav class="nav footer-menu">
    <div class="container">

        <div class="nav-left">
            <a class="nav-item" href="http://facebook.com/brightniyonzima.1">
                <span class="icon"><i class="fa fa-facebook-f"></i></span>
            </a>
            <a class="nav-item" href="">
                <span class="icon"><i class="fa fa-twitter"></i></span>
            </a>
            <a class="nav-item" href="">
                <span class="icon"><i class="fa fa-youtube"></i></span>
            </a>
            <a class="nav-item" href="">
                <span class="icon"><i class="fa fa-linkedin"></i></span>
            </a>
        </div>

        <div class="nav-right nav-menu ">
            <a href="{{url('/#')}}" class="nav-item">Property</a>
            <a href="{{url('/#')}}" class="nav-item">Car Hire</a>
            <a href="{{url('/about-us')}}" class="nav-item">About us</a>
            <a href="{{url('/contact-us')}}" class="nav-item">Contact Us</a>
            <a href="{{url('https://medium.com/@vmtumukugize')}}" class="nav-item ">Blog</a>
        </div>
    </div>
</nav>
