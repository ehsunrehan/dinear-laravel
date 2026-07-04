@extends('admin.layouts.app')

@section('title','Edit Food')

@section('page-title','Edit Food')

@section('content')

<div class="card border-0 shadow">

<div class="card-body p-4">

<form action="{{ route('food.update',$food->id) }}"
method="POST"
enctype="multipart/form-data">

@csrf
@method('PUT')

<div class="row">

<div class="col-md-6 mb-3">

<label class="form-label">Food Name</label>

<input
type="text"
name="name"
value="{{ $food->name }}"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label class="form-label">Price</label>

<input
type="number"
name="price"
value="{{ $food->price }}"
class="form-control">

</div>

<div class="col-12 mb-3">

<label class="form-label">Description</label>

<textarea
name="description"
rows="4"
class="form-control">{{ $food->description }}</textarea>

</div>

<div class="col-12 mb-3">

<label class="form-label">Ingredients</label>

<textarea
name="ingredients"
rows="3"
class="form-control">{{ $food->ingredients }}</textarea>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">Current Image</label>

<br>

@if($food->image)

<img src="{{ asset('food/images/'.$food->image) }}"
style="width:120px;height:120px;object-fit:cover;border-radius:12px;">

@endif

<input
type="file"
name="image"
class="form-control mt-2">

</div>

<div class="col-md-6 mb-3">

<label class="form-label">Current 3D Model</label>

@if($food->model)

<p class="mt-2 text-success">

{{ $food->model }}

</p>

@endif

<input
type="file"
name="model"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Recommended Food

</label>

<select
name="recommended_food_id"
class="form-select">

<option value="">None</option>

@foreach($foods as $item)

<option
value="{{ $item->id }}"
{{ $food->recommended_food_id==$item->id ? 'selected' : '' }}>

{{ $item->name }}

</option>

@endforeach

</select>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Status

</label>

<select
name="status"
class="form-select">

<option value="1" {{ $food->status ? 'selected':'' }}>

Active

</option>

<option value="0" {{ !$food->status ? 'selected':'' }}>

Inactive

</option>

</select>

</div>

<div class="col-12 mt-3">

<a href="{{ route('food.index') }}"
class="btn btn-secondary">

Back

</a>

<button
class="btn btn-warning text-white">

Update Food

</button>

</div>

</div>

</form>

</div>

</div>

@endsection