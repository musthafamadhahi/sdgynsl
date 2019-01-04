<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\Events;
use Illuminate\Database\Eloquent\Model;




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
    public function upload()
    {
        $event = new Events;

        $event->title =$_POST['title'] ;
        $event->date =$_POST['date'] ;
        $event->time =$_POST['time'] ;
        $event->venue =$_POST['venue'] ;
        $event->description =$_POST['description'] ;
        if(isset($_POST['file'])){
            $files=$_POST['file'];
                foreach($files as $file){
                    $event->files =$file ;
                }
            $event->description =$_POST['description'] ;
        }
        if(isset($_POST['register'])){
            $event->register ='yes';
        }
        else $event->register ='no' ;

        $event->save();




        return view('login.uploadevents');
    }

    public function updateevents()
    {
        $events = $users = DB::table('events')->get();
        return view('login.updateevents')->with('events',$events);
    }
    public function update()
    {
        $event = \App\Events::where('title',$_POST['title'])->first();
        $attribute=['date','time','venue','description'];
        foreach ($attribute as $a){
            if($_POST[$a]==''){}
                else{
                    $event->$a = $_POST[$a];
                }

        }


        if(isset($_POST['file'])){
            $files=$_POST['file'];
            foreach($files as $file){
                $event->files =$file ;
            }

        }
        if(isset($_POST['register'])){
            $event->register ='yes';
        }
        else $event->register ='no' ;

        $event->save();




        $events = $users = DB::table('events')->get();
        return view('login.updateevents')->with('events',$events);
    }
}
