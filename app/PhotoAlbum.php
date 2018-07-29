<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoAlbum extends Model
{
    protected $fillable = array('name','description','cover_image');

    public function Photos(){

        return $this->has_many(Photo::class);
    }
}
