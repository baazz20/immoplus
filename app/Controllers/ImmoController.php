<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Post;


class ImmoController extends Controller{
    public function welcome(){

        return $this->view('immoplus.welcome');
    }
    public function index(){

        $post = new Post($this->getDB());
        $posts = $post->all();
        
        return $this->view('immoplus.index', compact('posts'));
    }

    public function show(int $id){

        $post = new Post($this->getDB());
        $post = $post->findById($id);


        return $this->view('immoplus.show', compact('post'));
    }
}