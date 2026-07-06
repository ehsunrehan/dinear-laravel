@extends('restaurant.layouts.app')

@section('title','Dashboard')

@section('content')

<div class="dashboard-placeholder">

    <h1>Welcome, {{ Auth::user()->name }}</h1>

    <p>

        Restaurant Dashboard is ready.

    </p>

</div>

@endsection