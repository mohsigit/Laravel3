<!DOCTYPE html>
<html>
<head>
    <title>Manager Dashboard</title>
</head>
<body>
    <h1>Manager Dashboard</h1>
    <p>Welcome, Manager {{ auth()->user()->name }}!</p>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
</a>

</body>
</html>
