<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hReject extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'litho', 'sub_code','eb_no','sl_no',
        'marks', 'chng_marks',
    ];

}
