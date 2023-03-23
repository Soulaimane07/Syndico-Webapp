<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Form;

class FormsController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Form::paginate(10);
        return view('topics/contact',['contacts'=>$data]);
    }


    public function api()
    {
        $data = Form::all();
        return $data;
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required', 

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
            
            'button_Fr' => 'required',
            'button_An' => 'required',
            'button_Ar' => 'required',

        ]);
        
        $connect = new Form;

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '' .$extention;
            $file->move('uploads/connect/', $filename);
            $connect->image = $filename;
        }

        $connect->title_Fr = $request->input('title_Fr');
        $connect->title_An = $request->input('title_An');
        $connect->title_Ar = $request->input('title_Ar');

        $connect->label1_Fr = $request->input('label1_Fr');
        $connect->label1_An = $request->input('label1_An');
        $connect->label1_Ar = $request->input('label1_Ar');

        $connect->label2_Fr = $request->input('label2_Fr');
        $connect->label2_An = $request->input('label2_An');
        $connect->label2_Ar = $request->input('label2_Ar');

        $connect->label3_Fr = $request->input('label3_Fr');
        $connect->label3_An = $request->input('label3_An');
        $connect->label3_Ar = $request->input('label3_Ar');

        $connect->label4_Fr = $request->input('label4_Fr');
        $connect->label4_An = $request->input('label4_An');
        $connect->label4_Ar = $request->input('label4_Ar');

        $connect->label5_Fr = $request->input('label5_Fr');
        $connect->label5_An = $request->input('label5_An');
        $connect->label5_Ar = $request->input('label5_Ar');

        $connect->button_Fr = $request->input('button_Fr');
        $connect->button_An = $request->input('button_An');
        $connect->button_Ar = $request->input('button_Ar');

        

        $connect->save();

        return Redirect('/contact');
    }

    public function destroy($id)
    {
        Form::find($id)->delete();
        return redirect()->back();
    }

    function edit_connect($id){
        $data = Form::find($id);
        return view('edit/editConnect',['data'=>$data]);
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
        $connect = Form::find($req->id);
        
        if($req->hasfile('image')){
            $file = $req->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '' .$extention;
            $file->move('uploads/connect/', $filename);
            $connect->image = $filename;
        }   

        $connect->title_Fr = $req->title_Fr;
        $connect->title_An = $req->title_An;
        $connect->title_Ar = $req->title_Ar;

        $connect->label1_Fr = $req->label1_Fr;
        $connect->label1_An = $req->label1_An;
        $connect->label1_Ar = $req->label1_Ar;
        
        $connect->label2_Fr = $req->label2_Fr;
        $connect->label2_An = $req->label2_An;
        $connect->label2_Ar = $req->label2_Ar;
        
        $connect->label3_Fr = $req->label3_Fr;
        $connect->label3_An = $req->label3_An;
        $connect->label3_Ar = $req->label3_Ar;
        
        $connect->label4_Fr = $req->label4_Fr;
        $connect->label4_An = $req->label4_An;
        $connect->label4_Ar = $req->label4_Ar;
        
        $connect->label5_Fr = $req->label5_Fr;
        $connect->label5_An = $req->label5_An;
        $connect->label5_Ar = $req->label5_Ar;
        
        $connect->button_Fr = $req->button_Fr;
        $connect->button_An = $req->button_An;
        $connect->button_Ar = $req->button_Ar;

        $result= $connect->save();


        return redirect('/contact');
    }
}
