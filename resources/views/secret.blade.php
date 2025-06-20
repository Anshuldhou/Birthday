<!-- resources/views/secret.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Enter Secret Password</title>
</head>
<body style="text-align:center; padding-top:100px;">
    <h2>🔐 Enter the password to see your surprise</h2>

    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif

    <form method="POST" action="/secret-check">
        @csrf
        <input type="password" name="password" placeholder="Enter Password" style="padding:10px;" required>
        <button type="submit" style="padding:10px;">Unlock 🔓</button>
    </form>
</body>
</html>
