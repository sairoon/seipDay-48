<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li><a href="{{ route('word-count') }}" class="nav-link">Word count</a></li>
            <li><a href="{{ route('students-add') }}" class="nav-link">Add Student</a></li>
            <li><a href="{{ route('students-manage') }}" class="nav-link">Manage Student</a></li>
        </ul>
    </div>
</nav>
