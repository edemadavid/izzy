<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Event;
use App\Models\Sermon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $events = Event::all();

        return view('pages.index', compact('events'));
    }

    public function sermons(){

        $categories = Category::with('Sermons')->get();

        $sermons = Sermon::all();

        return view('pages.sermons', compact('categories','sermons'));
    }

    public function books(){

        $categories = Category::with('Books')->get();

        $books = Book::all();

        return view('pages.books', compact('categories','books'));
    }

    public function about(){
        return view('pages.about');
    }

    public function tophits(){
        return view('pages.tophits');
    }

    public function gallery(){
        return view('pages.gallery');
    }

    public function contact(){
        return view('pages.contact');
    }
}
