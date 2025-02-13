@extends('welcome')

@section('content')
  <div class="container mt-4">
    <div class="card">
      <div class="card-header">
        User Absensi Details
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ $absensi->user->name }}</h5>
        <p class="card-text"><strong>Tanggal:</strong> {{ $absensi->tanggal }}</p>
        <p class="card-text"><strong>Status:</strong> {{ $absensi->status }}</p>


        <a href="{{ route('absensis.index') }}" class="btn btn-primary">Back to Absensi</a>
      </div>
    </div>
  </div>
@endsection
