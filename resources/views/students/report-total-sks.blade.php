@extends('layouts.app')
@section('content')
<h2>Total SKS Setiap Mahasiswa</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Total SKS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $i => $student)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $student->nim }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->major->name ?? '-' }}</td>
                <td>{{ $student->subjects_sum_sks ?? 0 }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<a href="{{ route('students.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
