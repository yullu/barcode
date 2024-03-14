@extends('layout.app')
@section('main-content')
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card px-5 py-5 mt-3 shadow">
                <p><h3>Register</h3></p>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label>Names</label>
                        <input type="text" class="form-control mb-3" name="name">
                        @error('name')
                        <div style="color: #FF0000;">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
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
                        <label>Confirm Password</label>
                        <input type="password" class="form-control mb-3" name="confirm_password">

                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
                    <p></p>
                </form>
            </div>
        </div>
    </div>
@endsection

