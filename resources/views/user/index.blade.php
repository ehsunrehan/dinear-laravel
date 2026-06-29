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
        <h1>DineAR</h1>
        <h1>AR Restaurant Menu</h1>

        <p>
            Please scan a QR code provided by the restaurant.
        </p>
        <div class="button-group">
            <a href="{{ route('burger.3d') }}"><button style="height: 50px;width: 100px;">Burger</button></a>
            <a href="{{ route('boti_roll.3d') }}"><button style="height: 50px;width: 100px;">Boti Roll</button></a>
            <a href="{{ route('tikka.3d') }}"><button style="height: 50px;width: 100px;">Tikka</button></a>



        </div>
        

    </div>

</body>
</html>