<?php

namespace App\Controllers;

class ImmoController extends Controller{

    public function index(){

        return $this->view('immoplus.index');
    }

    public function show(int $id){

        return $this->view('immoplus.show', compact('id'));
    }
}