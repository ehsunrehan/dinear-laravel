<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AR Restaurant Menu</title>

    <link rel="stylesheet" href="{{ asset('website/css/style.css')}}">
</head>
<body>

   <div class="home-container">
        <h1>PyxeAR</h1>
        <h1>AR Restaurant Menu</h1>

        <p>
            Please scan a QR code provided by the restaurant.
        </p>
        <div class="button-group">
            <a href="{{ route('foods') }}"><button style="height: 50px;width: 150px;">View All Food</button></a>
        </div>

        <br><br>

@if (Route::has('login'))

    @auth

        <div class="button-group">

            <a href="{{ url('/dashboard') }}">
                <button style="height:50px;width:140px;">
                    Dashboard
                </button>
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" style="height:50px;width:140px;">
                    Logout
                </button>

            </form>

        </div>

    @else

        <div class="button-group">

            <a href="{{ route('login') }}">
                <button style="height:50px;width:140px;">
                    Login
                </button>
            </a>

            @if (Route::has('register'))

                <a href="{{ route('register') }}">
                    <button style="height:50px;width:140px;">
                        Register
                    </button>
                </a>

            @endif

        </div>

    @endauth

@endif
        

    </div>

</body>
</html>