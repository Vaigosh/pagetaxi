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
    protected $base_dir = 'gallery/photos';

    public function gallery()
    {
    	return $this->belongsTo('App\Model\Gallery');
    }
    public function event_block()
    {
        return $this->belongsTo('App\Model\eventBlock_model');
    }
}
