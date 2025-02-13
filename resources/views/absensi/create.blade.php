@extends('welcome')

@section('content')
  <div class="container mt-4">
    <form action="{{ route('absensis.store') }}" class="form-action" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <select name="user_id" id="user_id" class="form-control">
          <option value="">Pilih User</option>
          @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
          @endforeach
        </select>
        @error('name')
          <div class="alert alert-danger mt-2">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">date</label>
        <input type="date" class="form-control" id="date" name="tanggal">
        @error('tanggal')
          <div class="alert alert-danger mt-2">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="status" class="form-label">status kehadiaran</label>
        <select name="status" id="status" class="form-control">
            <option value="">Pilih</option>
            <option value="hadir">Hadir</option>
            <option value="izin">Izin</option>
            <option value="sakit">Sakit</option>
            <option value="alpha">Alpha</option>
            <option value="libur">Libur</option>
            <option value="terlambat">Terlambat</option>
        </select>
        @error('status')
          <div class="alert alert-danger mt-2">
            {{ $message }}
          </div>
        @enderror
      </div>
      

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection
