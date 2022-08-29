<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //test Home 的index function
    public function index(){
        return 'Home index';
    }
}
