@extends('layouts.app')
@section('content')

<div class="card">
        <div class="card-header">{{ isset($product)? 'Edit Product' : 'New Product' }}</div>

        <div class="card-body">
            @if(count($errors) > 0)
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ isset($product)? route('products.update',[$product->id])
                                        : route('products.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($product))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ isset($product)? $product->name : '' }}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" value="{{ isset($product)? $product->price : '' }}">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" cols="30" rows="10" class="form-control">{{ isset($product)? $product->description : '' }}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="form-control btn btn-success">
                        {{ isset($product)? 'Save Product' : 'Update Product' }}
                </button>
            </div>
            </form>

        </div>
    </div>


@endsection
