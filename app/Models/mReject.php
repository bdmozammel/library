<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mReject extends Model
{
    use HasFactory;
    protected $fillable = [
        'answer', 'roll_no','reg_no','set_code', 'sub_code',
        
    ];

}
