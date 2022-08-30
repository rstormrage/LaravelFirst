<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Input;

class HomeController extends Controller
{
    //test Home 的index function
    public function index(){
        return 'Home index';
    }


    // public function add(){
    //     $contact = new Contact();
    //     $contact -> name = "Pink";
    //     $contact -> email = "pink@pink";
    //     $contact -> message = "hi pink";
    //     $contact -> save();
    //     return($contact);
    // }

    public function create(){
        
        return view('contact.form');
    }

    public function store(Request $request){
        if(Input::method() == "POST"){
            $validated = $request->validate([
                'message' => 'required|max:255',
                'name' => 'required',
                'email' => 'required',
            ]);
            $contact = new Contact;
            // dd($request);
            // $contact->name = $request->name;
            // $contact->email = $request->email;
            // $contact->message = $request->message;
            $contact -> create($request -> all());
            return redirect()->back()->with('status', 'Message sent');
        // }else{
            
        }
        // Validate and store the blog post...
        
        
    
        // $contact = new Contact();
        // $result = $contact -> create($request -> all());
        
    }
}

