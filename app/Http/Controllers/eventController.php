<?php

namespace App\Http\Controllers;
use App\event;
use Illuminate\Http\Request;
use Image;
use Session;
use Carbon\Carbon;
class eventController extends Controller
{
public function __construct(){
  $this->middleware('auth');
}
/* ****************************
    SHOW EVENT
*************************** */
  public function events(){
  	  $events=event::orderBy('event_id','DESC')->get();
  	return view('backend.events.allevent',compact('events'));
  }
/* ****************************
       ADD EVENT
*************************** */
  public function addevent(){
  	return view('backend.events.addevent');
  }

/* ****************************
      INSERT EVENT
*************************** */

  public function inser_event(Request $request){
   	     $this->validate($request,[
        'event_title' => 'required',
        'event_des' => 'required',
        'event_date' => 'required',
        'event_time' => 'required',
        'event_photo' => ' required|mimes:jpeg,jpg,png,gif|max:2024',
          ],[
        'event_title.required' => 'Event Title is required',
        'event_des.required' => 'Event Description is required',
        'event_date.required' => 'Event Date is required',
        'event_time.required' => 'Event Time is required',
        'event_photo.required' => 'Event image is required',
        'event_photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
          ]);
   // echo date('h:i A', strtotime($_POST['event_time']));
   // exit();
        $inser_event=event::insertGetId([
         'event_title' =>$_POST['event_title'],
         'event_des' =>$_POST['event_des'],
         'event_date' =>$_POST['event_date'],
         'event_time' =>date('h:i A', strtotime($_POST['event_time'])),
         'event_photo' => 'event_photo.JPG',
         'event_status' =>$_POST['event_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);
     if($request->hasFile('event_photo')){
       $image=$request->file('event_photo');
       $imageName='Event_'.$inser_event.'_'.time().'.'.$image->getClientOriginalExtension();
       Image::make($image)->resize('800','450')->save(base_path('public/assets/uploads/events/'.$imageName));
       event::where('event_id',$inser_event)->update([
         'event_photo' =>$imageName,
       ]);
      if($inser_event){
        Session::flash('status','value');
          return redirect('addevent');
      }else{
        Session::flash('error','value');
          return redirect('addevent');
      }
   }
  }   

/* ****************************
      ACTIVE AND DEACTIVE EVENT
*************************** */

 public function unpublish_event($id){
    $unpublsh=event::where('event_status',1)->where('event_id',$id)->update([
      'event_status' => 0,
    ]);
    if($unpublsh){
      return redirect(route('events'));
    }
  }
  public function publish_event($id){
    $publish=event::where('event_status',0)->where('event_id',$id)->update([
      'event_status' => 1,
    ]);
    if($publish){
      return redirect(route('events'));
    }
 }


/* ****************************
     EDIT EVENT
****************************** */
  public function editevent($id){
    $editevent =event::where('event_id',$id)->FirstorFail();
    return view ('backend.events.editevent',compact('editevent'));
  }


/* ****************************
    UPDATE EVENT
****************************** */

  public function updateEvent(Request $request,$id){     
      $targetfolder = base_path('public/assets/uploads/events/');
     $imagepath=event::where('event_id', $id)->FirstorFail();
 	     $this->validate($request,[
        'event_title' => 'required',
        'event_des' => 'required',
        'event_date' => 'required',
        'event_time' => 'required',
        'event_photo' => 'mimes:jpeg,jpg,png,gif|max:2024',
          ],[
        'event_title.required' => 'Event Title is required',
        'event_des.required' => 'Event Description is required',
        'event_date.required' => 'Event Date is required',
        'event_time.required' => 'Event Time is required',
        'event_photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
          ]);
if(!empty($_FILES['event_photo']['name'])){
        $updateevent=event::where('event_id',$id)->update([
         'event_title' =>$_POST['event_title'],
         'event_des' =>$_POST['event_des'],
         'event_date' =>$_POST['event_date'],
         'event_time' =>date('h:i A', strtotime($_POST['event_time'])),
         'event_photo' => 'event_photo.JPG',
         'event_status' =>$_POST['event_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);  
   if($request->hasFile('event_photo')){
       $image=$request->file('event_photo');
       $imageName='updateevent'.$updateevent.'_'.time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize('800','450')->save(public_path('/assets/uploads/events/'.$imageName));
         if (file_exists($targetfolder.$imagepath->event_photo)) {
             unlink($targetfolder.$imagepath->event_photo);
        }
       event::where('event_id',$id)->update([
         'event_photo' =>$imageName,
       ]);
    }
 }else{
       $updateevent=event::where('event_id',$id)->update([
         'event_title' =>$_POST['event_title'],
         'event_des' =>$_POST['event_des'],
         'event_date' =>$_POST['event_date'],
          'event_time' =>date('h:i A', strtotime($_POST['event_time'])),
         'event_status' =>$_POST['event_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);
 }

    if($updateevent){
        Session::flash('status','value');
          return redirect('events');
      }else{
        Session::flash('error','value');
          return redirect('events');
      }

  }  


  /**************************************************************
				DELETE EVENT
  /**************************************************************/

  public function delete_event($id){
    $image_path=event::where('event_id', $id)->FirstorFail();
     event::where('event_id',$id)->delete();
 
      if (file_exists(public_path().'/assets/uploads/events/'.$image_path->event_photo)) {
       unlink(public_path().'/assets/uploads/events/'.$image_path->event_photo);
        return redirect(route('events'))->with('delete_event','Event Deleted Sucessfuly');
 
     }else{
       return redirect(route('events'))->with('delete_event','Event Deleted Sucessfuly');
     }  
  }




}
