@extends('layouts.app')
@section('content')
<h2>Jurusan dengan Mahasiswa Terbanyak</h2>

@if($topMajor)
<div class="alert alert-info">
    <strong>Terbanyak:</strong> {{ $topMajor->name }} ({{ $topMajor->students_count }} mahasiswa)
</div>
@endif

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Jurusan</th>
                <th>Jumlah Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($majors as $i => $major)
            <tr @if($loop->first) class="table-success" @endif>
                <td>{{ $i + 1 }}</td>
                <td>{{ $major->name }}</td>
                <td>{{ $major->students_count }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<a href="{{ route('students.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
