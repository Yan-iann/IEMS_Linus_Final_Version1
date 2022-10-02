<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wildlife extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'wildlife';
    protected $primaryKey = 'info_ID';

    protected $fillable = [
        'info_ID',
        'wildlife_name',
        'wildlife_scientific_name',
        'wildlife_class',
        'wildlife_order',
        'wildlife_family',
        'wildlife_genus',
        'wildlife_species',
        'wildlife_location',
        'wildlife_desc',
        'wildlife_pic',
        'wildlife_status',
    ];
}
