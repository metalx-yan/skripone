<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','placebirthday','tgllahir','jenkelamin','goldarah','berat','tinggi','address','kodepos','agama','asalsekolah','address_school','thn_lulus','no_ijazah','no_telp','email','jurusan_pertama','jurusan_kedua','matematika','inggris','biologi','ipa','name_ayah','name_ibu','no_telp_orangtua','pekerjaan_ibu','pekerjaan_ayah','alamat_orang_tua','agama_orangtua','name_wali','no_telp_wali','pekerjaan_wali','agama_wali','alamat_wali'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
