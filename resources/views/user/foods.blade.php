<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</script>

<title>All Foods</title>

<link rel="stylesheet" href="{{ asset('website/css/style.css') }}">

</head>

<body>

<nav class="navbar">

    <div class="navbar-left"></div>

    <div class="navbar-center">

        <img src="{{ asset('website/images/logo.jpg') }}"
             class="logo"
             alt="Logo">

    </div>

    <div class="navbar-right">

        <a href="#" class="social-icon">
            <i class="fab fa-facebook-f"></i>
        </a>

        <a href="#" class="social-icon">
            <i class="fab fa-instagram"></i>
        </a>

        <a href="#" class="social-icon">
            <i class="fab fa-youtube"></i>
        </a>

    </div>

</nav>

<div class="foods-page">

    <h1>Explore Our Menu</h1>

<p class="foods-subtitle">

Tap any dish to preview it in 3D or open its page.

</p>

<div class="foods-grid">

@foreach($foods as $food)

<div class="food-card">

<img
class="food-preview"

src="{{ asset('website/images/'.$food['image']) }}"

data-model="{{ asset('website/models/'.$food['model']) }}"

alt="{{ $food['name'] }}">

<h2>{{ $food['name'] }}</h2>

<a href="{{ route($food['route']) }}">

<button class="food-view-btn">

View

</button>

</a>

</div>

@endforeach

</div>

</div>






<div id="food-popup" class="fake-ar hidden">

    <div class="ar-topbar">

        <button id="close-food-popup">
            ✖
        </button>

    </div>

    <model-viewer

            id="popup-model"

            camera-controls
            auto-rotate

            environment-image="neutral"

            shadow-intensity="1"

            style="width:100%;height:100%;">

    </model-viewer>

</div>


<script>

const popup=document.getElementById("food-popup");

const popupModel=document.getElementById("popup-model");

const previews=document.querySelectorAll(".food-preview");

const close=document.getElementById("close-food-popup");


previews.forEach(function(img){

img.addEventListener("click",function(){

popup.classList.remove("hidden");

popupModel.src=this.dataset.model;

});

});


close.addEventListener("click",function(){

popup.classList.add("hidden");

popupModel.removeAttribute("src");

});

</script>



</body>
</html>