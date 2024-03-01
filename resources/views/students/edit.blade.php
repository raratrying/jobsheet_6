<!-- resources/views/students/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Student</h2>
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" name="name" class="form-control" value="{{ $student->name }}">
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat:</label>
                        <input type="text" name="address" class="form-control" value="{{ $student->profile->address }}">
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Nomor Telepon:</label>
                        <input type="text" name="phone_number" class="form-control" value="{{ $student->profile->phone_number }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection