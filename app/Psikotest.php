<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psikotest extends Model
{
    protected $fillable = ['start', 'end','user','answer_a','answer_b','answer_c','answer_d','answer_correct','question'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}