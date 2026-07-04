<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{{ $food->name }}</title>

<link rel="stylesheet" href="{{ asset('website/css/style.css') }}">

<script type="module"
src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<nav class="navbar">

<div class="navbar-left"></div>

<div class="navbar-center">

<img src="{{ asset('website/images/logo.jpg') }}"
class="logo">

</div>

<div class="navbar-right">

@guest

<a href="{{ route('login') }}" class="nav-btn">
Login
</a>

<a href="{{ route('register') }}" class="nav-btn register-btn">
Register
</a>

@else

<span class="user-name">
{{ Auth::user()->name }}
</span>

<form method="POST"
action="{{ route('logout') }}"
style="display:inline">

@csrf

<button class="nav-btn logout-btn">

Logout

</button>

</form>

@endguest



        <a href="#" class="social-icon" aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
        </a>

        <a href="#" class="social-icon" aria-label="Instagram">
            <i class="fab fa-instagram"></i>
        </a>

        <a href="#" class="social-icon" aria-label="YouTube">
            <i class="fab fa-youtube"></i>
        </a>




</div>

</nav>

<div class="food-detail-page">

<!-- LEFT -->

<div class="food-left">

<h1>{{ $food->name }}</h1>

<model-viewer

src="{{ asset('food/models/'.$food->model) }}"

camera-controls

auto-rotate

shadow-intensity="1"

environment-image="neutral"

style="width:100%;height:500px;">

</model-viewer>

<div class="detail-buttons">

<button id="ar-btn">
View In AR
</button>

<a href="{{ route('foods') }}">
    <button class="view-all-btn">
        View All
    </button>
</a>

</div>

<button id="menu-btn">
☰
</button>

</div>

<!-- RIGHT -->

<div class="food-right">

<h2>Description</h2>

<p>

{{ $food->description }}

</p>

<h3>

Price

</h3>

<p>

Rs. {{ $food->price }}

</p>



<h3>Ingredients</h3>

<div class="ingredient-list">

@foreach(explode(',', $food->ingredients) as $ingredient)

<span class="ingredient-tag">

{{ trim($ingredient) }}

</span>

@endforeach

</div>


<hr>

<h2 style="margin-top: 15px;">

Recommended Foods

</h2>

<div class="recommended-grid">

@foreach($recommended as $item)

<div class="recommended-card">

<a href="{{ route('user.food.show', $item->id) }}">
    
    

<img

src="{{ asset('food/images/'.$item->image) }}"

style="width:120px;height:120px;object-fit:cover;border-radius:15px;">

<p>

{{ $item->name }}

</p>

</a>

</div>

@endforeach

</div>

</div>

</div>





<div id="fake-ar" class="fake-ar hidden">

<div class="ar-topbar">

<button id="close-ar">

✖

</button>

</div>

<model-viewer

camera-controls

auto-rotate

style="width:100%;height:100%;">

</model-viewer>

</div>






<div id="sidebar-overlay"></div>

<div id="sidebar">

<div id="close-btn">✕</div>

<h2>Description</h2>

<p>{{ $food->description }}</p>

<h3>Price</h3>

<p>Rs. {{ $food->price }}</p>

<h3>Ingredients</h3>

<div class="ingredient-list">

@foreach(explode(',', $food->ingredients) as $ingredient)

<span class="ingredient-tag">

{{ trim($ingredient) }}

</span>

@endforeach

</div>

<hr>

<h2>Recommended Foods</h2>

<div class="recommended-grid">

@foreach($recommended as $item)

<div class="recommended-card">

<a href="{{ route('food.show',$item->id) }}">

<img src="{{ asset('food/images/'.$item->image) }}">

<p>{{ $item->name }}</p>

</a>

</div>

@endforeach

</div>

</div>





<script src="{{ asset('website/js/main.js') }}"></script>
</body>

</html>