@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
  <h1>Portal Informasi Siswa</h1>
  <p>Selamat datang di Portal Informasi Siswa SMA Contoh!</p>
  <a href="{{ url('/info-kegiatan') }}" class="btn btn-dark">Info Kegiatan</a>
  @can('isAdmin')
  <a href="{{ route('siswa.index') }}" class="btn btn-primary">Data Siswa</a>
  <a href="{{ route('users.index') }}" class="btn btn-warning">Data User</a>
  @endcan
</div>
@endsection