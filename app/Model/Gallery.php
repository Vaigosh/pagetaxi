<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected   $table = 'gallery';
    protected	$fillable = [
    	'name',
    	'description'
    ];
    public function photos()
    {
    	return $this->hasMany('App\Model\Photo');
    }
    public function addPhoto(Photo $photo)
    {
    	return $this->photos()->save($photo);
    }
}
