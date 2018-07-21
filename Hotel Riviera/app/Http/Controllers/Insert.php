<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class Insert extends Controller
{
    public function insert(Request $req){
        $post = new Post;

        $post->nume = Input::get("nume");
        $post->prenume = Input::get("prenume");
        $post->tara = Input::get("tara");
        $post->oras = Input::get("oras");
        $post->adresa = Input::get("adresa");
        $post->telefon = Input::get("telefon");
        $post->data_inceput = Input::get("date1");
        $post->data_sfarsit = Input::get("date2");
        $post->nr_pers = Input::get("numar_pers");
        $post->save();
        return redirect('/home');
    }
}
