<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feddback extends Model
{
    public $table="feddback";
    protected $primaryKey = 'id';
    public $timestamps=false;
    use HasFactory;
}
