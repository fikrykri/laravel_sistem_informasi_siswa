@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
      <h3>Edit User</h3>
    </div>
    <div class="card-body">
      <a href="{{ route('users.index') }}" class="btn btn-primary">Kembali</a>
      <form action="{{ route('users.update', $users->id) }}" method="post">
        @csrf
        @method('PUT')
        <ul class="list-group">
          Id Siswa <small>(Opsional)</small><input type="number" name="siswa_id" value="{{ $users->siswa_id }}">
          Nama <input type="text" name="nama" value="{{ $users->name }}" required>
          Role <input type="text" name="role" value="{{ $users->role }}" required>
          Email <input type="email" name="email" value="{{ $users->email }}" required>
          New Password <input type="password" name="password" required>
        </ul>
        <input type="submit" value="Simpan Data" class="btn btn-success">
      </form>
    </div>
  </div>
</div>
@endsection