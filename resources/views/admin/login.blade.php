<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <form action="{{ url('admin/login') }}" method="post">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" required id="email">
        <label for="passowrd">Password</label>
        <input type="password" name="password" required id="password">
        <button type="submit">submit</button> 
    </form>
</body>
</html>