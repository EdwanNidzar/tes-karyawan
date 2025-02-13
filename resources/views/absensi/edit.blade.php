@extends('welcome')

@section('content')
  <div class="container mt-4">
    <form action="{{ route('absensis.update', $absensi->id) }}" class="form-action" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <select name="user_id" id="user_id" class="form-control">
          <option value="">Pilih User</option>
          @foreach ($users as $user)
            <option value="{{ $user->id }}" {{ $user->id == $absensi->user_id ? 'selected' : '' }}>{{ $user->name }}
            </option>
          @endforeach
        </select>
        @error('name')
          <div class="alert alert-danger mt-2">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" name="tanggal" value="{{ $absensi->tanggal }}">
        @error('tanggal')
          <div class="alert alert-danger mt-2">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="status" class="form-label">Status Kehadiran</label>
        <select name="status" id="status" class="form-control">
          <option value="">Pilih Status</option>
          <option value="hadir" {{ $absensi->status == 'hadir' ? 'selected' : '' }}>Hadir</option>
          <option value="izin" {{ $absensi->status == 'izin' ? 'selected' : '' }}>Izin</option>
          <option value="sakit" {{ $absensi->status == 'sakit' ? 'selected' : '' }}>Sakit</option>
          <option value="alpha" {{ $absensi->status == 'alpha' ? 'selected' : '' }}>Alpha</option>
          <option value="libur" {{ $absensi->status == 'libur' ? 'selected' : '' }}>Libur</option>
          <option value="terlambat" {{ $absensi->status == 'terlambat' ? 'selected' : '' }}>Terlambat</option>
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
