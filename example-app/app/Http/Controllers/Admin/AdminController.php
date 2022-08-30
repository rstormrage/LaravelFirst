<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{
    //test Admin 的index function
    public function index(){
        return 'admin index';
    }

    public function findbyid(Contact $id){
        $data = Contact::find($id);
        return ($data);
    }

    public function findall(){
        $data = Contact::get();
        return view('contact.list', compact('data'));
    }
    
    public function updatebyid(){
        // $data = Contact::find(8);
        // $data -> message = 'I am pink';
        // $data -> save();

        $result = Contact::where('id', '12') -> update([
            'email' => 'pink@'
        ]);
        dd($result);
    }

    public function deletebyid(Contact $id){
        $data = Contact::find($id);
        dd($data -> delete());
    }
}
