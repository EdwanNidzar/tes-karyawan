@extends('welcome')

@section('content')
  <div class="container">
    <a href="{{ route('traning.create') }}" class="mt-4 mb-4 btn btn-primary">tambah traning</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>Nama User</td>
          <td>Nama Traning</td>
          <td>Tanggal Mulai</td>
          <td>Tanggal Selesai</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($tranings as $t)
          <tr>
            <td>{{ $t->user->name }}</td>
            <td>{{ $t->nama_traning }}</td>
            <td>{{ $t->tanggal_mulai }}</td>
            <td>{{ $t->tanggal_selesai }}</td>
            <td class="d-flex">
              <a href="{{ route('traning.edit', $t->id) }}" class="btn btn-secondary">edit</a>
              <a href="{{ route('traning.show', $t->id) }}" class="btn btn-light">show</a>
              <form action="{{ route('traning.destroy', $t->id) }}" method="POST">
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
