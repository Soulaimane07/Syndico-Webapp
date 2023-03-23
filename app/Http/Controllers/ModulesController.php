<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Module;

use App\Models\Modulesextra;


class ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('topics/modules', [
            'modules' => Module::all(),
            'modulesextra' => Modulesextra::all(),
        ]);
    }

    public function api()
    {
        $data = Module::all();
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

            'button_Fr'=>'required',
            'button_An'=>'required',
            'button_Ar'=>'required',

            'image'=>'required',
            'color'=>'required',
        ]);
        
        $module = new Module;

        $module->title_Fr = $request->input('title_Fr');
        $module->title_An = $request->input('title_An');
        $module->title_Ar = $request->input('title_Ar');

        $module->para_Fr = $request->input('para_Fr');
        $module->para_An = $request->input('para_An');
        $module->para_Ar = $request->input('para_Ar');

        $module->button_Fr = $request->input('button_Fr');
        $module->button_An = $request->input('button_An');
        $module->button_Ar = $request->input('button_Ar');

        $module->color = $request->input('color');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '' .$extention;
            $file->move('uploads/module/', $filename);
            $module->image = $filename;
        }

        $module->save();

        return Redirect('/modules');
    }


    public function destroy($id)
    {
        Module::find($id)->delete();
        return redirect()->back();
    }


    function edit_module($id){
        $data = Module::find($id);
        return view('edit/editmodule',['data'=>$data]);
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
        $module = Module::find($req->id);
        $module->title_Fr = $req->title_Fr;
        $module->para_Fr = $req->para_Fr;
        $module->button_Fr = $req->button_Fr;

        $module->title_An = $req->title_An;
        $module->para_An = $req->para_An;
        $module->button_An = $req->button_An;
        
        $module->title_Ar = $req->title_Ar;
        $module->para_Ar = $req->para_Ar;
        $module->button_Ar = $req->button_Ar;

        $module->color = $req->color;
        
        if($req->hasfile('image')){
            $file = $req->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '' .$extention;
            $file->move('uploads/module/', $filename);
            $module->image = $filename;
        }   

        $result= $module->save();


        return redirect('/modules');
    }







    public function apiex()
    {
        $data = Modulesextra::all();
        return $data;
    }

    public function destroyex($id)
    {
        Modulesextra::find($id)->delete();
        return redirect()->back();
    }

    public function storeex(Request $request)
    {
        $request->validate([
            'title_Fr'=>'required',
            'title_An'=>'required',
            'title_Ar'=>'required',

            'para1_Fr'=>'required',
            'para1_An'=>'required',
            'para1_Ar'=>'required',

            'para1_Fr'=>'required',
            'para1_An'=>'required',
            'para1_Ar'=>'required',

        ]);
        
        Modulesextra::create($request-> all());

        return Redirect('/modules');
    }


    function edit_moduleex($id){
        $data = Modulesextra::find($id);
        return view('edit/editModuleextra',['data'=>$data]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateex(Request $req)
    {
        $module = Modulesextra::find($req->id);
        $module->title_Fr = $req->title_Fr;
        $module->para1_Fr = $req->para1_Fr;
        $module->para2_Fr = $req->para2_Fr;

        $module->title_An = $req->title_An;
        $module->para1_An = $req->para1_An;
        $module->para2_An = $req->para2_An;
        
        $module->title_Ar = $req->title_Ar;
        $module->para1_Ar = $req->para1_Ar;
        $module->para2_Ar = $req->para2_Ar;

        $result= $module->save();


        return redirect('/modules');
    }


}
