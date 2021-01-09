@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
      <h3>Tambah User</h3>
    </div>
    <div class="card-body">
      <a href="{{ route('users.index') }}" class="btn btn-primary">Kembali</a>
      <form action="{{ route('users.store') }}" method="post">
        @csrf
        <ul class="list-group">
          Id Siswa <small>(Opsional)</small><input type="number" name="siswa_id">
          Nama <input type="text" name="nama" required>
          Role <input type="text" name="role" required>
          Email <input type="email" name="email" required>
          Password <input type="password" name="password" required>
        </ul>
        <input type="submit" value="Simpan Data" class="btn btn-success">
      </form>
    </div>
  </div>
</div>
@endsection