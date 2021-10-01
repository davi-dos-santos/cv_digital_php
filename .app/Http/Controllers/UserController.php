<?php

namespace App\http\controllers;

use illuminate\Http\Request;  

class UserController extends Controller 
{ 
    public function get()
    {
        return "Ola controller";
    }
}