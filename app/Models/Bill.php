<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class bill extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['delete_at'];
    protected $table = 'bills';
    protected $hidden = ['created_at', 'updated_at'];
}
