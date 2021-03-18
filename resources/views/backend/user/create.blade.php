<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>User Form</h2>
    <form action="{{ route('backend.user.store') }}" method="post">
        {{-- @method('put') --}}
        {{-- @method('patch') --}}
        {{-- @method('delete') --}}
        @csrf
        <input type="text" name="fullname" id="" placeholder="Your Fullname ...">
        <br>
        <input type="email" name="email" id="" placeholder="Your Email ...">
        <br>
        <input type="password" name="password" id="" placeholder="Your Password ...">
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
