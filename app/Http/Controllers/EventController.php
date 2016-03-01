<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Session;
use App\Http\Requests\EventRequest;
use App\Model\eventBlock_model;
use App\User;

class EventController extends Controller
{
    public function index()
    {
        $event_block = eventBlock_model::all();
        return view('event.index', compact('event_block'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        //
        $event_block = $request->all();
        //$event_block['user_id'] = \Session::get('userId');
        $event_block = new eventBlock_model($event_block);
        $event_block->save();
        //flash()->success('Новость успешно создана!');
        return redirect('event');
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
        $event_block = eventBlock_model::findOrFail($id);
        return view('event.show', compact('event_block'));
    }


    public function control()
    {
        $event_block = eventBlock_model::latest('published_at')->published()->get();
        return view('event.control', compact('event_block'));
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
        $event_block = eventBlock_model::findOrFail($id);
        return view('event.edit', compact('event_block'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, $id)
    {
        //
        $event_block = eventBlock_model::findOrFail($id);
        $event_block->update($request->all());
        //flash()->success('Новость успешно обновлена!');
        return redirect('event');
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
        $event_block = eventBlock_model::find($id);
        $event_block->delete();
        //flash()->success('Новость успешно удалена!');
        return redirect('event');
    }
}