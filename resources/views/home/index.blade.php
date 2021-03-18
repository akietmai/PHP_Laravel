<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Laravel</title>
</head>
<body>
    <?php
        echo "<h1>Hello {$name}</h1>";
    ?>
    <x-sidebar title="Học Laravel" :email="$email" class="user-list" id="user-id"></x-sidebar>
    {{-- <a href="{{ route('user') }}">User</a> |
    <a href="/product">Product</a> |
    <a href="/news">News</a> |
    <a href="/service">Service</a>
    <hr>
    <ul>
        <li><a href="/news/1/category/11">Bài viết số 1</a></li>
        <li><a href="/news/2/category/222">Bài viết số 2</a></li>
        <li><a href="/news/3/category/3333">Bài viết số 3</a></li>
        <li><a href="/news/4/category/44444">Bài viết số 4</a></li>
    </ul>
    <hr>
    <h2>Route name trong Laravel: route('name')</h2>
    <ul>
        <li><a href="{{ route('user') }}">User</a></li>
        <li><a href="{{ route('user') }}">User</a></li>
        <li><a href="{{ route('user') }}">User</a></li>
        <li><a href="{{ route('user') }}">User</a></li>
        <li><a href="{{ route('user') }}">User</a></li>
    </ul>
    <hr>
    <h2>Route name có tham số truyền vào</h2>
    <ul>
        <li><a href="{{ route('user-detail', [ 'id' => 1, 'branchID' => '123']) }}">User Detail</a></li>
        <li><a href="{{ route('user-detail', [ 'id' => 2, 'branchID' => '456' ]) }}">User Detail</a></li>
        <li><a href="{{ route('user-detail', [ 'id' => 3, 'branchID' => '789' ]) }}">User Detail</a></li>

    </ul>
    <hr>
    <h2>Route group trong Laravel</h2>
    <ul>
        <li><a href="{{ route('backend.user') }}">Backend user management</a></li>
        <li><a href="{{ route('backend.product') }}">Backend product management</a></li>
        <li><a href="{{ route('backend.category') }}">Backend category management</a></li>
        <li><a href="{{ route('backend.news') }}">Backend news management</a></li>
    </ul> --}}
</body>
</html>
