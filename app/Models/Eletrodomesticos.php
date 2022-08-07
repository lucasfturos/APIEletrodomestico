<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eletrodomesticos extends Model
{
    use HasFactory;
    protected $table = 'table_eletrodomestico';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
