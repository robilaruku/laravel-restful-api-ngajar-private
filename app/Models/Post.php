<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'posts';

    public $timestamps = true;

    protected $fillable = [
        'judul',
        'content',
        'published',
        'status'
    ];

    public function scopePublished($query) {
        return $query->where('published', true);
    }

    public function getJudulAttribute($value)
    {
        return ucfirst($value);
    }

    public function setJudulAttribute($value) {
        $this->attributes['judul'] = strtolower($value);
    }
}
