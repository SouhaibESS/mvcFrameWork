<?php

    class Controller {
        // load model   
        public function Model($model)
        {
            require_once '../app/models/'. $model . '.php';

            return new $model();
        }

        // load view
        public function View($view , $data = [])
        {
            if(file_exists('../app/views/' . $view . '.php'))
                require_once '../app/views/' . $view . '.php';
            else
                die('view does not exist');
        }

    }