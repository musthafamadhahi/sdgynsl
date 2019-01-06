<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use DB;
use function Psy\sh;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showall()
    {

        $district=Auth::User()->district;
        $res = DB::table('users')->where('district', $district)->get();
        return view('login.allmembers')->with('res', $res);

    }
    public function update()
    {


$i=0;
        foreach ($_POST['changeRole']as $changeRole)
        {
            $email=$_POST['email'];

            if($changeRole!='Choose Role'){
            DB::table('users')
                ->where('email', $email[$i])
                ->update(['role' => $changeRole]);
        }
$i++;
        }
        return view('login.home');
    }
}
