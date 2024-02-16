<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cardatas extends Model
{
    public $table="cardatas";
    protected $primaryKey = 'Id';
    public $timestamps=false;
    use HasFactory;
}
