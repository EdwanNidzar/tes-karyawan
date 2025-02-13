@extends('welcome')

@section('content')
  <div class="container">
    <a href="{{ route('absensis.create') }}" class="mt-4 mb-4 btn btn-primary">tambah absensi</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>Nama</td>
          <td>Tanggal</td>
          <td>Status</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($absensis as $absensi)
          <tr>
            <td>{{ $absensi->user->name }}</td>
            <td>{{ $absensi->tanggal }}</td>
            <td>{{ $absensi->status }}</td>
            <td class="d-flex">
              <a href="{{ route('absensis.edit', $absensi->id) }}" class="btn btn-secondary">edit</a>
              <a href="{{ route('absensis.show', $absensi->id) }}" class="btn btn-light">show</a>
              <form action="{{ route('absensis.destroy', $absensi->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                  onclick="return confirm('yakin ingin hapus')">delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>

    </table>
  </div>
@endsection
