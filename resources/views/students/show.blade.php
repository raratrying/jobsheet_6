<!-- resources/views/students/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Detail Student</h2>
                <p><strong>Nama:</strong> {{ $student->name }}</p>
                <p><strong>Alamat:</strong> {{ $student->profile->address }}</p>
                <p><strong>Nomor Telepon:</strong> {{ $student->profile->phone_number }}</p>
                <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection