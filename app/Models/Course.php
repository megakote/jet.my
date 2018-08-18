<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Course extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function getUrlAttribute()
    {
        return '/course/' . $this->slug;
    }

    public function getDateFormattedAttribute()
    {
        if (!$this['date']) {
            return 'Online';
        } else {
            $data = explode('-', $this['date']);
            return $data;
        }
    }

    public function category()
    {
        return $this->belongsTo(CourseCategory::class);
    }
}
