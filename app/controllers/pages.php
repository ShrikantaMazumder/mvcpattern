<?php

class Pages extends Controller{
    public function __construct(){
        
    }
    
    public function index(){
        $data = [
            'title'=>'Welcome This is HomePage',
        
        ];
        
        $this->view('pages/index',$data);

    }

    public function about(){
        $data = [
            'title'=>
            'Welcome This is About'
        ];
        $this->view('pages/about',$data);
    }
}