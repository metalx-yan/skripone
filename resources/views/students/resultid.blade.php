@extends('main')

@section('content')
    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Data Hasil Pendaftaran</li>
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
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Persyaratan Keuangan</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h2>1. Biaya Pendaftaran</h2>
                        </div>
                        <div class="col-md-6">
                            <h2>RP. GRATIS</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h2>2. Uang gedung</h2>
                        </div>
                        <div class="col-md-6">
                            <h2>RP. GRATIS</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h2>3. MPLS</h2>
                        </div>
                        <div class="col-md-6">
                            <h2>RP. 100.000,-</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h2>4. Sarana dan Prasarana</h2>
                        </div>
                        <div class="col-md-6">
                            <h2>RP. 550.000,-</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h2>5. Uang Praktek 1 Tahun</h2>
                        </div>
                        <div class="col-md-6">
                            <h2>RP. 420.000,-</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h2>6. SPP + Internet</h2>
                        </div>
                        <div class="col-md-6">
                            <h2>RP. 185.000,-</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Jumlah</h2>
                        </div>
                        <div class="col-md-6">
                            <h2>RP. 1.255.000,-</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h2 style="font-weight: bold;">Discount Grade</h2>
                        </div>
                        <div class="col-md-6">
                            @foreach ($soal as $value)
                                @if (($value->answer * 100) / $value->jumlah > 85)
                                    <h2 style="font-weight: bold;">(A) RP. 500.000,-</h2>
                                @elseif(($value->answer * 100) / $value->jumlah <= 85 && ($value->answer * 100) / $value->jumlah > 70)
                                    <h2 style="font-weight: bold;">(B) RP. 300.000,-</h2>
                                @else
                                    <h2 style="font-weight: bold;">(C) RP. 100.000,-</h2>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Total Jumlah</h2>
                        </div>
                        <div class="col-md-6">
                            @foreach ($soal as $value)
                                @if (($value->answer * 100) / $value->jumlah > 85)
                                    <h2>RP. {{ str_replace(',','.',number_format(1255000-500000)) }},-</h2>
                                @elseif(($value->answer * 100) / $value->jumlah <= 85 && ($value->answer * 100) / $value->jumlah > 70)
                                    <h2>RP. {{ str_replace(',','.',number_format(1255000-300000)) }},-</h2>
                                @else
                                    <h2>RP. {{ str_replace(',','.',number_format(1255000-100000)) }},-</h2>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Catatan : </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2>1. Buat pendaftaran & penyerahan data diri gratis tanpa dipungut biaya</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2>2. Biaya diatas dapat dicicil setelah siswa/i masuk sekolah di SMK Angkasa</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
