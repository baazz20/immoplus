<?php

namespace App\Controllers;

use App\Controllers\Controller;

class ImmoController extends Controller{

    public function index(){

        return $this->view('immoplus.index');
    }

    public function show(int $id){

        $rep = $this->db->getPDO()->query('SELECT * FROM posts');
        $posts = $rep->fetchAll();
        foreach ($posts as $post) {
            echo $post->title;
        }
        return $this->view('immoplus.show', compact('id'));
    }
}