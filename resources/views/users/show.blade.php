@extends('welcome')

@section('content')
  <div class="container mt-4">
    <div class="card">
      <div class="card-header">
        User Details
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ $user->name }}</h5>
        <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>

        <a href="{{ route('users.index') }}" class="btn btn-primary">Back to Users</a>
      </div>
    </div>
  </div>
@endsection
