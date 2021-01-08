@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
      <h3>Manajemen Users</h3>
    </div>

    <div class="card-body">
      <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah Data User</a>
      <table class="table table-bordered table-striped">
        <tr>
          <th>Nama</th>
          <th>Role</th>
          <th>email</th>
          <th>Aksi</th>
        </tr>
        @foreach($users as $s)
        <tr>
          <td>{{ $s->name }}</td>
          <td>{{ $s->role }}</td>
          <td>{{ $s->email }}</td>
          <td>
            <ul class="nav">
              <a href="{{ route('users.edit', $s->id) }}" class="btn btn-primary mr-2">Edit</a>
              <form action="{{ route('users.destroy', $s->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-warning" type="submit">Delete</button>
              </form>
            </ul>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection