<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ideashow extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'is_active'
    ];

    /**
     * Get the ideas associated with the Ideashow.
     */
    public function ideas()
    {
        return $this->hasMany(Idea::class);
    }
}
