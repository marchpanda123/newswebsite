<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
	protected $fillable = ['name'];
    //
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'label_tag')->withTimestamps();
    }

    /**
     * Sync tag relation adding new tags as needed
     *
     * @param array $tagsID
     */
    public function syncTags(array $tagsID)
    {
        if (count($tagsID)) {
            $this->tags()->sync($tagsID);
            return;
        }
        $this->tags()->detach();
    }
}
