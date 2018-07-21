<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function home(){
        return view('posts.welcomepage');
    }
    public function pictures(){
        return view('posts.pictures');
    }
    public function contact(){
        return view('posts.contact');
    }
    public function about(){
        return view('posts.about');
    }
    public function restaurant(){
        return view('posts.restaurant');
    }
    public function hotel(){
        return view('posts.hotel');
    }
}
