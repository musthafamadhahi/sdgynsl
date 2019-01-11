<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;
use DB;

class DistrictController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'district' => 'required|unique:districts',
        ]);



        $district = new District([
            'district' => $request -> get('district')
        ]);


        $district->save();

        return view('district');
    }

    public function show()
    {
        $res = DB::table('districts')->orderBy('district')->get();
        return view('view_district')->with('res', $res);

    }

    public function delete()
    {
        foreach ($_POST['delete'] as $delete){
            DB::table('districts')->where('id', $delete)->delete();
        }

        return redirect()->back()->with('message', 'Deleted  Successfully!');
    }
}
