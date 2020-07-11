<?php

class Controller
{
    // load model   
    public function Model($model)
    {
        require_once '../app/models/' . $model . '.php';

        return new $model();
    }

    // return json response
    public function json_response($response)
    {
        echo json_encode($response);
    }

    // GET server method
    public function getServerMethod()
    {
        return $_SERVER['request_method'];
    }
}
