<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;

class DcController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'district' => 'required',
            'email' => 'required|email|unique:users',
            'contact_no' => 'required',
            'password' => 'required'
        ]);



        $user = new User([
            'name' => $request -> get('name'),
            'district' => $request -> get('district'),
            'division' => $request -> get('division'),
            'email' => $request -> get('email'),
            'contact_no' => $request -> get('contact_no'),
            'role' => $request -> get('role'),
            'password' =>Hash::make($request -> get('password'))
        ]);


        $user->save();

        return view('add_dc');
    }

    public function showall()
    {
        $res = DB::table('users')->where('role', 'Dc')->orderBy('district')->get();
        return view('view_dc')->with('res', $res);

    }

    public function delete(){
        foreach ($_POST['delete'] as $delete){
            DB::table('users')->where('email', $delete)->delete();
        }

        return redirect()->back()->with('message', 'Deleted  Successfully!');

    }

    public function updatedc()
    {
        $dc = DB::table('users')->where('role','Dc')->get();
        return view('update_dc')->with('dc',$dc);
    }



    public function search(Request $request)
    {
        $email = $request->get('email');

        $res = \App\User::where('email', $email)->first();

        return view('search_dc')->with('res', $res);

    }

    public function update(Request $request)
    {
        $email = $request->get('email');
        $dc = \App\User::where('email',$email)->first();
        $attribute=['name','contact_no'];
        foreach ($attribute as $a){
            if($request->$a==''){}
            else{
                $dc->$a = $request->$a;
            }

        }

        $dc->save();




        $dc = DB::table('users')->where('role','Dc')->get();
        return view('update_dc')->with('dc',$dc);
    }

}

