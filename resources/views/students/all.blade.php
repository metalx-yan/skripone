@extends('main')

@section('links')
    
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@endsection

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
                <br>
                <div style="overflow-x: scroll">
                    <table class="table border" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Golongan Darah</th>
                                <th>Berat Badan</th>
                                <th>Tinggi Badan</th>
                                <th>Alamat</th>
                                <th>Kode Pos</th>
                                <th>Agama</th>
                                <th>Asal Sekolah</th>
                                <th>Alamat Sekolah</th>
                                <th>Tahun Lulus</th>
                                <th>No Ijazah</th>
                                <th>No Telp</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all as $value)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->placebirthday }}</td>
                                    <td>{{ $value->tgllahir }}</td>
                                    <td>{{ $value->jenkelamin }}</td>
                                    <td>{{ $value->goldarah }}</td>
                                    <td>{{ $value->berat }}</td>
                                    <td>{{ $value->tinggi }}</td>
                                    <td>{{ $value->address }}</td>
                                    <td>{{ $value->kodepos }}</td>
                                    <td>{{ $value->agama }}</td>
                                    <td>{{ $value->asalsekolah }}</td>
                                    <td>{{ $value->address_school }}</td>
                                    <td>{{ $value->thn_lulus }}</td>
                                    <td>{{ $value->no_ijazah }}</td>
                                    <td>{{ $value->no_telp }}</td>
                                    <td>{{ $value->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                     'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
@endsection
