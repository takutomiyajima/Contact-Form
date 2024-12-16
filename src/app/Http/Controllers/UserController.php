<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function dashboard()
    {
        $contacts = Contact::with('category')->paginate(8);
        return view('auth/dashboard', compact('contacts'));
    }

    public function export(Request $request)
    {
        return Excel::download(new UsersExport($request->all()), 'users.csv');
    }
}