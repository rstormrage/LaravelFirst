<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //test Admin 的index function
    public function index(){
        return 'admin index';
    }
}
