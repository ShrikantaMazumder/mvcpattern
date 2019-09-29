<?php

    /*
     * Base controller
     * Load the model & views
     *  
     */

     class Controller{

        //Load Model
         public function model($model){
            //require model file
            require_once '../app/models/'.$model.'.php';
            //Instantiate model
            return new $model();
         }

         //Load View
         public function view($view,$data = []){
            //Check for view file
            if (file_exists('../app/views/'.$view.'.php')) {
                //Require view file
                require_once '../app/views/'.$view.'.php';
            }else {
                die('View does not exists');

            }
         }
     }