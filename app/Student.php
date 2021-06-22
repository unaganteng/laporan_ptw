<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table= 'mahasiswa';

    protected $fillable = ['id','nama','tmp_tgl'];
}
