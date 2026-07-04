<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Zinger Burger</title>

    <link rel="stylesheet" href="{{ asset('website/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preload" href="{{ asset('website//models/burger2.glb')}}" as="fetch" crossorigin="anonymous">

    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js">
    </script>

</head>

<body>


      <nav class="navbar">

    <div class="navbar-left"></div>

    <div class="navbar-center">
        <img src="{{ asset('website/images/logo.jpg') }}" alt="Brand Logo" class="logo">
    </div>

    <div class="navbar-right">

        @guest
            <a href="{{ route('login') }}" class="nav-btn">Login</a>

            <a href="{{ route('register') }}" class="nav-btn register-btn">Register</a>
        @else

            <span class="user-name">
                {{ Auth::user()->name }}
            </span>

            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button type="submit" class="nav-btn logout-btn">
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

    <div class="food-container">

        <!-- 3D Model Section -->

        <div class="viewer-section">

            <!-- <div class="top-actions">
                <a href="../image-generator.html">
                    <button class="ai-btn">🍔 AI Food Generator</button>
                </a>
            </div> -->


            <h1>Zinger Burger</h1>


           <model-viewer
id="burgerModel"
src="{{ asset('website//models/burger2.glb')}}"

camera-controls
auto-rotate
loading="eager"
reveal="auto"
shadow-intensity="1"
environment-image="neutral"
style="width:100%;height:500px;">
</model-viewer>




<div class="buttons">

<button id="ar-btn" class="ar-btn">
View In AR
</button>

<a href="{{ route('foods') }}">
<button class="ar-btn">
View All
</button>
</a>

<button id="menu-btn">
☰
</button>

</div>

        </div>

        <!-- Desktop Description -->

        <div class="description desktop-description">

            <h2>Description</h2>

        <p>
            Fresh crispy chicken burger
            with cheese, lettuce and
            special sauce.
        </p>

        <h3>Price</h3>

        <p>Rs.500</p>

        <h3>Ingredients</h3>

        <ul>


            <li>🍗 Chicken</li>
            <li>🧀 Cheese</li>
            <li>🥬 Lettuce</li>
            <li>🌶 Sauce</li>

        </ul>







        <div class="recommendations">

            <h2>Recommended Foods</h2>

            <div class="rec-grid">

                <a href="{{ route('tikka.3d') }}" class="rec-card">
                    <img style="height: 190px; width: 190px;" src="{{ asset('website/images/tickaa.png')}}" alt="">
                    <!-- <model-viewer src="../models/tikka 3D model.glb" auto-rotate camera-controls>
                    </model-viewer> -->
                    <p>Tikka</p>
                </a>

                <a href="{{ route('boti_roll.3d') }}" class="rec-card">
                    <img style="height: 190px; width: 190px;" src="{{ asset('website/images/boti roll image.jpg')}}" alt="">
                    <!-- <model-viewer src="../models/fried chicken 3d model.glb" auto-rotate camera-controls>
                    </model-viewer> -->
                    <p>Boti Roll</p>
                </a>

            </div>

        </div>




        </div>

    </div>


    <!-- FAKE AR MODE -->
    <div id="fake-ar" class="fake-ar hidden">

        <div class="ar-topbar">
            <button id="close-ar">✖ Exit</button>
        </div>

        <model-viewer src="{{ asset('website/models/burger2.glb')}}" camera-controls auto-rotate style="width:100%;height:100%;"
            environment-image="neutral" shadow-intensity="1">
        </model-viewer>

    </div>

    <!-- Mobile Sidebar -->

    <div id="sidebar">

        <span id="close-btn">✖</span>

        <h2>Description</h2>

        <p>
            Fresh crispy chicken burger
            with cheese, lettuce and
            special sauce.
        </p>

        <h3>Price</h3>

        <p>Rs.500</p>

        <h3>Ingredients</h3>

        <ul>


            <li>🍗 Chicken</li>
            <li>🧀 Cheese</li>
            <li>🥬 Lettuce</li>
            <li>🌶 Sauce</li>

        </ul>







        <div class="recommendations">

            <h2>Recommended Foods</h2>

            <div class="rec-grid">

                <a href="{{ route('tikka.3d') }}" class="rec-card">
                    <img  src="{{ asset('website/images/tickaa.png')}}" alt="">
                    <!-- <model-viewer src="../models/tikka 3D model.glb" auto-rotate camera-controls>
                    </model-viewer> -->
                    <p>Tikka</p>
                </a>

                <a href="{{ route('boti_roll.3d') }}" class="rec-card">
                    <img  src="{{ asset('website/images/boti roll image.jpg')}}" alt="">
                    <!-- <model-viewer src="../models/fried chicken 3d model.glb" auto-rotate camera-controls>
                    </model-viewer> -->
                    <p>Boti Roll</p>
                </a>

            </div>

        </div>







    </div>

    <script src="{{ asset('website/js/main.js')}}"></script>



    <script>
const loginBtn = document.querySelector(".nav-btn");

if (loginBtn) {

    loginBtn.addEventListener("click", function () {

        fetch("/save-previous-page", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                previous_page: window.location.pathname
            })
        });

    });

}
</script>

</body>

</html>