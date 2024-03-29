@extends('main')

@section('content')
    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Edit Student</li>
                </ol>
            </div>
        </div>
        <form action="{{ route('student.update.id', $get->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="card" style="width: 65%;  margin: 0 auto; float: none;margin-bottom: 10px; ">
                <div class="card-title" style="text-align:center;margin-top:10px;background-color: chartreuse">
                    <h1>Biodata Siswa</h1>
                </div>
                <hr>
                <div class="card-body">
                    <div class="form-group">
                        <label class="control-label col-sm-6">Nama Siswa</label>
                        <div class="col-sm-12">
                            <input type="text" name="name"  value="{{ $get->name }}" 
                                class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('name', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Tempat Lahir</label>
                        <div class="col-sm-12">
                            <input type="text" name="placebirthday"  value="{{ $get->placebirthday }}"
                                class="form-control {{ $errors->has('placebirthday') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('placebirthday', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Tempat Lahir</label>
                        <div class="col-sm-12">
                            <input type="date" name="tgllahir"  value="{{ $get->tgllahir }}"
                                class="form-control {{ $errors->has('tgllahir') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('tgllahir', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Jenis Kelamin</label>
                        <div class="col-sm-12">
                            <select name="jenkelamin" id="" class="form-control">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="1" {{ $get->jenkelamin == 1 ? 'selected' : ''  }}>Perempuan</option>
                                <option value="0" {{ $get->jenkelamin == 0 ? 'selected' : ''  }}>Laki laki</option>
                            </select>
                            {!! $errors->first('tgllahir', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Golongan Darah</label>
                        <div class="col-sm-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="goldarah" {{ $get->goldarah == 'a' ? 'checked' : '' }} id="inlineRadio1"
                                    value="a">
                                <label class="form-check-label" for="inlineRadio1">A</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="goldarah" {{ $get->goldarah == 'b' ? 'checked' : '' }} id="inlineRadio2"
                                    value="b">
                                <label class="form-check-label" for="inlineRadio2">B</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="goldarah" {{ $get->goldarah == 'ab' ? 'checked' : '' }} id="inlineRadio3"
                                    value="ab">
                                <label class="form-check-label" for="inlineRadio3">AB</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="goldarah" {{ $get->goldarah == 'o' ? 'checked' : '' }} id="inlineRadio4"
                                    value="o">
                                <label class="form-check-label" for="inlineRadio4">O</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="goldarah" {{ $get->goldarah == '-' ? 'checked' : '' }} id="inlineRadio5"
                                    value="-">
                                <label class="form-check-label" for="inlineRadio5">Tidak Tahu</label>
                            </div>
                            {!! $errors->first('goldarah', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Berat Badan</label>
                        <div class="col-sm-12">
                            <input type="number" name="berat"  value="{{ $get->berat }}"
                                class="form-control {{ $errors->has('berat') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('berat', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Tinggi Badan</label>
                        <div class="col-sm-12">
                            <input type="number" name="tinggi"  value="{{ $get->tinggi }}"
                                class="form-control {{ $errors->has('tinggi') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('tinggi', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Alamat Lengkap</label>
                        <div class="col-sm-12">
                            <textarea name="address" style="resize: none;" id="" class="form-control" cols="30" rows="3"
                                required>{{ $get->address }}</textarea>
                            {!! $errors->first('address', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">NISN</label>
                        <div class="col-sm-12">
                            <input type="text" name="kodepos"  value="{{ $get->kodepos }}"
                                class="form-control {{ $errors->has('kodepos') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('kodepos', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Agama</label>
                        <div class="col-sm-12">
                            <select name="agama" id="" class="form-control">
                                <option value="">Pilih Agama</option>
                                <option value="islam" {{ $get->agama == 'islam' ? 'selected' : '' }}>Islam</option>
                                <option value="kristen" {{ $get->agama == 'kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="budha" {{ $get->agama == 'budha' ? 'selected' : '' }}>Budha</option>
                                <option value="konghucu" {{ $get->agama == 'konghucu' ? 'selected' : '' }}>Konghucu</option>
                            </select>
                            {!! $errors->first('tgllahir', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Asal Sekolah</label>
                        <div class="col-sm-12">
                            <input type="text" name="asalsekolah"  value="{{ $get->asalsekolah }}"
                                class="form-control {{ $errors->has('asalsekolah') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('asalsekolah', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Alamat Sekolah</label>
                        <div class="col-sm-12">
                            <textarea name="address_school"  style="resize: none;" id="" class="form-control" cols="30"
                                rows="3" required>{{ $get->address_school }}</textarea>
                            {!! $errors->first('address_school', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Tahun Lulus</label>
                        <div class="col-sm-12">
                            <select name="thn_lulus" id="" class="form-control">
                                <option value="">Pilih Tahun Lulus</option>
                                <option value="2022" {{ $get->thn_lulus == '2022' ? 'selected' : ''  }}>2022</option>
                                <option value="2021" {{ $get->thn_lulus == '2021' ? 'selected' : ''  }}>2021</option>
                                <option value="2020" {{ $get->thn_lulus == '2020' ? 'selected' : ''  }}>2020</option>
                                <option value="2019" {{ $get->thn_lulus == '2019' ? 'selected' : ''  }}>2019</option>
                            </select>
                            {!! $errors->first('thn_lulus', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">No Ijazah</label>
                        <div class="col-sm-12">
                            <input type="text" name="no_ijazah"  value="{{ $get->no_ijazah }}"
                                class="form-control {{ $errors->has('no_ijazah') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('no_ijazah', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">NIS</label>
                        <div class="col-sm-12">
                            <input type="text" name="no_telp"  value="{{ $get->no_telp }}"
                                class="form-control {{ $errors->has('no_telp') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('no_telp', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Email</label>
                        <div class="col-sm-12">
                            <input type="text" name="email"  value="{{ $get->email }}"
                                class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('email', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="container">
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <label class="control-label">Jurusan Pertama</label>

                                <select name="jurusan_pertama" id="" class="form-control">
                                    <option value="">Pilih Jurusan Petama</option>
                                    <option value="TEKNIK KENDARAN RINGAN (TERAKREDITASI A)" {{ $get->jurusan_pertama == 'TEKNIK KENDARAN RINGAN (TERAKREDITASI A)' ? 'selected' : '' }}>TEKNIK KENDARAN RINGAN (TERAKREDITASI A)</option>
                                    <option value="OTOMATISASI DAN TATA KELOLA PERKANTORAN (TERAKREDITASI B)" {{ $get->jurusan_pertama == 'OTOMATISASI DAN TATA KELOLA PERKANTORAN (TERAKREDITASI B)' ? 'selected' : '' }}>OTOMATISASI DAN TATA KELOLA PERKANTORAN (TERAKREDITASI B)</option>
                                    <option value="TEKNIK KOMPUTER DAN JARINGAN (TERAKREDITASI C)" {{ $get->jurusan_pertama == 'TEKNIK KOMPUTER DAN JARINGAN (TERAKREDITASI C)' ? 'selected' : '' }}>TEKNIK KOMPUTER DAN JARINGAN (TERAKREDITASI C)</option>
                                </select>
                                {!! $errors->first('jurusan_pertama', '<span class="invalid-feedback">:message</span>') !!}
                            </div>
                            <div class="col-sm-6">
                                <label class="control-label">Jurusan Kedua</label>
                                <select name="jurusan_kedua" id="" class="form-control">
                                    <option value="">Pilih Jurusan Kedua</option>
                                    <option value="TEKNIK KENDARAN RINGAN (TERAKREDITASI A)" {{ $get->jurusan_kedua == 'TEKNIK KENDARAN RINGAN (TERAKREDITASI A)' ? 'selected' : '' }}>TEKNIK KENDARAN RINGAN (TERAKREDITASI A)</option>
                                    <option value="OTOMATISASI DAN TATA KELOLA PERKANTORAN (TERAKREDITASI B)" {{ $get->jurusan_kedua == 'OTOMATISASI DAN TATA KELOLA PERKANTORAN (TERAKREDITASI B)' ? 'selected' : '' }}>OTOMATISASI DAN TATA KELOLA PERKANTORAN (TERAKREDITASI B)</option>
                                    <option value="TEKNIK KOMPUTER DAN JARINGAN (TERAKREDITASI C)" {{ $get->jurusan_kedua == 'TEKNIK KOMPUTER DAN JARINGAN (TERAKREDITASI C)' ? 'selected' : '' }}>TEKNIK KOMPUTER DAN JARINGAN (TERAKREDITASI C)</option>
                                </select>
                                {!! $errors->first('jurusan_kedua', '<span class="invalid-feedback">:message</span>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row form-group">
                            <div class="col-sm-3">
                                <label class="control-label">Ukuran Baju</label>
                                <input type="number" name="matematika" value="{{ $get->matematika }}" placeholder="Matematika"
                                    class="form-control {{ $errors->has('matematika') ? 'is-invalid' : '' }}" required>
                                {!! $errors->first('matematika', '<span class="invalid-feedback">:message</span>') !!}
                            </div>
                            <div class="col-sm-3">
                                <label class="control-label">Ukuran Baju</label>
                                <input type="number" name="inggris"  value="{{ $get->inggris }}" placeholder="Inggris"
                                    class="form-control {{ $errors->has('inggris') ? 'is-invalid' : '' }}" required>
                                {!! $errors->first('inggris', '<span class="invalid-feedback">:message</span>') !!}
                            </div>
                            <div class="col-sm-3">
                                <label class="control-label">Ukuran Baju</label>
                                <input type="number" name="biologi"  value="{{ $get->biologi }}" placeholder="Biologi"
                                    class="form-control {{ $errors->has('biologi') ? 'is-invalid' : '' }}" required>
                                {!! $errors->first('biologi', '<span class="invalid-feedback">:message</span>') !!}
                            </div>
                            <div class="col-sm-3">
                                <label class="control-label">Ukuran Baju</label>
                                <input type="number" name="ipa"  value="{{ $get->ipa }}" placeholder="IPA"
                                    class="form-control {{ $errors->has('ipa') ? 'is-invalid' : '' }}" required>
                                {!! $errors->first('ipa', '<span class="invalid-feedback">:message</span>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ------------------------------------------------------------------------------------------------------------------------------------------- --}}
            {{-- ------------------------------------------------------------------------------------------------------------------------------------------- --}}
            {{-- ------------------------------------------------------------------------------------------------------------------------------------------- --}}
            {{-- ------------------------------------------------------------------------------------------------------------------------------------------- --}}
            {{-- ------------------------------------------------------------------------------------------------------------------------------------------- --}}
            {{-- ------------------------------------------------------------------------------------------------------------------------------------------- --}}
            <div class="card" style="width: 65%;  margin: 0 auto; float: none;margin-bottom: 10px; ">
                <div class="card-title" style="text-align:center;margin-top:10px;background-color: chartreuse">
                    <h1>Biodata Orang Tua Siswa</h1>
                </div>
                <hr>
                <div class="card-body">
                    <div class="form-group">
                        <label class="control-label col-sm-6">Nama Ayah</label>
                        <div class="col-sm-12">
                            <input type="text" name="name_ayah"  value="{{ $get->name_ayah}}"
                                class="form-control {{ $errors->has('name_ayah') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('name_ayah', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Nama Ibu</label>
                        <div class="col-sm-12">
                            <input type="text" name="name_ibu"  value="{{ $get->name_ibu }}"
                                class="form-control {{ $errors->has('name_ibu') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('name_ibu', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">No Telp</label>
                        <div class="col-sm-12">
                            <input type="text" name="no_telp_orangtua"  value="{{ $get->no_telp_orangtua }}"
                                class="form-control {{ $errors->has('no_telp_orangtua') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('no_telp_orangtua', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Pekerjaan Ibu</label>
                        <div class="col-sm-12">
                            <input type="text" name="pekerjaan_ibu"  value="{{ $get->pekerjaan_ibu }}"
                                class="form-control {{ $errors->has('pekerjaan_ibu') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('pekerjaan_ibu', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Pekerjaan Ayah</label>
                        <div class="col-sm-12">
                            <input type="text" name="pekerjaan_ayah"  value="{{ $get->pekerjaan_ayah }}"
                                class="form-control {{ $errors->has('pekerjaan_ayah') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('pekerjaan_ayah', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Alamat Orang Tua</label>
                        <div class="col-sm-12">
                            <textarea name="alamat_orang_tua" style="resize: none;" id="" class="form-control" cols="30"
                                rows="3" required>{{ $get->alamat_orang_tua }}</textarea>
                            {!! $errors->first('alamat_orang_tua', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Agama</label>
                        <div class="col-sm-12">
                            <select name="agama_orangtua"  id="" class="form-control">
                                <option value="">Pilih Agama</option>
                                <option value="islam" {{ $get->agama_orangtua == 'islam' ? 'selected' : '' }}>Islam</option>
                                <option value="kristen" {{ $get->agama_orangtua == 'kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="budha" {{ $get->agama_orangtua == 'budha' ? 'selected' : '' }}>Budha</option>
                                <option value="konghucu" {{ $get->agama_orangtua == 'konghucu' ? 'selected' : '' }}>Konghucu</option>
                            </select>
                            {!! $errors->first('agama_orangtua', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                </div>
            </div>
            {{-- ------------------------------------------------------------------------------------------------------------------------------------------- --}}
            {{-- ------------------------------------------------------------------------------------------------------------------------------------------- --}}
            {{-- ------------------------------------------------------------------------------------------------------------------------------------------- --}}
            {{-- ------------------------------------------------------------------------------------------------------------------------------------------- --}}
            {{-- ------------------------------------------------------------------------------------------------------------------------------------------- --}}
            {{-- ------------------------------------------------------------------------------------------------------------------------------------------- --}}
            <div class="card" style="width: 65%;  margin: 0 auto; float: none;margin-bottom: 10px; ">
                <div class="card-title" style="text-align:center;margin-top:10px;background-color: chartreuse">
                    <h1>Formulir Wali Siswa</h1>
                </div>
                <hr>
                <div class="card-body">
                    <div class="form-group">
                        <label class="control-label col-sm-6">Nama Wali</label>
                        <div class="col-sm-12">
                            <input type="text" name="name_wali"  value="{{ $get->name_wali }}" 
                                class="form-control {{ $errors->has('name_wali') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('name_wali', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">No Telp</label>
                        <div class="col-sm-12">
                            <input type="text" name="no_telp_wali"  value="{{ $get->no_telp_wali }}"
                                class="form-control {{ $errors->has('no_telp_wali') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('no_telp_wali', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Pekerjaan Wali</label>
                        <div class="col-sm-12">
                            <input type="text" name="pekerjaan_wali"  value="{{ $get->pekerjaan_wali }}"
                                class="form-control {{ $errors->has('pekerjaan_wali') ? 'is-invalid' : '' }}" required>
                            {!! $errors->first('pekerjaan_wali', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Agama</label>
                        <div class="col-sm-12">
                            <select name="agama_wali"  id="" class="form-control">
                                <option value="">Pilih Agama</option>
                                <option value="islam" {{ $get->agama_orangtua == 'islam' ? 'selected' : '' }}>Islam</option>
                                <option value="kristen" {{ $get->agama_orangtua == 'kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="budha" {{ $get->agama_orangtua == 'budha' ? 'selected' : '' }}>Budha</option>
                                <option value="konghucu" {{ $get->agama_orangtua == 'konghucu' ? 'selected' : '' }}>Konghucu</option>
                            </select>
                            {!! $errors->first('agama_wali', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6">Alamat Wali</label>
                        <div class="col-sm-12">
                            <textarea name="alamat_wali"  value="" style="resize: none;" id="" class="form-control" cols="30"
                                rows="3" required>{{ $get->alamat_wali }}</textarea>
                            {!! $errors->first('alamat_wali', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary btn-sm float-end">Update</button>
                            <a href="{{ route('students.index') }}" class="btn btn-warning btn-sm">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
