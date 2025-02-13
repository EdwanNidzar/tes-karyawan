@extends('welcome')

@section('content')
  <div class="container mt-4">
    <form action="{{ route('training.update', $traning->id) }}" class="form-action" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="user_id" class="form-label">Name</label>
        <select name="user_id" id="user_id" class="form-control">
          <option value="">Pilih User</option>
          @foreach ($users as $user)
            <option value="{{ $user->id }}" {{ $user->id == $traning->user_id ? 'selected' : '' }}>{{ $user->name }}
            </option>
          @endforeach
        </select>
        @error('user_id')
          <div class="alert alert-danger mt-2">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="nama_traning">Nama Traning</label>
        <input type="text" class="form-control" id="nama_traning" name="nama_traning"
          value="{{ $traning->nama_traning }}">
        @error('nama_traning')
          <div class="alert alert-danger mt-2">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
          value="{{ $traning->tanggal_mulai }}">
        @error('tanggal_mulai')
          <div class="alert alert-danger mt-2">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
        <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai"
          value="{{ $traning->tanggal_selesai }}">
        @error('tanggal_selesai')
          <div class="alert alert-danger mt-2">
            {{ $message }}
          </div>
        @enderror
      </div>


      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection
