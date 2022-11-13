<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('placebirthday')->nullable();
            $table->date('tgllahir')->nullable();
            $table->string('jenkelamin')->nullable();
            $table->string('goldarah')->nullable();
            $table->string('berat')->nullable();
            $table->string('tinggi')->nullable();
            $table->string('address')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('agama')->nullable();
            $table->string('asalsekolah')->nullable();
            $table->string('address_school')->nullable();
            $table->string('thn_lulus')->nullable();
            $table->string('no_ijazah')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('email')->nullable();
            $table->string('jurusan_pertama')->nullable();
            $table->string('jurusan_kedua')->nullable();
            $table->string('matematika');
            $table->string('inggris');
            $table->string('biologi');
            $table->string('ipa');
            $table->string('name_ayah')->nullable();
            $table->string('name_ibu')->nullable();
            $table->string('no_telp_orangtua')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('alamat_orang_tua')->nullable();
            $table->string('agama_orangtua')->nullable();
            $table->string('name_wali')->nullable();
            $table->string('no_telp_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('agama_wali')->nullable();
            $table->string('alamat_wali')->nullable();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id')->nullable();

            $table->foreign('student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
