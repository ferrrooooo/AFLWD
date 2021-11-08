<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeroom extends Model
{
    use HasFactory;
    protected $primaryKey = 'room_code';
    protected $keyType = 'string';
    protected $fillable =['room_type','room_details','room_price','room_code'];
}
