<!-- resources/views/admin/register.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Register</title>
</head>
<body>
    <form action="{{ url('admin/register') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
        <button type="submit">Register</button>
    </form>
</body>
</html>
