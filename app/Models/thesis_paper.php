<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thesis_paper extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'thesis_paper';
    protected $primaryKey = 'info_ID';
    
    protected $fillable = [
        'info_ID',
        'thesis_title',
        'thesis_author',
        'thesis_reference',
        'thesis_file',
        'thesis_type',
        'date_published',
        'thesis_status',
    ];
}
