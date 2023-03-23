<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Illuminate\Foundation\Auth;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users', compact('users') );
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'is_admin' => $request['stat'],
        ]);

        return Redirect('/users');
    }

    
    function edit_demande($id){
        $data = User::find($id);
        return view('edit/editUser',['data'=>$data]);
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
        $user = User::find($req->id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->is_admin = $req->stat;

        if($req->hasfile('image')){
            $file = $req->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '' .$extention;
            $file->move('uploads/users/', $filename);
            $user->image = $filename;
        }

        // $user->image = $req->image;

        if(Hash::needsRehash($req->password)){
            $user->password = Hash::make($req->password);
        }else {
            $user->password = $req->password;
        }

        $result= $user->save();

        return redirect('/users');
    }

    
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }

    public function destroyP($id)
    {
        User::find($id)->delete();
        return redirect('/');
    }
}
