<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class PhotoAlbum extends Model
{
    use Sluggable;

    protected $fillable = array('name','description','cover_image');

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function getUrlAttribute()
    {
        return '/albums/' . $this->slug;
    }
    public function Photos(){

        return $this->has_many(Photo::class);
    }
}
