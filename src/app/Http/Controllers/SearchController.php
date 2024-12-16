<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use Illuminate\Support\Facades\Response;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::query();

        if ($request->filled('name')) {
            $query->where('first_name', 'LIKE', "%{$request->name}%")
                    ->orWhere('last_name', 'LIKE', "%{$request->name}%");
        }

        if ($request->filled('gender') && $request->gender != 'all') {
            $query->where('gender', $request->gender);
        }

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        if ($request->filled('date')) {
            $query->whereDate('created_at', $request->date);
        }

        $contacts = $query->paginate(10);

        return view('auth.dashboard', compact('contacts'));
    }

    public function export(Request $request)
    {
        $contacts = Contact::query();

        if ($request->filled('name')) {
            $contacts->where('first_name', 'like', '%' . $request->name . '%')
                    ->orWhere('last_name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('gender')) {
            $contacts->where('gender', $request->gender);
        }

        if ($request->filled('category')) {
            $contacts->where('category_id', $request->category);
        }

        $contacts = $contacts->get();

        $csv = "お名前,性別,メールアドレス,お問い合わせの種類\n";

        foreach ($contacts as $contact) {
            $csv .= "{$contact->first_name} {$contact->last_name},";
            $csv .= "{$contact->gender},";
            $csv .= "{$contact->email},";
            $csv .= "{$contact->category_id}\n";
        }

        $response = Response::make($csv, 200);
        $response->header('Content-Type', 'text/csv');
        $response->header('Content-Disposition', 'attachment; filename="contacts.csv"');

        return $response;
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);

        return view('auth.show', compact('contact'));
    }

}
