@extends('layout.app')
@section('main-content')
    <div class="row justify-content-md-center">
        <div class="col-md-9">
            <div class="card px-5 py-5 mt-3 shadow">
                <p></p>
                <form action="{{ route('product') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text" class="form-control mb-3" name="title">
                        @error('title')
                        <div style="color: #FF0000;">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Price</label>
                        <input type="number" class="form-control mb-3" name="price">
                        @error('price')
                        <div style="color: #FF0000;">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="description" class="form-control mb-3" cols="30" rows="5"></textarea>
                        @error('description')
                        <div style="color: #FF0000;">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    <p></p>
                </form>
            </div>
        </div>
    </div>
@endsection
