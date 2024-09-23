<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }}!</p>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
</a>

</body>
</html>
