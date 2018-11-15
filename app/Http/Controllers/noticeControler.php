<?php

namespace App\Http\Controllers;
use App\notice;
use Image;
use Illuminate\Http\Request;
use Session;

use Carbon\Carbon;

class noticeControler extends Controller
{
  public function __construct(){
  $this->middleware('auth');
}
  public function notice(){
    $notices=notice::orderBy('notice_id','DESC')->get();
  	return view('backend.notice.allnotice',compact('notices'));
  }

  public function addnotice(){
  	return view('backend.notice.addnotice');
  }

   // INSERT NOTICE


  public function insernotice(Request $request){ 	   
  $targetfolder = base_path('public/assets/uploads/notice/');
  $this->validate($request,[
        'notice_file' => 'mimes:pdf,jpeg,jpg,png,gif',
        'notice_title' => 'required',
          ],[
        'notice_title.required' => 'The title is required',
        'notice_file.mimes' => 'allow only pdf,jpeg,jpg,png,gif',
          ]);


        $insernotice=notice::insertGetId([
         'notice_title' => $_POST['notice_title'],
         'notice_des' => htmlspecialchars_decode($_POST['notice_des']),

         'notice_status' => $_POST['notice_status'],
         'notice_file' =>'Notice.jpg',

         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);

   if($request->hasFile('notice_file')){
       $image=$request->file('notice_file');
       $imageName='notice_'.$insernotice.'_'.time().'.'.$image->getClientOriginalExtension();
        $insernotice1=move_uploaded_file($_FILES['notice_file']['tmp_name'], $targetfolder.$imageName);
       notice::where('notice_id',$insernotice)->update([
         'notice_file' =>$imageName,
       ]);
   
   }

    if($insernotice){
        Session::flash('status','value');
          return redirect('addnotice');
      }else{
        Session::flash('error','value');
          return redirect('addnotice');
      }

  }  




// EDIT NOTICE 
  public function editnotice($id){
    $editnotice =notice::where('notice_id',$id)->FirstorFail();
    return view ('backend.notice.editnotice',compact('editnotice'));
  }


// update notice

  public function updatenotice(Request $request,$id){     
  $targetfolder = base_path('public/assets/uploads/notice/');
     $imagepath=notice::where('notice_id', $id)->FirstorFail();
  $this->validate($request,[
        'notice_file' => 'mimes:pdf,jpeg,jpg,png,gif',
        'notice_title' => 'required',
          ],[
        'notice_title.required' => 'The title is required',
        'notice_file.mimes' => 'allow only pdf,jpeg,jpg,png,gif',
          ]);
if(!empty($_FILES['ournews_photo']['name'])){
        $updatenotice=notice::where('notice_id',$id)->update([
         'notice_title' => $_POST['notice_title'],
         'notice_des' => htmlspecialchars_decode($_POST['notice_des']),
         'notice_status' => $_POST['notice_status'],
         'notice_file' =>'new.jpg',
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);

   if($request->hasFile('notice_file')){
       $image=$request->file('notice_file');
       $imageName='updatenotice_'.$updatenotice.'_'.time().'.'.$image->getClientOriginalExtension();
        $insernotice1=move_uploaded_file($_FILES['notice_file']['tmp_name'], $targetfolder.$imageName);
         if (file_exists(public_path().'/assets/uploads/notice/'.$imagepath->notice_file)) {
          unlink(public_path().'/assets/uploads/notice/'.$imagepath->notice_file);
        }
       notice::where('notice_id',$id)->update([
         'notice_file' =>$imageName,
       ]);
   
   }
 }else{

       $updatenotice=notice::where('notice_id',$id)->update([
         'notice_title' => $_POST['notice_title'],
         'notice_des' => htmlspecialchars_decode($_POST['notice_des']),
         'notice_status' => $_POST['notice_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);
 }




    if($updatenotice){
        Session::flash('status','value');
          return redirect('notice');
      }else{
        Session::flash('error','value');
          return redirect('notice');
      }

  }  



// notice enactive and active


 public function Enactive_notice($id){
    $enactive=notice::where('notice_status',1)->where('notice_id',$id)->update([
      'notice_status' => 0,
    ]);
    if($enactive){
      return redirect(route('notice'));
    }
  }
  public function active_notice($id){
    $active=notice::where('notice_status',0)->where('notice_id',$id)->update([
      'notice_status' => 1,
    ]);
    if($active){
      return redirect(route('notice'));
    }
 }



// DELTE NOTICE

public function deletenotice($id){
     $image_path=notice::where('notice_id', $id)->FirstorFail();
     $delete_ournews=notice::where('notice_id',$id)->delete();
     
     if (file_exists(public_path().'/assets/uploads/notice/'.$image_path->notice_file)) {
       unlink(public_path().'/assets/uploads/notice/'.$image_path->notice_file);
        return redirect(route('notice'))->with('deletenotice','Notice Deleted Sucessfuly');
     }else{
       return redirect(route('notice'))->with('deletenotice','Notice Deleted Sucessfuly');
     }
  }








}
