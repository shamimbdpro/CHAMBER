<?php

namespace App\Http\Controllers;
use Session;
use Carbon\Carbon;
use Image;
use App\message;
use Illuminate\Http\Request;

class messageController extends Controller
{

public function __construct(){
  $this->middleware('auth');
}


	 /****************************************
                ALL MESSAGE
	 **************************************/
    public function messages(){
     $all_messages=message::orderBy('id','DESC')->get();
     return view('backend.message.allmessage',compact('all_messages'));
    }

    /********************************
          ADD MESSAGE
    *********************************/
    public function addmessage(){
     return view('backend.message.addmessage');
    }


   /********************************************
         INSERT MESSAGE
   **********************************************/

  public function insetmessage(Request $request){
   	     $this->validate($request,[
        'message_photo' => 'required|mimes:jpeg,jpg,png,gif',
        'message_title' => 'required',
        'message_name' => 'required',
        'message_des' => 'required',
        'message_Designation' => 'required',
          ],[
        'message_photo.required' => 'iamge required',
        'message_photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
        'message_title.required' => 'Message Title is required',
        'message_name.required' => 'Name is required',
        'message_des.required' => 'Message Description is required',
        'message_Designation.required' => 'Message Designation is required',
          ]);

        $insetmessage=message::insertGetId([
         'message_photo' => 'message_photo.jpg',
         'message_title' => $_POST['message_title'],
         'message_name' => $_POST['message_name'],
         'message_des' => $_POST['message_des'],
         'message_Designation' => $_POST['message_Designation'],
         'message_status' => $_POST['message_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);
     if($request->hasFile('message_photo')){
       $image=$request->file('message_photo');
       $imageName='slider_'.$insetmessage.'_'.time().'.'.$image->getClientOriginalExtension();
       Image::make($image)->resize('300','300')->save(base_path('public/assets/uploads/message/'.$imageName));
       message::where('id',$insetmessage)->update([
         'message_photo' =>$imageName,
       ]);
      if($insetmessage){
        Session::flash('status','value');
          return redirect('addmessage');
      }else{
        Session::flash('error','value');
          return redirect('addmessage');
      }
   }
  }   
/*******************************************
           EDIT MESSAGE
/********************************************/
  public function editmessage($id){
    $editmessage =message::where('id',$id)->FirstorFail();
    return view ('backend.message.editmessage',compact('editmessage'));
  }

/*******************************************
           UPDATE MESSAGE
/********************************************/
 public function updatemessage(Request $request,$id){
 	 $imagepath=message::where('id', $id)->FirstorFail();
 	    $targetfolder = base_path('public/assets/uploads/message/');
   	     $this->validate($request,[
        'message_photo' => 'mimes:jpeg,jpg,png,gif',
        'message_title' => 'required',
        'message_name' => 'required',
        'message_des' => 'required',
        'message_Designation' => 'required',
          ],[
        'message_photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
        'message_title.required' => 'Message Title is required',
        'message_name.required' => 'Name is required',
        'message_des.required' => 'Message Description is required',
        'message_Designation.required' => 'Message Designation is required',
          ]);
if(!empty($_FILES['message_photo']['name'])){
        $updatemessage=message::where('id',$id)->update([
         'message_photo' => 'message_photo.jpg',
         'message_title' => $_POST['message_title'],
         'message_name' => $_POST['message_name'],
         'message_des' => $_POST['message_des'],
         'message_Designation' => $_POST['message_Designation'],
         'message_status' => $_POST['message_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);
     if($request->hasFile('message_photo')){
       $image=$request->file('message_photo');
       $imageName='updateMessage_'.$updatemessage.'_'.time().'.'.$image->getClientOriginalExtension();
       Image::make($image)->resize('300','300')->save(base_path('public/assets/uploads/message/'.$imageName));
           if (file_exists($targetfolder.$imagepath->message_photo)) {
          unlink($targetfolder.$imagepath->message_photo);
        }
       message::where('id',$updatemessage)->update([
         'message_photo' =>$imageName,
       ]);
   }
}else{
    $updatemessage=message::where('id',$id)->update([
         'message_title' => $_POST['message_title'],
         'message_name' => $_POST['message_name'],
         'message_des' => $_POST['message_des'],
         'message_Designation' => $_POST['message_Designation'],
         'message_status' => $_POST['message_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);

}

      if($updatemessage){
        Session::flash('status','value');
          return redirect(route('messages'));
      }else{
        Session::flash('error','value');
      return redirect(route('messages'));
      }

  }   



  /**************************************************************
						PUBLICATION STATUS
  /**************************************************************/

 public function unpublish($id){
    $enactive=message::where('message_status',1)->where('id',$id)->update([
      'message_status' => 0,
    ]);
    if($enactive){
      return redirect(route('messages'));
    }
  }
  public function publish($id){
    $active=message::where('message_status',0)->where('id',$id)->update([
      'message_status' => 1,
    ]);
    if($active){
      return redirect(route('messages'));
    }
 }








  /**************************************************************
						DELETE MESSAGE
  /**************************************************************/

  public function deletemessage($id){
    $image_path=message::where('id', $id)->FirstorFail();
     $delete_slider=message::where('id',$id)->delete();
 
      if (file_exists(public_path().'/assets/uploads/message/'.$image_path->message_photo)) {
       unlink(public_path().'/assets/uploads/message/'.$image_path->message_photo);
        return redirect(route('messages'))->with('delete_slider','Data Deleted Sucessfuly');
 
     }else{
       return redirect(route('messages'))->with('deletemessage','Message Deleted Sucessfuly');
     }  
  }













}
