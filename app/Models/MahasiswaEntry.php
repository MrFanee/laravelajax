<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MahasiswaEntry extends Model
{
    protected $connection = 'crud_ajax';
    protected $table = 'mahasiswa';
    protected $fillable = ['id','nama','jurusan','jk'];
    protected $primarikey = 'id';
    public $timestamps = false;
}
