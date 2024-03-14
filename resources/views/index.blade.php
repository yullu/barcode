@extends('layout.app')
@section('main-content')
        <h2 class="pt-4 mb-4">List of Products</h2>
        <hr>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="pb-2 float-end">
            <a href="product/create" class="btn btn-success">New Post</a>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <td scope="col">ID</td>
                <td scope="col">Title</td>
                <td scope="col">Price</td>
                <td scope="col">Barcode</td>
                <td scope="col">Description</td>
            </tr>
            </thead>
            <tbody>
            @foreach($product as $products)
            <tr>
                <td>{{ $products->id }}</td>
                <td>{{ $products->title }}</td>
                <td>{{ $products->price }}</td>
                <td>{!! DNS1D::getBarcodeHTML($products->product_code, 'PHARMA',2,50); !!}
                P - {{ $products->product_code }}
                </td>
                <td>{{ $products->description }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    {{ $product->links() }}
@endsection
