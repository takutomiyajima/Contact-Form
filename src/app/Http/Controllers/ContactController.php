<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(){
        return view('index');
    }

    public function confirm(ContactRequest $request){
        $contact = $request -> only(['first_name','last_name','gender','email','phone','address','building','category_id','detail']);
        return view('contacts/confirm',['contact' => $contact]);
    }

    public function store(Request $request){
        $contact = $request -> only(['category_id','first_name','last_name','gender','email','tell','address','building','detail']);
        Contact::create($contact);
        return view('contacts/thanks');
    }
}
