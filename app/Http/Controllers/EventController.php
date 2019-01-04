<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Nexmo\Call\Event;
use function Psy\sh;
use App\Events;



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

    public function update()
    {
        $events = App\Events::all();
        return view('login.updateevents')->with('events',$events);
    }
}
