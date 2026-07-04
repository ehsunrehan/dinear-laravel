@extends('admin.layouts.app')

@section('title','Add Food')

@section('page-title','Add Food')

@section('content')

<div class="card border-0 shadow">

<div class="card-body p-4">

<form action="{{ route('food.store') }}"
method="POST"
enctype="multipart/form-data">

@csrf

<div class="row">

<div class="col-md-6 mb-3">

<label class="form-label">

Food Name

</label>

<input
type="text"
name="name"
class="form-control"
required>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Price

</label>

<input
type="number"
name="price"
class="form-control"
required>

</div>

<div class="col-md-12 mb-3">

<label class="form-label">

Description

</label>

<textarea
name="description"
rows="4"
class="form-control"></textarea>

</div>

<div class="col-md-12 mb-3">

<label class="form-label">

Ingredients

</label>

<textarea
name="ingredients"
rows="3"
class="form-control"></textarea>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Food Image

</label>

<input
type="file"
name="image"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

3D Model (.glb)

</label>

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

<option value="">

None

</option>

@foreach($food as $item)

<option value="{{ $item->id }}">

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

<option value="1">

Active

</option>

<option value="0">

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

Save Food

</button>

</div>

</div>

</form>

</div>

</div>

@endsection