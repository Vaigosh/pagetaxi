<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class eventBlock_model extends Model
{
    protected   $table = 'eventBlock';
    protected	$fillable = [
    	'title',
    	'description',
    	'text',
    	'img_path',
    	'published_at',
    	'filter_id'
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
}
