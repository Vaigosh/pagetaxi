<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Model\eventBlock_model;
use App\Model\Gallery;
use App\Model\Photo;
use Carbon\Carbon;

class EventBlock extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //
        $data['event_block'] = eventBlock_model::all();
        $data['photos'] = Photo::all();
        Carbon::setToStringFormat('jS \o\f F, Y');
        return view("widgets.event_block", [
            'config' => $this->config,
        ],compact('data'));
    }
}