<?php

namespace App\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Controllers\Controller;


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

    public function tag( int $id){
        $tag = (new Tag($this->getDB()))->findById($id);

        return $this->view('immoplus.tag', compact('tag'));
        
    }
}