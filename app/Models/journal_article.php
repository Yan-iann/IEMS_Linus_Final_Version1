<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class journal_article extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'journal_article';
    protected $primaryKey = 'info_ID';
    
    protected $fillable = [
        'info_ID',
        'journal_title',
        'journal_author',
        'journal_reference',
        'journal_desc',
        'date_published',
        'journal_status',
    ];
}
