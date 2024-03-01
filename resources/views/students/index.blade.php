@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Students</h2>
                <a href="{{ route('students.create') }}" class="btn btn-primary">Tambah Student</a>
                <br><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->profile->address }}</td>
                                <td>{{ $student->profile->phone_number }}</td>
                                <td>
                                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection