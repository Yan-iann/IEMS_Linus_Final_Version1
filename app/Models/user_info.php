<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_info extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'user_info';
    protected $primaryKey = 'user_ID';
    
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'profile_pic',
        'user_type',
    ];
}
