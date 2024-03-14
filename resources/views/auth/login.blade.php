@extends('layout.app')
@section('main-content')
        <div class="row justify-content-md-center">
            <div class="col-md-5">
                <div class="card px-5 py-5 mt-3 shadow">
                    <h3 class="text-center">Login</h3>
                    <hr>
                    @if(session('status'))
                        <div class="alert alert-danger">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label>Email Address</label>
                            <input type="email" class="form-control mb-3" name="email">
                            @error('email')
                            <div style="color: #FF0000;">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" class="form-control mb-3" name="password">
                            @error('password')
                            <div style="color: #FF0000;">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Login</button>
                        </div>
                        <p></p>
                    </form>
                </div>
            </div>
        </div>
@endsection
