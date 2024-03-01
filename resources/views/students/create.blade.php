<!-- resources/views/students/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Tambah Data</h2>
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat:</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Nomor Telepon:</label>
                        <input type="text" name="phone_number" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection