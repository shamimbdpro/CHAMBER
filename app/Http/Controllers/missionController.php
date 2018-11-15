<?php

namespace App\Http\Controllers;
use App\mission;
use Session;
use Image;
use Carbon\Carbon;
use Illuminate\Http\Request;

class missionController extends Controller
{
public function __construct(){
  $this->middleware('auth');
}


  
   public function missionpage(){
    $mission=mission::first();
    return view('backend.pages.missoinpage',compact('mission'));
}


public function updatemission(Request $request){
        $missininfo=mission::first();
           $this->validate($request,[
            'mission_ban' => 'mimes:jpeg,jpg,png,gif',
              ],[
            'mission_ban.mimes' => 'image format allow only jpeg,jpg,png,gif',
            ]);
       if(!empty($_FILES['mission_ban']['name'])){
          $updatemission=mission::where('id',$missininfo->id)->update([
            'mission_ban' => 'mission_ban.jpg',
            'mission_des' =>$_POST['mission_des'],
            'Created_at' => Carbon::now()->toDateTimeString(),
           ]);
      
       if($request->hasFile('mission_ban')){
         $image=$request->file('mission_ban');
         $imageName='missoin'.'_'.time().'.'.$image->getClientOriginalExtension();
        image::make($image)->resize('830','200')->save(base_path('public/assets/uploads/pages/'.$imageName));
          
         mission::where('id',$missininfo->id)->update([
           'mission_ban' =>$imageName,
         ]);
        if (file_exists(public_path().'/assets/uploads/pages/'.$missininfo->mission_ban)) {
             unlink(public_path().'/assets/uploads/pages/'.$missininfo->mission_ban);
         }else{
         return redirect(route('missionpage'));
         }
 
      }
    }else{
        $updatemission=mission::where('id',$missininfo->id)->update([
         'mission_des' =>$_POST['mission_des'],
         'Created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
        if($updatemission){
          Session::flash('status','value');
          return redirect(route('missionpage'));
        }else{
          Session::flash('error','value');
            return redirect(route('missionpage'));
        }
   
   }


// about page banner enactive active
 public function disablemission($id){
    $enactive=mission::where('mission_status',1)->where('id',$id)->update([
      'mission_status' => 0,
    ]);
    if($enactive){
      return redirect(route('missionpage'));
    }
  }
  public function enablemission($id){
    $active=mission::where('mission_status',0)->where('id',$id)->update([
      'mission_status' => 1,
    ]);
    if($active){
      return redirect(route('missionpage'));
    }
 }




}
