<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;
use Session;
use App\Http\Requests\NewGalleryRequest;
use App\Model\Gallery;
use App\User;

class PhotoGalleryController extends Controller
{
	public function index() 
	{
		$gallerys = Gallery::all();
    	return view('gallery.index', compact('gallerys'));
    }
    public function create()
    {
    	return view('gallery.create');
    }
    public function show($id)
    {
    	$gallery = Gallery::with('photos')->findOrFail($id);
    	return view('gallery.show', compact('gallery'));
    }
    public function store(NewGalleryRequest $request) 
    {
        $gallerys = $request->all();
        //$news['user_id'] = \Session::get('userId');
        $gallerys = new Gallery($gallerys);
        $gallerys->save();
        //flash()->success('Новость успешно создана!');
        return redirect('gallery');
    }
    public function edit($id)
    {
        //
        $gallerys = Gallery::findOrFail($id);
        return view('gallery.edit', compact('gallerys'));
    }
    public function update(NewGalleryRequest $request, $id)
    {
        $gallerys = Gallery::findOrFail($id);
        $gallerys->update($request->all());
        //flash()->success('Новость успешно обновлена!');
        return redirect('gallery');
    }
    public function destroy($id)
    {
        //
        $gallerys = Gallery::find($id);
        $gallerys->delete();
        //flash()->success('Новость успешно удалена!');
        return redirect('gallery');
    }
}
