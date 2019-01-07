<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use DB;
use Mail;
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



            Mail::send(['text'=>'login/changeroleMail'],['name',Auth::User()->name],function ($messege){
                $i=0;
                foreach ($_POST['changeRole']as $changeRole)
                {


                    if($changeRole!='Choose Role') {
                        $email = $_POST['email'];
                        $x = $email[$i];
                        DB::table('users')
                            ->where('email', $email[$i])
                            ->update(['role' => $changeRole]);
                        $messege->to($x)->subject("Role Chaneges");
                        $messege->from('sdgynsl18@gmail.com');
                    } }$i++;
                });



        return view('login.home');
    }
}
