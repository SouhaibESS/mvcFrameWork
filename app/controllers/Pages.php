<?php

class Pages extends Controller{
    public function __construct()
    {
        
    }

    public function about()
    {
        $data = [
            'title' => 'About us',
        ];
        $this->view('pages/about',$data);
    }

    public function index()
    {
        $data = [
            'title' => 'Welcome'
        ];
        $this->view('pages/index',$data);
    }
}