<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsikotestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psikotests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('answer_a');
            $table->longText('answer_b');
            $table->longText('answer_c');
            $table->longText('answer_d');
            $table->longText('answer_correct');
            $table->longText('question');
            $table->date('start');
            $table->date('end');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('psikotests');
    }
}