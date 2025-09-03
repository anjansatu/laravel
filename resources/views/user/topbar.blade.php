<nav id="main-nav" class="navbar navbar-default main-nav-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- START LOGO DESIGN AREA -->
                <div class="logo">
                    <a href="{{ route('dashboard') }}">
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
                        <li class="active"><a href="{{ route('dashboard') }}">Home</a></li>
                        @auth
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    {{ auth()->user()->username }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('profile.show') }}">Profile</a></li>
                                    <li><a href="{{ route('profile.purchases') }}">Purchases</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Balance: {{ rtrim(rtrim(number_format(auth()->user()->balance, 2, '.', ''), '0'), '.') }}</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Deposit <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('deposit.create') }}">Deposit</a></li>
                                    <li><a href="{{ route('deposit.history') }}">Deposit History</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('portal-mail.index') }}">Portal Mail</a></li>
                            <li><a href="{{ route('ssn.index') }}">SSN</a></li>
                            <li><a href="{{ route('chat.index') }}">Chat</a></li>
                        @endauth
                    </ul>
                </div>
                <!-- / END CONTENT FOR TOGGLING -->
            </div>
        </div>
    </div>
</nav>
