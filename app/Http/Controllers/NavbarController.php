<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Navbar;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Navbar::paginate(10);
        return view('topics/navbar',['navbar'=>$data]);
    }

    public function api()
    {
        $data = Navbar::all();
        return $data;
    }


    public function store(Request $request)
    {
        $request->validate([
            'title_Fr'=>'required',
            'title_An'=>'required',
            'title_Ar'=>'required',
            'image'=>'required',
            'logo'=>'required',
            'link'=>'required',
        ]);

        $navbar = new Navbar;
        $navbar->title_Fr = $request->input('title_Fr');
        $navbar->title_An = $request->input('title_An');
        $navbar->title_Ar = $request->input('title_Ar');
        $navbar->logo = $request->input('logo');
        $navbar->link = $request->input('link');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '' .$extention;
            $file->move('uploads/navbar/', $filename);
            $navbar->image = $filename;
        }

        $navbar->save();

        return Redirect('/navbar');
    }


    public function destroy($id)
    {
        Navbar::find($id)->delete();
        return redirect()->back();
    }


    function edit_navbar($id){
        $data = Navbar::find($id);
        return view('edit/editNavbar',['data'=>$data]);
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
        $navbar = Navbar::find($req->id);
        $navbar->title_Fr = $req->title_Fr;
        $navbar->title_An = $req->title_An;
        $navbar->title_Ar = $req->title_Ar;
        
        if($req->hasfile('image')){
            $file = $req->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '' .$extention;
            $file->move('uploads/navbar/', $filename);
            $navbar->image = $filename;
        }
        
        $navbar->logo = $req->logo;
        $navbar->link = $req->link;

        $result= $navbar->save();


        return redirect('/navbar');
    }

}
