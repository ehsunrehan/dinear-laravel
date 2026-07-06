@extends('restaurant.layouts.app')

@section('title','Dashboard')

@section('content')

@php

$hour = now()->format('H');

if($hour >= 1 && $hour < 8){

    $greeting = "☀ Good Morning";

    $message = "Let's make today productive.";

}
elseif($hour >= 8 && $hour < 13){

    $greeting = "🌤 Good Afternoon";

    $message = "Hope your restaurant is having a great day.";

}
elseif($hour >= 13 && $hour < 17){

    $greeting = "🌇 Good Evening";

    $message = "Let's finish today's work successfully.";

}
else{

    $greeting = "🌙 Good Night";

    $message = "Time to relax after a productive day.";

}

@endphp



<div class="welcome-box">

    <div>

        <span class="greeting">

            {{ $greeting }},

            {{ Auth::user()->name }}

        </span>

        <h1>

            Restaurant Dashboard

        </h1>

        <p>

            {{ $message }}

        </p>

    </div>

</div>
<div class="dashboard-grid">

    <div class="dashboard-card">

        <div class="card-icon">

            🍔

        </div>

        <div>

            <h2>

                0

            </h2>

            <p>

                Total Foods

            </p>

            <div class="progress-line">
                <span style="width:85%"></span>
            </div>

        </div>

    </div>

    <div class="dashboard-card">

        <div class="card-icon">

            📩

        </div>

        <div>

            <h2>

                0

            </h2>

            <p>

                Pending Requests

            </p>
            <div class="progress-line">
                <span style="width:35%"></span>
            </div>

        </div>

    </div>

    <div class="dashboard-card">

        <div class="card-icon">

            💰

        </div>

        <div>

            <h2>

                $0

            </h2>

            <p>

                Payments

            </p>
            <div class="progress-line">
                <span style="width:60%"></span>
            </div>

        </div>

    </div>

    <div class="dashboard-card">

        <div class="card-icon">

            ⚙️

        </div>

        <div>

            <h2>

                0

            </h2>

            <p>

                Working

            </p>
            <div class="progress-line">
                <span style="width:20%"></span>
            </div>

        </div>

    </div>

    <div class="dashboard-card">

        <div class="card-icon">

            ✅

        </div>

        <div>

            <h2>

                0

            </h2>

            <p>

                Completed

            </p>
            <div class="progress-line">
                <span style="width:90%"></span>
            </div>

        </div>

    </div>

</div>

@endsection