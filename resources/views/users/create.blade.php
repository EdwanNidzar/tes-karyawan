@extends('welcome')

@section('content')
  <div class="container mt-4">
    <form action="{{ route('users.store') }}" class="form-action" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
        @error('name')
          <div class="alert alert-danger mt-2">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
        @error('email')
        <div class="alert alert-danger mt-2">
          {{ $message }}
        </div>
      @enderror
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        @error('password')
        <div class="alert alert-danger mt-2">
          {{ $message }}
        </div>
      @enderror
      </div>
      <div class="mb-3">
        <label for="password_confirmation" class="form-label">Password Confirmation</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        @error('password_confirmation')
        <div class="alert alert-danger mt-2">
          {{ $message }}
        </div>
      @enderror
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection
