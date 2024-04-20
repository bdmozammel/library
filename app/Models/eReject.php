<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eReject extends Model
{
    use HasFactory;
    protected $fillable = [
        'sub_code',
        'litho','roll_no','reg_no',
        'addl',
    ];

}
