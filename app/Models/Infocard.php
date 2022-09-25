<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infocard extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'infocards';
    protected $primaryKey = 'info_ID';
    
    protected $fillable = [
        'info_type',
    ];
}
