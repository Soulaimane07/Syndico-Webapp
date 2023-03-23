<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demandez;

class DemandezController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Demandez::paginate(10);
        return view('topics/demandez',['demandes'=>$data]);
    }


    public function api()
    {
        $data = Demandez::all();
        return $data;
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_Fr' => 'required', 
            'title_An' => 'required', 
            'title_Ar' => 'required', 

            'label1_Fr' => 'required',
            'label1_An' => 'required',
            'label1_Ar' => 'required',
            
            'label2_Fr' => 'required',
            'label2_An' => 'required',
            'label2_Ar' => 'required',
            
            'label3_Fr' => 'required',
            'label3_An' => 'required',
            'label3_Ar' => 'required',
            
            'label4_Fr' => 'required',
            'label4_An' => 'required',
            'label4_Ar' => 'required',
            
            'label5_Fr' => 'required',
            'label5_An' => 'required',
            'label5_Ar' => 'required',
            
            'label6_Fr' => 'required',
            'label6_An' => 'required',
            'label6_Ar' => 'required',

            'button1_Fr' => 'required',
            'button1_An' => 'required',
            'button1_Ar' => 'required',

            'button2_Fr' => 'required',
            'button2_An' => 'required',
            'button2_Ar' => 'required',

        ]);
        Demandez::create($request-> all());

        return Redirect('/demandez');
    }


    public function destroy($id)
    {
        Demandez::find($id)->delete();
        return redirect()->back();
    }


    function edit_demandez($id){
        $data = Demandez::find($id);
        return view('edit/editdemandez',['data'=>$data]);
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
        $demandez = Demandez::find($req->id);

        $demandez->title_Fr = $req->title_Fr;
        $demandez->title_An = $req->title_An;
        $demandez->title_Ar = $req->title_Ar;

        $demandez->label1_Fr = $req->label1_Fr;
        $demandez->label1_An = $req->label1_An;
        $demandez->label1_Ar = $req->label1_Ar;
        
        $demandez->label2_Fr = $req->label2_Fr;
        $demandez->label2_An = $req->label2_An;
        $demandez->label2_Ar = $req->label2_Ar;
        
        $demandez->label3_Fr = $req->label3_Fr;
        $demandez->label3_An = $req->label3_An;
        $demandez->label3_Ar = $req->label3_Ar;
        
        $demandez->label4_Fr = $req->label4_Fr;
        $demandez->label4_An = $req->label4_An;
        $demandez->label4_Ar = $req->label4_Ar;
        
        $demandez->label5_Fr = $req->label5_Fr;
        $demandez->label5_An = $req->label5_An;
        $demandez->label5_Ar = $req->label5_Ar;

        $demandez->label6_Fr = $req->label6_Fr;
        $demandez->label6_An = $req->label6_An;
        $demandez->label6_Ar = $req->label6_Ar;
        
        $demandez->button1_Fr = $req->button1_Fr;
        $demandez->button1_An = $req->button1_An;
        $demandez->button1_Ar = $req->button1_Ar;

        $demandez->button2_Fr = $req->button2_Fr;
        $demandez->button2_An = $req->button2_An;
        $demandez->button2_Ar = $req->button2_Ar;

        $result= $demandez->save();


        return redirect('/demandez');
    }
}
