<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'content'
    ];

    /**
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Search posts by title and content
     *
     * @param $query
     * @param $search
     * @return mixed
     */
    public function scopeSearch($query, $search)
    {
        return $query->where('title', 'like', '%'.$search.'%')
            ->orWhere('content', 'like', '%'.$search.'%');
    }

    public function getExcerptAttribute()
    {
        $content = $this->content;
        if (strlen($content) < 210) {
            return $content;
        } else {
            $new = wordwrap($content, 200);
            $new = explode("\n", $new);

            $new = $new[0] . '...';
            return $new;
        }
    }
}
