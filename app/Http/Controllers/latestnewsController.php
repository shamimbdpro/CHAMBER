<?php

namespace App\Http\Controllers;
use Image;
use App\latestnews;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;

class latestnewsController extends Controller
{
  public function __construct(){
  $this->middleware('auth');
}
    public function latestnews(){
     $latestnews=latestnews::orderBy('latestnews_id','DESC')->get();
     return view('backend.latestnews.allnews',compact('latestnews'));
    }


   public function addnews(){
   	 return view('backend.latestnews.addnews');
   }




   // INSERT News


  public function insertnews(Request $request){ 	

  $targetfolder = base_path('public/assets/uploads/latestnews/');
  $this->validate($request,[
  	    'latestnews_title' => 'required',
        'latestnews_file' => 'mimes:pdf,jpeg,jpg,png,gif',
      
          ],[
        'latestnews_title.required' => 'The title is required',
        'latestnews_file.mimes' => 'allow only pdf,jpeg,jpg,png,gif',
          ]);


        $insertnews=latestnews::insertGetId([
         'latestnews_title' => $_POST['latestnews_title'],
         'latestnews_des' =>$_POST['latestnews_des'],
         'latestnews_file' =>'news.jpg',
         'latestnews_status' => $_POST['latestnews_status'], 
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);

   if($request->hasFile('latestnews_file')){
       $image=$request->file('latestnews_file');
       $imageName='news_'.$insertnews.'_'.time().'.'.$image->getClientOriginalExtension();

        $insernotice1=move_uploaded_file($_FILES['latestnews_file']['tmp_name'], $targetfolder.$imageName);

       latestnews::where('latestnews_id',$insertnews)->update([
         'latestnews_file' =>$imageName,
       ]);
   
   }

    if($insertnews){
        Session::flash('status','value');
          return redirect('addnews');
      }else{
        Session::flash('error','value');
          return redirect('addnews');
      }

  }  



// LATEST NEWS PUBLIC AND UNPUBLISH


 public function unpublish_news($id){
    $enactive=latestnews::where('latestnews_status',1)->where('latestnews_id',$id)->update([
      'latestnews_status' => 0,
    ]);
    if($enactive){
      return redirect(route('latestnews'));
    }
  }
  public function publish_news($id){
    $active=latestnews::where('latestnews_status',0)->where('latestnews_id',$id)->update([
      'latestnews_status' => 1,
    ]);
    if($active){
      return redirect(route('latestnews'));
    }
 }





// EDIT NEWS 
  public function editnews($id){
    $editnews =latestnews::where('latestnews_id',$id)->FirstorFail();
    return view ('backend.latestnews.editnews',compact('editnews'));
  }












// UPDATE NEWS

  public function updatenews(Request $request,$id){     
      $targetfolder = base_path('public/assets/uploads/latestnews/');
     $imagepath=latestnews::where('latestnews_id', $id)->FirstorFail();
  $this->validate($request,[
        'latestnews_title' => 'required',
        'latestnews_file' => 'mimes:pdf,jpeg,jpg,png,gif',
      
          ],[
        'latestnews_title.required' => 'The title is required',
        'latestnews_file.mimes' => 'allow only pdf,jpeg,jpg,png,gif',
          ]);
if(!empty($_FILES['latestnews_file']['name'])){
        $updatenews=latestnews::where('latestnews_id',$id)->update([
         'latestnews_title' => $_POST['latestnews_title'],
         'latestnews_des' =>$_POST['latestnews_des'],
         'latestnews_file' =>'news.jpg',
         'latestnews_status' => $_POST['latestnews_status'], 
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);

   if($request->hasFile('latestnews_file')){
       $image=$request->file('latestnews_file');
       $imageName='updatenews'.$updatenews.'_'.time().'.'.$image->getClientOriginalExtension();
        $insernotice1=move_uploaded_file($_FILES['latestnews_file']['tmp_name'], $targetfolder.$imageName);
         if (file_exists($targetfolder.$imagepath->latestnews_file)) {
          unlink($targetfolder.$imagepath->latestnews_file);
        }
       latestnews::where('latestnews_id',$id)->update([
         'latestnews_file' =>$imageName,
       ]);
   
   }
 }else{

       $updatenews=latestnews::where('latestnews_id',$id)->update([
         'latestnews_title' => $_POST['latestnews_title'],
         'latestnews_des' =>$_POST['latestnews_des'],
         'latestnews_status' => $_POST['latestnews_status'], 
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);
 }




    if($updatenews){
        Session::flash('status','value');
          return redirect('latestnews');
      }else{
        Session::flash('error','value');
          return redirect('latestnews');
      }

  }  


// DELTE NOTICE

public function deletenews($id){
     $image_path=latestnews::where('latestnews_id', $id)->FirstorFail();
     $delete_ournews=latestnews::where('latestnews_id',$id)->delete();
     
     if (file_exists(public_path().'/assets/uploads/latestnews/'.$image_path->latestnews_file)) {
       unlink(public_path().'/assets/uploads/latestnews/'.$image_path->latestnews_file);
        return redirect(route('latestnews'))->with('deletenotice','News Deleted Sucessfuly');
     }else{
       return redirect(route('latestnews'))->with('deletenotice','News Deleted Sucessfuly');
     }
  }








}
