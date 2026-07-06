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
                <i class="fa-solid fa-utensils logo-icon"></i>
                <span>
                    Restaurant Panel
                </span>
            </div>

        </div>

        <ul class="sidebar-menu">

            <li>
                <a href="{{ route('restaurant.dashboard') }}"
                    class="{{ request()->routeIs('restaurant.dashboard') ? 'active' : '' }}">

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
                    <span class="notify-badge orange">
                        3
                    </span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-money-check-dollar"></i>
                    Payments
                    <span class="notify-badge green">
                        1
                    </span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-spinner"></i>
                    Working
                    <span class="notify-badge blue">
                        2
                    </span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-envelope"></i>
                    Messages
                    <span class="notify-badge red">
                        5
                    </span>
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

         <div class="profile-dropdown">

    <button class="profile-btn" id="profileBtn">

        <div class="profile-avatar">

            {{ strtoupper(substr(Auth::user()->name,0,1)) }}

        </div>

        <div class="profile-info">

            <h5>{{ Auth::user()->name }}</h5>

            <small>Restaurant Owner</small>

        </div>

        <i class="fa-solid fa-chevron-down profile-arrow"></i>

    </button>

    <div class="profile-menu" id="profileMenu">

        <div class="profile-header">

            <div class="profile-avatar large">

                {{ strtoupper(substr(Auth::user()->name,0,1)) }}

            </div>

            <h4>{{ Auth::user()->name }}</h4>

            <span>Restaurant Owner</span>

        </div>

        <a href="{{ route('restaurant.profile') }}">

            <i class="fa-solid fa-user"></i>

            My Profile

        </a>

        <a href="#">

            <i class="fa-solid fa-gear"></i>

            Account Settings

        </a>

        <a href="#">

            <i class="fa-solid fa-bell"></i>

            Notifications

            <span class="coming-soon">Soon</span>

        </a>

        <div class="menu-divider"></div>

        <form method="POST" action="{{ route('logout') }}">

            @csrf

            <button type="submit" class="profile-logout">

                <i class="fa-solid fa-right-from-bracket"></i>

                Logout

            </button>

        </form>

    </div>

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