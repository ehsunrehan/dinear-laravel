<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('restaurant/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<div class="restaurant-container">

    <!-- Sidebar -->

    <aside class="sidebar">

        <div class="sidebar-top">

            <div class="logo">

                <i class="fa-solid fa-utensils"></i>

                <span>Restaurant Panel</span>

            </div>

        </div>

        <ul class="sidebar-menu">

            <li>
                <a href="{{ route('restaurant.dashboard') }}">
                    <i class="fa-solid fa-chart-line"></i>
                    Dashboard
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-bowl-food"></i>
                    All Foods
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-file-circle-plus"></i>
                    Pull Requests
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-money-check-dollar"></i>
                    Payments
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-spinner"></i>
                    Working
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-envelope"></i>
                    Messages
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-shield-halved"></i>
                    Privacy Policy
                </a>
            </li>

        </ul>

        <div class="sidebar-bottom">

            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button class="logout-btn">

                    <i class="fa-solid fa-right-from-bracket"></i>

                    Logout

                </button>

            </form>

        </div>

    </aside>

    <div id="sidebar-overlay"></div>


    <!-- Main -->

    <div class="main-content">

        <header class="topbar">

            <button id="menu-toggle">

                <i class="fa-solid fa-bars"></i>

            </button>

            <div class="page-title">

                @yield('title')

            </div>

            <div class="restaurant-user">

                {{ Auth::user()->name }}

            </div>

        </header>

        <div class="page-content">

            @yield('content')

        </div>

    </div>

</div>

<script src="{{ asset('restaurant/js/main.js') }}"></script>

</body>

</html>