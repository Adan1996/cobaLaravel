@extends('layout/main')

@section('title', 'Student List')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="my-3">Students List</h1>

            <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>

            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <ul class="list-group">
                @foreach ( $students as $std )
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $std->nama }}
                    <a href="/students/{{ $std->id }}" class="badge badge-info">detail</a>
                </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection