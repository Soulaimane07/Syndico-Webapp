<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutus;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutus = Aboutus::all();
        return view('topics/aboutus', compact('aboutus'));
    }

    public function api()
    {
        $data = Aboutus::all();
        return $data;
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title_Fr'=>'required',
            'title_An'=>'required',
            'title_Ar'=>'required',
            'para_Fr'=>'required',
            'para_An'=>'required',
            'para_Ar'=>'required',
            'image'=>'required',
        ]);
        
        $aboutus = new Aboutus;

        $aboutus->title_Fr = $request->input('title_Fr');
        $aboutus->title_An = $request->input('title_An');
        $aboutus->title_Ar = $request->input('title_Ar');

        $aboutus->para_Fr = $request->input('para_Fr');
        $aboutus->para_An = $request->input('para_An');
        $aboutus->para_Ar = $request->input('para_Ar');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '' .$extention;
            $file->move('uploads/aboutus/', $filename);
            $aboutus->image = $filename;
        }

        $aboutus->save();

        return redirect('/aboutus');

    }


    public function destroy($id)
    {
        Aboutus::find($id)->delete();
        return redirect()->back();
    }

    function edit_aboutus($id){
        $data = Aboutus::find($id);
        return view('edit/editAboutus',['data'=>$data]);
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
        $aboutus = Aboutus::find($req->id);
        $aboutus->title_Fr = $req->title_Fr;
        $aboutus->title_An = $req->title_An;
        $aboutus->title_Ar = $req->title_Ar;
        $aboutus->para_Fr = $req->para_Fr;
        $aboutus->para_An = $req->para_An;
        $aboutus->para_Ar = $req->para_Ar;
        
        if($req->hasfile('image')){
            $file = $req->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '' .$extention;
            $file->move('uploads/aboutus/', $filename);
            $aboutus->image = $filename;
        }        
        
        $result= $aboutus->save();


        return redirect('/aboutus');
    }
}
