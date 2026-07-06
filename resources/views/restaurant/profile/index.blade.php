@extends('restaurant.layouts.app')

@section('title','My Profile')

@section('content')

<div class="profile-page">

    <div class="profile-card">

        <div class="profile-cover"></div>

        <div class="profile-avatar-large">

            {{ strtoupper(substr(Auth::user()->name,0,1)) }}

        </div>

        <h2>{{ Auth::user()->name }}</h2>

        <span class="profile-role">

            Restaurant Owner

        </span>

        <form>

            <div class="profile-grid">

                <div class="form-group">

                    <label>Name</label>

                    <input
                        type="text"
                        value="{{ Auth::user()->name }}"
                        readonly>

                </div>

                <div class="form-group">

                    <label>Email</label>

                    <input
                        type="email"
                        value="{{ Auth::user()->email }}"
                        readonly>

                </div>

                <div class="form-group">

                    <label>Phone</label>

                    <input
                        type="text"
                        placeholder="Coming Soon"
                        readonly>

                </div>

                <div class="form-group">

                    <label>Restaurant Name</label>

                    <input
                        type="text"
                        placeholder="Coming Soon"
                        readonly>

                </div>

                <div class="form-group">

                    <label>Joined</label>

                    <input
                        type="text"
                        value="{{ Auth::user()->created_at->format('d M Y') }}"
                        readonly>

                </div>

                <div class="form-group">

                    <label>Role</label>

                    <input
                        type="text"
                        value="Restaurant Owner"
                        readonly>

                </div>

            </div>

            <button
                type="button"
                class="coming-btn">

                Edit Profile (Coming Soon)

            </button>

        </form>

    </div>

</div>

@endsection