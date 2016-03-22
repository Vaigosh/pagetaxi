<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Session;
use App\Http\Requests\NewsRequest;
use App\Model\News;
use App\Model\Pages;
use App\User;
use App\Model\Group;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('sentry.member:Admins', ['except' => ['index','show']]);
    }
    public function index()
    {
        //$page = Pages::where('name','=','news')->get();
        $news = News::all();
        //$user = User::find(1)->groups()->get();

        //dd($user[0]->title);
        return view('news.index', compact('news','page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        //dd($news);
        $news = $request->all();
        //$news['user_id'] = \Session::get('userId');
        $news = new News($news);
        $news->save();
        //flash()->success('Новость успешно создана!');
        return redirect('news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }


    public function control()
    {
        $news = News::latest('published_at')->published()->get();
        return view('news.control', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        //
        $news = News::findOrFail($id);
        $news->update($request->all());
        //flash()->success('Новость успешно обновлена!');
        return redirect('news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $news = News::find($id);
        $news->delete();
        //flash()->success('Новость успешно удалена!');
        return redirect('news');
    }
}