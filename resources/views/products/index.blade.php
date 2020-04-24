@extends('layouts.app')
@section('content')

    <table class="table table-hover">
        <thead>
            <th>Name</th>
            <th>Price</th>
            <th></th>
            <th colspan="2" class="text-center">Action</th>
        </thead>
        <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a href="/products/{{$product->id}}"><i class="far fa-eye"></i> View</a>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('products.edit', [$product->id]) }}" class="btn btn-success btn-sm mr-2"><i class="far fa-edit"></i> Edit</a>
                        </td>
                        <td class="text-center">
                            <form action="{{ route('products.destroy', [$product->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
                            </form>
                        </td>
                        
                    </tr>
                @endforeach
        </tbody>
    
    </table>
       
@endsection