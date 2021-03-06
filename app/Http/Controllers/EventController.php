<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Schema;
use Mail;
use App\livestream;


class EventController extends Controller
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
    public function uploadevents()
    {
        return view('login.uploadevents');
    }
    public function upload(Request $request)
    {
        $events = DB::table('events')->get();
        foreach ($events as $e){
            if($e->title==$request->title){

            }
        }
        $event = new Events;

        $event->title =$_POST['title'] ;
        $event->date =$_POST['date'] ;
        $event->time =$_POST['time'] ;
        $event->venue =$_POST['venue'] ;
        $event->description =$_POST['description'] ;
        if($request->hasFile('file')){
            foreach ($request->file as $file){
                $filename=$file->getClientOriginalName();
                $event->files =$filename ;
                $file->storeAs('public/Event',$filename);
            }

            $event->description =$_POST['description'] ;
        }
        $name=$_POST['title'].$_POST['date'];
        if(isset($_POST['register'])){
            $event->register ='yes';
            Schema::create($name, function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('email');

            });
        }
        else $event->register ='no' ;

        $event->save();

    Mail::send(['text'=>'login/newEventMail'],['name',Auth::User()->name],function ($messege){
        $res = DB::table('users')->get();
        foreach ($res as $r){
        $messege->to($r->email)->subject("Event Upload");
        $messege->from('sdgynsl18@gmail.com');
    }});




    //live Stream link adding
        $livestream = new Livestream([
            'name' => $request -> get('title'),
            'link' => $request -> get('livestream'),
            'email' => Auth::user()->email,
            'status' => 'yes'
        ]);


        $livestream->save();



        return view('login.uploadevents');
    }

    public function updateevents()
    {
        $events = DB::table('events')->get();
        return view('login.updateevents')->with('events',$events);
    }
    public function update(Request $request)
    {
        $title = $request->get('title');
        $event = \App\Events::where('title',$title)->first();
        $attribute=['date','time','venue','description'];
        foreach ($attribute as $a){
            if($request->$a==''){}
                else{
                    $event->$a = $request->$a;
                }

        }

if($request->hasFile('file')){

    foreach ($request->file as $file){

        $filename=$file->getClientOriginalName();
        $event->files =$filename;

       $file->storeAs('public/Event',$filename);
    }


}



        if(isset($_POST['register'])){
            $event->register ='yes';
        }
        else $event->register ='no' ;

        $event->save();




        $events = DB::table('events')->get();
        return view('login.updateevents')->with('events',$events);
    }

    public function showall()
    {

        $events = DB::table('events')->orderBy('date','desc')->get();
foreach ($events as $e){
    $live=DB::table('livestreams')->where('name',$e->title)->first();
    if($live){
        $events['link']=$live->link;
    }

    else {$events['link']=" ";}

}

        return view('login.events')->with('events',$events);
    }

    public function view(Request $request)
    {
        $title = $request->get('title');

        $res = \App\Events::where('title', $title)->first();

        return view('login.viewevents')->with('res', $res);

    }
    public function delete(Request $request)
    {
        $title = $request->get('title');

        \App\Events::where('title', $title)->delete();

        return redirect()->back()->with('message', 'Deleted  Successfully!');

    }
}
