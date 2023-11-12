<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts= Contact::paginate(15);
        $setting = Setting::first();

        return view('contact.index',compact('contacts','setting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);
        $data = Contact::create([
            'name'=>$request->name ,
            'email'=>$request->email ,
            'subject'=>$request->subject ,
            'message'=>$request->message ,
        ]);
        // Mail::to('concept.arch11@gmail.com')->send(new ContactMail($data));
        // Mail::to('concept@conc-arch.com')->send(new ContactMail($data));

        toastr()->success('request has been sent successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Contact::query()->findOrFail($id)->delete();
        return redirect()->back();

    }

    public function contact_update(Request $request){
        $request ->validate([
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
        ]);

        $data = $request->only(['address','phone','email']);

        $setting = Setting::first();
        $setting->update($data);
        toastr()->success('Data has been updated successfully');
        return redirect()->back();

    }
}
