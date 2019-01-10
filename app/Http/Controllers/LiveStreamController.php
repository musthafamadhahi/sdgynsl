<?php

namespace App\Http\Controllers;

use App\Livestream;
use Illuminate\Http\Request;
use DB;
use Auth;

class LiveStreamController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'link' => 'required',
            'email' => 'required|email',
            'status' => 'required'
        ]);



        $livestream = new Livestream([
            'name' => $request -> get('name'),
            'link' => $request -> get('link'),
            'email' => $request -> get('email'),
            'status' => $request -> get('status')
        ]);


        $livestream->save();

        return view('livestream');
    }

    public function show()
    {

            $e=Auth::User()->email;
            $res = DB::table('livestreams')->where('email', $e)->orderBy('id','DESC')->get();
            return view('view_livestream')->with('res', $res);

    }

    public function update()
    {




            $i=0;
            foreach ($_POST['changeStatus']as $changeStatus)
            {


                if($changeStatus!='Choose Status') {
                    $id=$_POST['id'];
                    DB::table('livestreams')
                        ->where('id',$id[$i])
                        ->update(['status' => $changeStatus]);

                } $i++;}





        return redirect()->back()->with('message', 'Updated Successfully!');
    }


}
