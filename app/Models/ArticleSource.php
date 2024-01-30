<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleSource extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'article_sources';

    protected $timestamps = true;

    protected $fillable = [
        'name',
        'website'
    ];
}

