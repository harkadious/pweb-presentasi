<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = ['jdl_buku', 'penerbit', 'thn_terbit', 'konten_buku'];
//	protected $guarded = ['id'];
}
