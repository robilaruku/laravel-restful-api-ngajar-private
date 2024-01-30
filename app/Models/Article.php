<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'articles';

    protected $timestamps = true;

    protected $fillable = [
        'category_id',
        'source_id',
        'title',
        'content',
        'reference',
        'status'
    ];
}
