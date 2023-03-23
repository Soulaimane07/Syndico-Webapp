<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::all();
        return view('topics/footer', compact('footer') );
    }


    public function api()
    {
        $data = Footer::all();
        return $data;
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'logo'=>'required',
            'link'=>'required',
            'para_Fr'=>'required',
            'para_An'=>'required',
            'para_Ar'=>'required',
        ]);
        Footer::create($request-> all());

        return Redirect('/footer');
    }


    public function destroy($id)
    {
        Footer::find($id)->delete();
        return redirect()->back();
    }


    function edit_footer($id){
        $data = Footer::find($id);
        return view('edit/editFooter',['data'=>$data]);
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
        $footer = Footer::find($req->id);

        $footer->title = $req->title;
        $footer->logo = $req->logo;
        $footer->link = $req->link;

        $footer->para_Fr = $req->para_Fr;
        $footer->para_an = $req->para_An;
        $footer->para_Ar = $req->para_Ar;
        
        $result= $footer->save();


        return redirect('/footer');
    }
}
