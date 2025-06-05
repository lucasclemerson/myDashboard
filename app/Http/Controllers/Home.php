<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    
    public function index ()
    {
        $data = [
            "title"=>'Home page',
            "content"=>'home'
        ];
        return view ('home', $data);
    }




}
