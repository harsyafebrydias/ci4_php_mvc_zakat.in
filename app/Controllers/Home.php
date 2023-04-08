<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function chuakz($jmlData = 0)
    {
        if($jmlData >=15){
            for ($i=0; $i < $jmlData ; $i++){
                echo "chuakz ".$i." <br>";
            }
        }else{
            echo "data kureng dari 15 chuakzzz"; 
        }
    }
}