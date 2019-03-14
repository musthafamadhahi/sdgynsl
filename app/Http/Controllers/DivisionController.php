<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DivisionController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'division' => 'required|unique:districts',
            'district' => 'required',
        ]);



        $division = new Division([
            'division' => $request -> get('division'),
            'district' => $request -> get('district')
        ]);


        $division->save();

        return view('division');
    }

    public function show()
    {
        $res = DB::table('divisions')->orderBy('district')->orderBy('division')->get();
        return view('view_division')->with('res', $res);

    }

    public function delete()
    {
        foreach ($_POST['delete'] as $delete){
            DB::table('divisions')->where('id', $delete)->delete();
        }

        return redirect()->back()->with('message', 'Deleted  Successfully!');
    }
}
