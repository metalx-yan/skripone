@extends('main') 

@section('content')
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Data Siswa</li>
            </ol>
        </div>
    </div>

    <div class="card">
        <div class="card-title">

        </div>
        @php
            $no = 1;
        @endphp
        <div class="card-body">
            <a href="{{ route('students.create') }}" class="btn btn-primary btn-sm">Tambah Student</a>
            <br>
            <br>
            <table class="table border" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Tanggal Lahir</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $value)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->tgllahir }}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-2">
                                    <a href="{{ route('students.edit', $value->id ) }}" class="btn btn-warning btn-sm">Edit</a>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <form action="{{ route('students.destroy', $value->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to Remove?');">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

@endsection