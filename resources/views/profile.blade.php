<div>
    <h1>This is profile page</h1>

    @if (session('user'))
        <h2>Welcome, {{ session('user') }}</h2>
        <a href="logout">Logout</a>
    @else
        <h2>No user found in session</h2>

        <a href="login">Login</a>
    @endif
</div>
