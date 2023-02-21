<?php

namespace App\Http\Controllers;

use App\Models\AudioMix;
use App\Models\Book;
use App\Models\Category;
use App\Models\Event;
use App\Models\Sermon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $categories = Category::all()->count();

        $events = Event::all()->count();

        $audio = AudioMix::all()->count();

        return(view('admin.home', compact('categories', 'events', 'audio')));
    }
}
