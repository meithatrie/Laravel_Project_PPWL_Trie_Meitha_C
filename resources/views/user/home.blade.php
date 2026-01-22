<h1>Home User</h1>
<p>Selamat datang User</p>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
