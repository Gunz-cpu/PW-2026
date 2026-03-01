<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'barang';
    protected $key = 'id';
    protected $guarded = ['id'];
    public $timestamps = true;
}
