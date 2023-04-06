<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Models\Newsletter;

class MainController extends Controller
{
    public function index() {
        $posts = Post::get();
        return view('index', compact('posts'));
    }

    public function store() {

        $newsletter = new Newsletter();

        $newsletter->name = request('name');
        $newsletter->email = request('email');
        $newsletter->phone = request('phone');

        $newsletter->save();

        return redirect('/');
    }
}
