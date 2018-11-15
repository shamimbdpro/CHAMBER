<?php

namespace App\Http\Controllers;
use App\videogallery;
use Illuminate\Http\Request;
use Image;
use Session;
use Carbon\Carbon;
class videogalleryController extends Controller
{

public function __construct(){
  $this->middleware('auth');
}
  
    public function videogallery(){
    	$videogallerys=videogallery::get();
    	return view('backend.videogallery.allvideogallery',compact('videogallerys'));
    }

  public function addvideovideogallery(){
  	return view('backend.videogallery.addvideogallery');
  }


  public function addvideo(Request $request){
		   $this->validate($request,[
	        'video_title' => ' required',
	        'video_link' => ' required',
	          ],[
	        'video_title.required' => 'Video Title is required',
	        'video_link.required' => 'Video Id is required',
	          ]);
		 $url=$_POST['video_link'];
		 $fetch=explode("v=", $url);
		 $videoid=$fetch[1];
        $addvideo=videogallery::insertGetId([
         'video_thumb' => $videoid,
         'video_title' => $_POST['video_title'],
         'video_link' => $_POST['video_link'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);

 
      if($addvideo){
        Session::flash('status','value');
          return redirect('addvideovideogallery');
      }else{
        Session::flash('error','value');
          return redirect('addvideovideogallery');
      }
   
  } 


public function editgallery($id){
	$getgalleryInfos=videogallery::where('id',$id)->FirstorFail();
	return view('backend.videogallery.editvideogallery',compact('getgalleryInfos'));
}


  public function updatevgallery(Request $request,$id){
		   $this->validate($request,[
	        'video_title' => ' required',
	        'video_link' => ' required',
	          ],[
	        'video_title.required' => 'Video Title is required',
	        'video_link.required' => 'Video Id is required',
	          ]);
		 $url=$_POST['video_link'];
		 $fetch=explode("v=", $url);
		 $videoid=$fetch[0];
        $updatevgallery=videogallery::where('id',$id)->update([
         'video_thumb' => $videoid,
         'video_title' => $_POST['video_title'],
         'video_link' => $_POST['video_link'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);

 
      if($updatevgallery){
        Session::flash('updategallery','value');
          return redirect('videogallery');
      }else{
        Session::flash('error','value');
          return redirect('videogallery');
      }
   
  } 




 public function deletevideo($id){
 	$deletevideo=videogallery::where('id',$id)->delete();
	  if($deletevideo){
	        Session::flash('deletevideo','Video Deleted Success');
	          return redirect(route('allvideogallery'));
	      }
 }




}
