@extends('layouts.app')
@section('konten')
<div class="row">
    @if(session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    <form action="{{ route('login.action') }}" method="POST">
        @csrf
            <div class="col-md-6 mb-4">
              <div class="form-outline">
                <input type="text" id="form3Example1" class="form-control" name="name" value="{{ old('name') }}"/>
                <label class="form-label" for="form3Example3">Name</label>
                @error('name')
            <label for="" class="text-danger">{{ $message }}</label>
            @enderror
              </div>
            </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control" name="email" value="{{ old('email') }}"/>
            <label class="form-label" for="form3Example3">Email address</label>
            @error('email')
            <label for="" class="text-danger">{{ $message }}</label>
            @enderror
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form3Example4" class="form-control" name="password" required autocomplete="new-password" value="{{ old('password')}}" required autocomplete="email">
            <label class="form-label" for="form3Example4">Password</label>
            @error('password')
            <label for="" class="text-danger">{{ $message }}</label>
            @enderror
          </div>

          <!-- Checkbox Remember Me -->
          <div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">Remember Me</label>
            </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">SignIn
          </button>
@endsection
