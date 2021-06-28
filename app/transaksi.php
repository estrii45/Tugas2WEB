<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable =['id_transaksi', 'nama', 'harga', 'jumlah'];
    public $timestamps = false;
} 
