<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css"/>
    <link rel="stylesheet" href="{{asset('/')}}css/all.css"/>
    <link rel="stylesheet" href="{{asset('/')}}css/style.css"/>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light  bg-light shadow">
    <div class="container">
        <a href="" class="navbar-brand">Laravel Ecommerce</a>
        <ul class="navbar-nav">
            <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('category.add')}}" class="dropdown-item">Add Category</a> </li>
                    <li><a href="{{route('category.manage')}}" class="dropdown-item">Manage Category</a> </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Brand</a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('brand.add')}}" class="dropdown-item">Add Brand</a></li>
                    <li><a href="{{route('brand.manage')}}" class="dropdown-item">Manage Brand</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product</a>
                <ul class="dropdown-menu">
                    <li><a href="" class="dropdown-item">Add Product</a></li>
                    <li><a href="" class="dropdown-item">Manage Product</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

@yield('body')



<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
<script src="{{asset('/')}}js/jquery-3.6.1.js"></script>
</body>
</html>

