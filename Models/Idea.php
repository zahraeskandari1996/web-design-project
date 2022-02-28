<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;
use BeyondCode\Comments\Traits\HasComments;
class Idea extends Model
{
    use HasFactory;
    use Rateable;
    use HasComments;

    protected $fillable = [
        'title',
        'content',
        'file_path',
        'user_id',
        'ideashow_id'
    ];


    /**
     * Get the User associated with the Idea.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the Ideashow associated with the Idea.
     */
    public function ideashow()
    {
        return $this->belongsTo(Ideashow::class);
    }
}
