<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class News extends Model
{
    protected	$fillable = [
    	'title',
    	'text',
    	'img_path',
    	'published_at'
    ];
    protected   $dates = ['published_at'];
    public function scopePublished($query) {
        $query->where('published_at','<=',Carbon::now());
    }
    public function scopeUnPublished($query) {
        $query->where('published_at','>',Carbon::now());
    }
    public function setPublishedAtAttribute($date) {
        $this->attributes['published_at'] = Carbon::parse($date);
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
