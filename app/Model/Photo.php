<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
    	'name',
    	'path',
    	'thumbnail_path'
    ];
    protected $base_dir = 'gallerys/photos';

    public function gallery()
    {
    	return $this->belongsTo('App\Model\Gallery');
    }
}
