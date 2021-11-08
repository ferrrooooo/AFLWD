<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tamu extends Model
{
    use HasFactory;
    protected $fillable=['tamu_name','tamu_checkin','tamu_checkout','tamu_typeroom'];

//     public function tamu()
//     {
//         return $this
//     }
}
