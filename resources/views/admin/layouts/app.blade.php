<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    <style>

        body{
            background:#F7F8FC;
            margin:0;
            font-family:Segoe UI;
        }

        .sidebar{

            position:fixed;

            left:0;

            top:0;

            width:260px;

            height:100vh;

            background:#FF6B35;

            color:white;

            padding:30px 20px;

        }

        .logo{

            font-size:28px;

            font-weight:bold;

            margin-bottom:40px;

            text-align:center;

        }

        .sidebar a{

            display:block;

            color:white;

            text-decoration:none;

            padding:14px 18px;

            margin-bottom:10px;

            border-radius:10px;

            transition:.3s;

            font-size:17px;

        }

        .sidebar a:hover{

            background:rgba(255,255,255,.2);

        }

        .content{

            margin-left:260px;

            padding:35px;

        }

        .topbar{

            background:white;

            border-radius:15px;

            padding:18px 25px;

            display:flex;

            justify-content:space-between;

            align-items:center;

            margin-bottom:30px;

            box-shadow:0 8px 20px rgba(0,0,0,.05);

        }

        .welcome{

            font-size:22px;

            font-weight:bold;

        }

        .user{

            font-weight:600;

        }

    </style>

</head>

<body>

<div class="sidebar">

<div class="logo">

PyxeAR

</div>

<a href="{{ route('food.index') }}">

<i class="fa-solid fa-bowl-food"></i>

Food

</a>

<form action="{{ route('logout') }}" method="POST">

@csrf

<button class="btn btn-light w-100">

Logout

</button>

</form>

</div>

<div class="content">

<div class="topbar">

<div class="welcome">

@yield('page-title')

</div>

<div class="user">

{{ Auth::user()->name }}

</div>

</div>

@yield('content')

</div>

</body>

</html>