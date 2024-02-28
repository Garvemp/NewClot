<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['delete_at'];
    protected $table = 'clients';
    protected $hidden = ['created_at', 'updated_at'];
    protected $primaryKey = 'id_c';
}



