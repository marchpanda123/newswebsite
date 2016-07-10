<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'show_index'];

    /*
     * @return BelongsToMany
     */
    public function articles()
    {
        return $this->belongsToMany('App\Article', 'article_tag');
    }

    public function labels()
    {
        return $this->belongsToMany('App\Label', 'label_tag');
    }

    /**
     * Sync Label relation adding new Labels as needed
     *
     * @param array $LabelsID
     */
    public function syncLabels(array $labelsID)
    {
        if (count($labelsID)) {
            $this->labels()->sync($labelsID);
            return;
        }
        $this->labels()->detach();
    }
}
