<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
     //contacts list page
     public function index(){
        return view('student.index');
    }
}
