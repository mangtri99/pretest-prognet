<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table ='tb_siswa';
    protected $primarykey ='id';
    protected $fillable = ['nama','nis','nisn','no_hp','alamat'];
    
    public $timestamps=false;
}
