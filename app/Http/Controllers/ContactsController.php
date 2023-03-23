<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts', compact('contacts') );
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|min:10',
            'message'=>'required',
        ]);
        Contact::create($request-> all());
    }



    function edit_contact($id){
        $data = Contact::find($id);
        return view('edit/editContact',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $contact = Contact::find($req->id);
        $contact->first_name = $req->first_name;
        $contact->last_name = $req->last_name;
        $contact->email = $req->email;
        $contact->phone = $req->phone;
        $contact->message = $contact->message;

        $result= $contact->save();


        return redirect('/contacts');
    }


    public function destroy($id)
    {
        Contact::find($id)->delete();
        return redirect()->back();
    }
}
