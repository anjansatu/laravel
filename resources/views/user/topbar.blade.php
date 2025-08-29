<nav id="main-nav" class="navbar navbar-default main-nav-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- START LOGO DESIGN AREA -->
                <div class="logo">
                    <a href="{{ asset('frontend/index.html') }}">
                        <p>SCANDAL</p>
                    </a>
                </div>
                <!-- END LOGO DESIGN AREA -->
            </div>
            <div class="col-md-9">
                <!-- START TOGGLE NAVIGATION FOR BETTER MOBILE DISPLAY -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- / END TOGGLE NAVIGATION FOR BETTER MOBILE DISPLAY -->

                <!-- START CONTENT FOR TOGGLING -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="{{ asset('frontend/index.html') }}">Home</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="{{ asset('frontend/gallery.html') }}">Gallery</a></li>
                        <li><a href="{{ asset('frontend/video-gallery.html') }}">Videos</a></li>
                        <li><a href="#main-content">Blog</a></li>
                        <li><a href="{{ asset('frontend/about.html') }}">About</a></li>
                        <li><a href="{{ asset('frontend/contact.html') }}">Contact</a></li>
                        @auth
                            <li>
                                <a href="{{ route('logout') }}" class="slide-btn"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endauth
                    </ul>
                </div>
                <!-- / END CONTENT FOR TOGGLING -->
            </div>
        </div>
    </div>
</nav>
