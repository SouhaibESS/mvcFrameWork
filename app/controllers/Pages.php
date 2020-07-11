<?php

class Pages extends Controller
{
    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
    }

    public function about()
    {
        $data = [
            'title' => 'About us',
        ];

        $this->json_response($data);
    }

    public function index()
    {
        $data = [
            'title' => 'Welcome'
        ];

        $this->json_response($data);
    }
}
