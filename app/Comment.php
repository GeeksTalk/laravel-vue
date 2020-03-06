<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    protected $fillable = ['post_id','user_id','parent_id','comment'];

       /**
     *
     * @return BelongsTo
     */
    public function post():BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * Get comments comments.
     *
     * @return HasMany
     */
    public function children():HasMany
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    /**
     *
     * @return BelongsTo
     */
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
