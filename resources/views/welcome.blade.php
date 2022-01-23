@extends('layout')
@section('content')
<div class="row justify-content-between">
    @if(session('success'))
    <div class="alert alert-dismissible alert-success">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <h4 class="alert-heading">Success!</h4>
        <p class="mb-0">New product was added successfully!</p>
    </div>
    @endif
    <div class="col-md-5">
        <h3>Add a Product</h3>
        <form action="/add-product" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title" class="mt-4" >Product Title:</label>
                <input 
                    type="text" 
                    class="form-control @error('title') is-invalid @enderror " 
                    name="title" 
                    placeholder="Enter product title"
                >
                <span class="text-danger">
                    @error('title')
                        {{$message}}
                    @enderror
                </span>

            </div>
            <div class="form-group">
                <label for="price" class="mt-4">Product Price:</label>
                <input 
                    type="number"
                    step="any"
                    min="1" 
                    class="form-control @error('price') is-invalid @enderror " 
                    name="price" 
                    placeholder="Enter product price"
                >
                <span class="text-danger">
                    @error('price')
                        {{$message}}
                    @enderror
                </span>

            </div>
            <div class="form-group">
                <label for="files" class="form-label mt-4">Upload Product Images:</label>
                <input 
                    type="file" 
                    name="images[]"
                    class="form-control" 
                    accept="image/*"
                    multiple
                >
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Save Product</button>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <h3>Products</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product Title</th>
                    <th>Price</th>
                    <th>Total Images</th>
                    <th>View Image</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp
                @forelse ($products as $product)
                    <tr>
                        <td>{{$i++;}}</td>
                        <td>{{$product->title}}</td>
                        <td>${{$product->price}}</td>
                        <td>{{$product->images->count()}}</td>
                        <td>
                            <a href={{route('product.images',$product->id)}} class="btn btn-outline-dark">View</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No products yet!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection