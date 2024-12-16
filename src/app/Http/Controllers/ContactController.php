<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('index');
    }

    public function confirm(Request $request){
        $contact = $request -> only(['first_name','last_name','gender','email','phone','address','building','inquiry_type','inquiry_content']);
        return view('contacts/confirm',['contact' => $contact]);
    }

    public function store(Request $request){
        $contact = $request -> only(['category_id','first_name','last_name','gender','email','tell','address','building','detail']);
        Contact::create($contact);
        return view('contacts/thanks');
    }
}
