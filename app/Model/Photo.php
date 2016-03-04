<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';
    protected $fillable = [
    	'name',
    	'path',
    	'thumbnail_path'
    ];
    protected $base_dir = 'assets/gallery/photos';

    public function gallery()
    {
    	return $this->belongsTo('App\Model\Gallery');
    }
    public function event_block()
    {
        return $this->belongsTo('App\Model\eventBlock_model');
    }
    public static function named($name)
    {
        return (new static)->saveAs($name);
    }
    public function saveAs($name)
    {
        $this->name = $name;
        $this->path = sprintf('%s/%s', $this->base_dir, $this->name);
        $this->thumbnail_path = sprintf('%s/tn-%s', $this->base_dir, $this->name);

        return $this;
    }
    public function move(UploadedFile $file)
    {
        $file->move($this->base_dir, $this->name);

        $this->makeThumbnail();
        $this->resizePhoto();

        return $this;
    }
    protected function resizePhoto()
    {
        Image::make($this->path)
        ->fit(900)
        ->save($this->path);
    }
    protected function makeThumbnail()
    {
        Image::make($this->path)
        ->fit(250)
        ->save($this->thumbnail_path);
    }
}
