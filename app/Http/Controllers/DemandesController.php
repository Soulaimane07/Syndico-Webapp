<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;


class DemandesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demandes = Demande::all();
        return view('demandes', compact('demandes') );
    }



    public function store(Request $request)
    {
        $request->validate([
            'full_name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|min:10',
            'city'=>'required',
            'n_imm'=>'required',
            'n_app'=>'required',
        ]);
        Demande::create($request-> all());

        return Redirect('/demandes');
    }


    function edit_demande($id){
        $data = Demande::find($id);
        return view('edit/editDemande',['data'=>$data]);
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
        $demande = Demande::find($req->id);
        $demande->full_name = $req->full_name;
        $demande->email = $req->email;
        $demande->phone = $req->phone;
        $demande->city = $req->city;
        $demande->n_imm = $req->n_imm;
        $demande->n_app = $req->n_app;

        $result= $demande->save();


        return redirect('/demandes');
    }



    public function destroy($id)
    {
        Demande::find($id)->delete();
        return redirect()->back();
    }
}
