<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Company;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $companies = Company::userCompanies();
        // $contacts = auth()->user()->contacts()->latestFirst()->paginate(5);
        // return view('contacts.index', compact('contacts', 'companies'));

        // $companies = auth()->user()->company()->orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        $contacts = auth()->user()->contacts()->with('company')->latestFirst()->paginate(5);
        return view('contacts.index', compact('contacts', 'companies'));
    }

    public function create()
    {
        $contact = new Contact();
        $companies = Company::userCompanies();
        // $companies = auth()->user()->company()->orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        return view('contacts.create', compact('companies', 'contact'));
    }

    public function store(ContactRequest $request)
    {
        $request->user()->contacts()->create($request->all());
        return redirect()->route('contacts.index')->with('message', 'Contact has been added');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'first_name' => 'required',
    //         'last_name' => 'required',
    //         'person_title' => 'required',
    //         'person_address' => 'required',
    //         'person_email' => 'required|email',
    //         'person_phone' => 'required',
    //     ]);

    //     $request->user()->contacts()->create($request->all());
    //     // Contact::create($request->all() + ['user_id' => auth()->id()]);
    //     return redirect()->route('contacts.index')->with('message', 'Contact has been added');
    // }

    public function edit(Contact $contact)
    {
        $companies = Company::userCompanies();
        return view('contacts.edit', compact('companies', 'contact'));
    }

    // public function edit(Contact $contact)
    // {
    //     // $contact = Contact::findOrFail($contact);
    //     $companies = Company::userCompanies();
    //     // $companies = auth()->user()->company()->orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
    //     return view('contacts.edit', compact('companies', 'contact'));
    // }

    public function update(ContactRequest $request, Contact $contact)
    {
        $contact->update($request->all());
        return redirect()->route('contacts.index')->with('message', 'Contact has been updated');
    }

    // public function update(Contact $contact, Request $request)
    // {
    //     $request->validate([
    //         'first_name' => 'required',
    //         'last_name' => 'required',
    //         'person_title' => 'required',
    //         'person_address' => 'required',
    //         'person_email' => 'required|email',
    //         'person_phone' => 'required',
    //     ]);

    //     // $contact = Contact::findOrFail($contact);
    //     $contact->update($request->all());
    //     return redirect()->route('contacts.index')->with('message', 'Contact has been updated');
    // }

    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    // public function show($contact)
    // {
    //     $contact = Contact::findOrFail($contact);
    //     return view('contacts.show', compact('contact'));
    // }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('message', 'Contact has been deleted');
    }

    // public function destroy($contact)
    // {
    //     $contact = Contact::findOrFail($contact);
    //     $contact->delete();
    //     return back()->with('message', 'Contact has been deleted');
    // }
}
