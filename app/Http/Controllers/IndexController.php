<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showAction(){
        return view('default.template', array(
            'title' => 'Добро пожаловать на светлую сторону силы!'
        ));
    }
}
