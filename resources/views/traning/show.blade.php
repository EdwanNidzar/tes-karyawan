@extends('welcome')

@section('content')
  <div class="container mt-4">
    <div class="card">
      <div class="card-header">
        User Traning Details
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ $traning->user->name }}</h5>
        <p class="card-text"><strong>Status:</strong> {{ $traning->nama_traning }}</p>
        <p class="card-text"><strong>Tanggal Mulai:</strong> {{ $traning->tanggal_mulai }}</p>       
        <p class="card-text"><strong>Tanggal Selesai:</strong> {{ $traning->tanggal_selesai }}</p>

        <a href="{{ route('traning.index') }}" class="btn btn-primary">Back to traning</a>
      </div>
    </div>
  </div>
@endsection
