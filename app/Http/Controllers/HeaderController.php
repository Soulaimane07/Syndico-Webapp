<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Header;


class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Header::paginate(10);
        return view('topics/header',['header'=>$data, 'headers'=>$data, 'headerss'=>$data]);
    }


    public function api()
    {
        $data = Header::all();
        return $data;
    }


    
    public function store(Request $request)
    {
        $request->validate([
            'title1_Fr'=>'required',
            'title1_An'=>'required',
            'title1_Ar'=>'required',
            'title2_Fr'=>'required',
            'title2_An'=>'required',
            'title2_Ar'=>'required',
            'para_Fr'=>'required',
            'para_An'=>'required',
            'para_Ar'=>'required',
            'image'=>'required',
            'button_Fr'=>'required',
            'button_An'=>'required',
            'button_Ar'=>'required',
        ]);
        
       
        $header = new Header;

        $header->title1_Fr = $request->input('title1_Fr');
        $header->title1_An = $request->input('title1_An');
        $header->title1_Ar = $request->input('title1_Ar');

        $header->title2_Fr = $request->input('title2_Fr');
        $header->title2_An = $request->input('title2_An');
        $header->title2_Ar = $request->input('title2_Ar');

        $header->para_Fr = $request->input('para_Fr');
        $header->para_An = $request->input('para_An');
        $header->para_Ar = $request->input('para_Ar');

        $header->button_Fr = $request->input('button_Fr');
        $header->button_An = $request->input('button_An');
        $header->button_Ar = $request->input('button_Ar');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '' .$extention;
            $file->move('uploads/header/', $filename);
            $header->image = $filename;
        }

        $header->save();

        return Redirect('/header');
    }


    public function destroy($id)
    {
        Header::find($id)->delete();
        return redirect()->back();
    }


    function edit_header($id){
        $data = Header::find($id);
        return view('edit/editHeader',['data'=>$data]);
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
        $header = Header::find($req->id);
        $header->title1_Fr = $req->title1_Fr;
        $header->title2_Fr = $req->title2_Fr;
        $header->para_Fr = $req->para_Fr;
        $header->button_Fr = $req->button_Fr;


        $header->title1_An = $req->title1_An;
        $header->title2_An = $req->title2_An;
        $header->para_An = $req->para_An;
        $header->button_An = $req->button_An;
        
        
        $header->title1_Ar = $req->title1_Ar;
        $header->title2_Ar = $req->title2_Ar;
        $header->para_Ar = $req->para_Ar;
        $header->button_Ar = $req->button_Ar;

        if($req->hasfile('image')){
            $file = $req->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '' .$extention;
            $file->move('uploads/header/', $filename);
            $header->image = $filename;
        }

        $result= $header->save();


        return redirect('/header');
    }
}
