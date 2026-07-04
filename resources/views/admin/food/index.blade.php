    @extends('admin.layouts.app')


    @section('title','All Food')

    @section('page-title','All Food')

    @section('content')




    <div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

    <div>

    <h2 class="fw-bold mb-1">

    Food Management

    </h2>

    <p class="text-muted">

    Manage all foods from here.

    </p>

    </div>

    <a href="{{ route('food.create') }}" class="btn btn-orange btn-lg">

    <i class="fa fa-plus"></i>

    Add Food

    </a>

    </div>

    @if(session('success'))

    <div class="alert alert-success">

    {{ session('success') }}

    </div>

    @endif

    <div class="card">

    <div class="card-body">

    <div class="table-responsive">

    <table class="table table-hover align-middle">

    <thead>

    <tr>

    <th>ID</th>

    <th>Image</th>

    <th>Name</th>

    <th>Price</th>

    <th>Status</th>

    <th width="180">

    Action

    </th>

    </tr>

    </thead>

    <tbody>

    @forelse($food as $item)

    <tr>

    <td>

    {{ $item->id }}

    </td>

    <td>

    @if($item->image)

    <img src="{{ asset('food/images/'.$item->image) }}"
        style="width:80px;height:80px;object-fit:cover;border-radius:10px;">

    @else

    <span class="text-muted">

    No Image

    </span>

    @endif

    </td>

    <td>

    <strong>

    {{ $item->name }}

    </strong>

    </td>

    <td>

    Rs. {{ $item->price }}

    </td>

    <td>

    @if($item->status)

<span class="food-status-active">
    Active
</span>

@else

<span class="food-status-inactive">
    Inactive
</span>

@endif

    </td>

    <td>

    <a href="{{ route('food.edit',$item->id) }}" class="btn btn-warning btn-sm">

    <i class="fa fa-edit"></i>

    </a>

    <form action="{{ route('food.destroy',$item->id) }}"
        method="POST"
        style="display:inline;">

        @csrf
        @method('DELETE')

        <button
            type="submit"
            class="btn btn-danger btn-sm"
            onclick="return confirm('Are you sure you want to delete this food?')">

            <i class="fa fa-trash"></i>

        </button>

    </form>

    </td>

    </tr>

    @empty

    <tr>

    <td colspan="6" class="text-center py-5">

    <h5>

    No Food Added Yet

    </h5>

    <p class="text-muted">

    Click "Add Food" to create your first food.

    </p>

    </td>

    </tr>

    @endforelse

    </tbody>

    </table>

    </div>

    </div>

    </div>

    </div>



    @endsection
