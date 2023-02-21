<?php

namespace App\Http\Controllers;

use App\Models\AudioMix;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $events = Event::all();

        return view('pages.index', compact('events'));
    }



    public function about(){
        return view('pages.about');
    }

    public function tophits(){

        $topHits = AudioMix::all();

        $latestHit = AudioMix::orderBy('created_at', 'desc')->first();

        return view('pages.tophits', compact('topHits', 'latestHit'));
    }

    public function gallery(){
        return view('pages.gallery');
    }

    public function contact(){
        return view('pages.contact');
    }
}
