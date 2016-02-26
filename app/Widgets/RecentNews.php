<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Model\News;
use Carbon\Carbon;

class RecentNews extends AbstractWidget
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
        $data['news'] = News::all();
        Carbon::setToStringFormat('jS \o\f F, Y');
        return view("widgets.recent_news", [
            'config' => $this->config,
        ],compact('data'));
    }
}