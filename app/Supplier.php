<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table='suplier';
    protected $primaryKey='id_suplier';
    protected $fillable=['nama_suplier','barang_yang_disuplai','alamat'];
}
