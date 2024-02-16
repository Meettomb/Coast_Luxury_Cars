<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_cardatas extends Model
{
    public $table="user_cardatas";
    protected $primaryKey = 'Id';
    public $timestamps=false;   
    use HasFactory;
}
