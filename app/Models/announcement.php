<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class announcement extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'announcement';
    protected $primaryKey = 'anno_ID';

    protected $fillable = [
        'anno_title',
        'anno_author',
        'anno_date',
        'anno_content',
        'anno_status',
        'user_ID',
    ];
}
