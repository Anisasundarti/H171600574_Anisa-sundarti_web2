<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriPengumuman extends Model
{
    use SoftDeletes;
    protected $table='kategori_pengumuman';

    protected $fillable = [
        'nama','users_id', 
    ];
    protected $casts=['deleted_at'=>'datetime'];
}
