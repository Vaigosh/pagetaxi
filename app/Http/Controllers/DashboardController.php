<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Carbon\Carbon;
use Session;
use App\Http\Requests\EventRequest;
use App\Model\eventBlock_model;
use App\Model\Gallery;
use App\Model\Pages;
use App\Model\News;
use App\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('sentry.member:Admins');
    }
    public function index()
    {
    	$event_block = eventBlock_model::all();
    	$news = News::all();
    	$gallerys = Gallery::all();
        return view('dashboard.index', compact('event_block','news','gallerys'));
    }

}
