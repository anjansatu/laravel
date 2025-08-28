<nav class="topbar">
    <div class="logo">
        <img src="{{ asset('frontend/images/logo.svg') }}" alt="Logo" height="40">
    </div>
    <ul class="nav">
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        @endguest
    </ul>
</nav>
