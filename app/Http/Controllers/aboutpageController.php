<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aboutpage;
use Session;
use Image;
use Carbon\Carbon;
class aboutpageController extends Controller
{
public function __construct(){
  $this->middleware('auth');
}
  
    public function page(){
    $aboutinfo=aboutpage::first();
    return view('backend.pages.aboutpage',compact('aboutinfo'));
}

   public function updateaboutinfo(Request $request){
        $pageinfo=aboutpage::first();
           $this->validate($request,[
            'about_ban' => 'mimes:jpeg,jpg,png,gif',
              ],[
            'about_ban.mimes' => 'image format allow only jpeg,jpg,png,gif',
            ]);
       if(!empty($_FILES['about_ban']['name'])){
          $updateaboutinfo=aboutpage::where('id',$pageinfo->id)->update([
            'about_ban' => 'about_ban.jpg',
            'about_des' =>$_POST['about_des'],
            'Created_at' => Carbon::now()->toDateTimeString(),
           ]);
      
       if($request->hasFile('about_ban')){
         $image=$request->file('about_ban');
         $imageName='aboutban'.'_'.time().'.'.$image->getClientOriginalExtension();
        image::make($image)->resize('830','200')->save(base_path('public/assets/uploads/pages/'.$imageName));
          
         aboutpage::where('id',$pageinfo->id)->update([
           'about_ban' =>$imageName,
         ]);
        if (file_exists(public_path().'/assets/uploads/pages/'.$pageinfo->about_ban)) {
             unlink(public_path().'/assets/uploads/pages/'.$pageinfo->about_ban);
         }else{
         return redirect(route('pages'));
         }
 
      }
    }else{
        $updateaboutinfo=aboutpage::where('id',$pageinfo->id)->update([
         'about_des' =>$_POST['about_des'],
         'Created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
        if($updateaboutinfo){
          Session::flash('status','value');
          return redirect(route('pages'));
        }else{
          Session::flash('error','value');
            return redirect(route('pages'));
        }
   
   }


// about page banner enactive active
 public function disabblebanner($id){
    $enactive=aboutpage::where('ban_status',1)->where('id',$id)->update([
      'ban_status' => 0,
    ]);
    if($enactive){
      return redirect(route('pages'));
    }
  }
  public function enablebanner($id){
    $active=aboutpage::where('ban_status',0)->where('id',$id)->update([
      'ban_status' => 1,
    ]);
    if($active){
      return redirect(route('pages'));
    }
 }








}
