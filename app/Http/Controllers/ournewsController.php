<?php

namespace App\Http\Controllers;
use App\ournews;
use Image;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;

class ournewsController extends Controller
{
   public function __construct(){
  $this->middleware('auth');
}
  public function allnews(){
  	$ourallnews=ournews::get();
    return view('backend.ournews.ourallnews',compact('ourallnews'));


}

	public function addournews(){
		 return view('backend.ournews.addournews');
	}
    /**************************************************************
						Add our news
  /**************************************************************/

  public function insertournews(Request $request){
   	     $this->validate($request,[
        'ournews_photo' => 'required|mimes:jpeg,jpg,png,gif',
          ],[
        'ournews_photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
          ]);

        $insertournews=ournews::insertGetId([
         'ournews_photo' => 'news.jpg',
         'ournews_link' => $_POST['ournews_link'],
         'ournews_status' => $_POST['ournews_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);
     if($request->hasFile('ournews_photo')){
       $image=$request->file('ournews_photo');
       $imageName='ournews_'.$insertournews.'_'.time().'.'.$image->getClientOriginalExtension();
       Image::make($image)->save(base_path('public/assets/uploads/ournews/'.$imageName));
       ournews::where('ournews_id',$insertournews)->update([
         'ournews_photo' =>$imageName,
       ]);
      if($insertournews){
        Session::flash('status','value');
          return redirect('addournews');
      }else{
        Session::flash('error','value');
          return redirect('addournews');
      }
   }
  }  






 public function Enactive_ournews($id){
    $enactive=ournews::where('ournews_status',1)->where('ournews_id',$id)->update([
      'ournews_status' => 0,
    ]);
    if($enactive){
      return redirect(route('allnews'));
    }
  }
  public function active_ournews($id){
  $active=ournews::where('ournews_status',0)->where('ournews_id',$id)->update([
    'ournews_status' => 1,
  ]);
  if($active){
    return redirect(route('allnews'));
  }
 }


// EDIT OUR NEWWS

 public function editournews($id){
    $editoursnews =ournews::where('ournews_id',$id)->FirstorFail();
    return view ('backend.ournews.editournews',compact('editoursnews'));
     }


// UPDATE OUR NEWS
   public function updateournews(Request $request,$id){
      $image_path=ournews::where('ournews_id', $id)->get();
        $this->validate($request,[
        'ournews_photo' => 'mimes:jpeg,jpg,png,gif',
          ],[
            'ournews_photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
          ]);

       if(!empty($_FILES['ournews_photo']['name'])){
         $updateournews=ournews::where('ournews_id',$id)->update([
         'ournews_photo' => 'news.jpg',
         'ournews_link' => $_POST['ournews_link'],
         'ournews_status' => $_POST['ournews_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
        ]);
      
       if($request->hasFile('ournews_photo')){
         $image=$request->file('ournews_photo');
         $imageName='ournews'.'updated'.'_'.time().'.'.$image->getClientOriginalExtension();
         $unlik=Image::make($image)->save(public_path('/assets/uploads/ournews/'.$imageName));
          
         ournews::where('ournews_id',$id)->update([
           'ournews_photo' =>$imageName,
         ]);
         foreach($image_path as $img_real_path){
           unlink(public_path().'/assets/uploads/ournews/'.$img_real_path->ournews_photo);
 
       }
      }

    }else{

        $updateournews=ournews::where('ournews_id',$id)->update([
         'ournews_link' => $_POST['ournews_link'],
         'ournews_status' => $_POST['ournews_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
        ]);

    }
     

  if($updateournews){
          Session::flash('status','value');
            return redirect(route('allnews'));
        }else{
          Session::flash('error','value');
            return redirect('allnews');
        }
 
   
   }






  /**************************************************************
						Delete slider
  /**************************************************************/

  public function deleteournews($id){
    $image_path=ournews::where('ournews_id', $id)->get();
     $delete_ournews=ournews::where('ournews_id',$id)->delete();
 
     foreach($image_path as $img_real_path){
       unlink(public_path().'/assets/uploads/ournews/'.$img_real_path->ournews_photo);
      return redirect(route('allnews'))->with('delete_news','Data Deleted Sucessfuly');
 
     }  
  }








}
