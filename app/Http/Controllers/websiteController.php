<?php

namespace App\Http\Controllers;
use App\aboutpage;
use App\objectivepage;
use App\mission;
use App\rppage;
use App\slider;
use App\welcomemsg;
use App\message;
use App\ournews;
use App\notice;
use App\latestnews;
use App\director;
use App\event;
use App\gallerycategory;
use App\photogallery;
use App\quicklink;
use App\sponsor;
use App\contactus;
use App\newslatter;
use App\sponsorpromote;
use App\logo;
use App\videogallery;
use Session;
use Carbon\Carbon;

use Illuminate\Http\Request;
use View;

class websiteController extends Controller

{


   public function index(){
     $viewsliders=slider::get();
     $welcomemsg=welcomemsg::where('id',1)->FirstorFail();
     $messages=message::get();
     $newslatter_get = newslatter::first();
     $sponsorpromote = sponsorpromote::first();
   	 $ourallnews=ournews::where('ournews_status',1)-> get();
     $notices=notice::where('notice_status',1)->get();
   	 $latestnews=latestnews::where('latestnews_status',1)->get();
      $recent_gallery = gallerycategory::orderBy('gallerycat_id','DESC')->take(10)->get();
      $quicklink = quicklink::orderBy('id','DESC')->take(4)->get();
      $sponsors=sponsor::where('sponsor_status',1)->get();
     return view('frontend.index',compact('viewsliders','welcomemsg','messages','newslatter_get','sponsorpromote','ourallnews','notices','latestnews','recent_gallery','quicklink','sponsors'));
   	 
   }
// DIRECTOR PAGE
  public function director(){
    $directors=director::get();
     $sponsors=sponsor::where('sponsor_status',1)->get();
    return view('frontend.directors',compact('directors','sponsors'));
  }

public function director_single($id){
        $director_profile=director::where('director_id', $id)->FirstorFail();
        $sponsors=sponsor::where('sponsor_status',1)->get();
      return view('frontend.director-profile',compact('director_profile','sponsors'));
   }

// PARTNER PAGE

  public function partners(){
      $sponsors=sponsor::where('sponsor_status',1)->get();
       return view('frontend.partners',compact('sponsors'));
  }

 // EVENTS PAGE

     public function eventpage(){
      $events=event::orderBy('event_id','DESC')->where('event_status',1)->paginate(6);
     $sponsors=sponsor::where('sponsor_status',1)->get();
      return view('frontend.events',compact('events','sponsors'));
    }
  public function event_single($id){
     $eventsingle=event::where('event_id', $id)->FirstorFail();
     $sponsors=sponsor::where('sponsor_status',1)->get();
      return view('frontend.events-single',compact('eventsingle','sponsors'));
   }

   // NOTICE
  public function viewallnotice(){
   	    $viewallnotice=notice::orderBy('notice_id','DESC')->where('notice_status',1)->paginate(6);
        $sponsors=sponsor::where('sponsor_status',1)->get();
    	return view('frontend.notice',compact('viewallnotice','sponsors'));
   }
   public function notice_single($id){
        $view_notice=notice::where('notice_id', $id)->FirstorFail();
         $sponsors=sponsor::where('sponsor_status',1)->get();
      return view('frontend.notice-single',compact('view_notice','sponsors'));
   }


   public function viewphotogallery(){
         $view_gallery=gallerycategory::orderBy('gallerycat_id','DESC')->paginate(9);
         $sponsors=sponsor::where('sponsor_status',1)->get();
          return view('frontend.photogallery',compact('view_gallery','sponsors'));
   }


    public function single_gallery($id){
        $show_gallery = photogallery::where('pgallery_status',1)->where('pgallery_cat',$id)->paginate(9);
        $recent_gallery = gallerycategory::orderBy('gallerycat_id','DESC')->take(10)->get();
        $sponsors=sponsor::where('sponsor_status',1)->get();
        return view('frontend.single-photgallery',compact('show_gallery','recent_gallery','sponsors'));
   }

/****** Video Gallery ***********/
public function getvideogallery(){
    $get_videos=videogallery::orderBy('id','DESC')->paginate(9);
     return view('frontend.videogallery',compact('get_videos'));
}

   // NEWS
    public function viewallnews(){
        $viewallnews=latestnews::orderBy('latestnews_id','DESC')->where('latestnews_status',1)->paginate(6);
         $sponsors=sponsor::where('sponsor_status',1)->get();
      return view('frontend.news',compact('viewallnews','sponsors'));
   }
   public function news_single($id){
    $viewNews=latestnews::where('latestnews_id', $id)->FirstorFail();
      $sponsors=sponsor::where('sponsor_status',1)->get();
      return view('frontend.news-single',compact('viewNews','sponsors'));
   }

 // welcome single 
   public function welcome_single($id){
    $welcome_single=welcomemsg::where('id', 1)->FirstorFail();
    return view('frontend.welcome-single',compact('welcome_single'));
   }

   // welcome single 
   public function message_view($id){
    $message_view=message::where('id', $id)->FirstorFail();
    return view('frontend.message-view',compact('message_view'));
   }


   // about
   public function aboutus(){
    $aboutinfo=aboutpage::first();
     return view('frontend.about',compact('aboutinfo'));
   } 
       // objective
   public function objective(){
    $objective=objectivepage::first();
     return view('frontend.objective',compact('objective'));
   }   

     // ourmission
   public function ourmission(){
    $missioninfo=mission::first();
     return view('frontend.ourmission',compact('missioninfo'));
   }  

/*****************************
        CONTACT US
********************************/
   public function contact(){
     return view('frontend.contact');
   }
  public function insertcontact(Request $request){
         $this->validate($request,[
        'contact_name' => ' required',
        'contact_email' => ' required',
        'contact_message' => ' required',
          ],[
        'contact_name.required' => 'Contact name is required',
        'contact_email.required' => 'Contact Email is required',
        'contact_message.required' => 'Contact Message is required',
          ]);

        $insertcontact=contactus::insertGetId([
         'contact_name' =>$_POST['contact_name'],
         'contact_email' =>$_POST['contact_email'],
         'contact_message' =>$_POST['contact_message'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);

      if($insertcontact){
        Session::flash('status','value');
          return redirect('contact');
      }else{
        Session::flash('error','value');
          return redirect('contact');
      }
   }



   // newslatter view
   public function view_newslatter(){
     $view_newslatter = newslatter::first();
    return view('frontend.view-newslatter',compact('view_newslatter'));
   }

  




     // RIGHT AND PREVILLAGE
   public function rp(){
    $rppageinfo=rppage::first();
     return view('frontend.RP',compact('rppageinfo'));
   }



}
