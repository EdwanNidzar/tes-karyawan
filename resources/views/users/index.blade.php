@extends('welcome')

@section('content')
  <div class="container">
    <a href="{{ route('users.create') }}" class="mt-4 mb-4 btn btn-primary">tambah user</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>NAMA</td>
          <td>Email</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="d-flex">
              <a href="{{ route('users.edit', $user->id) }}" class="btn btn-secondary">edit</a>
              <a href="{{ route('users.show', $user->id) }}" class="btn btn-light">show</a>
              <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin hapus')">delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
     
    </table>
  </div>
@endsection
