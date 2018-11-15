<?php

namespace App\Http\Controllers;
use App\objectivepage;
use Session;
use Image;
use Carbon\Carbon;
use Illuminate\Http\Request;

class objectiveController extends Controller
{

public function __construct(){
  $this->middleware('auth');
}

  
   public function objectivepage(){
    $objective=objectivepage::first();
    return view('backend.pages.objectivepage',compact('objective'));
}



   public function updateobinfo(Request $request){
        $obinfo=objectivepage::first();
           $this->validate($request,[
            'ob_ban' => 'mimes:jpeg,jpg,png,gif',
              ],[
            'ob_ban.mimes' => 'image format allow only jpeg,jpg,png,gif',
            ]);
       if(!empty($_FILES['ob_ban']['name'])){
          $updateobinfo=objectivepage::where('id',$obinfo->id)->update([
            'ob_ban' => 'ob_ban.jpg',
            'ob_des' =>$_POST['ob_des'],
            'Created_at' => Carbon::now()->toDateTimeString(),
           ]);
      
       if($request->hasFile('ob_ban')){
         $image=$request->file('ob_ban');
         $imageName='obectiveban'.'_'.time().'.'.$image->getClientOriginalExtension();
        image::make($image)->resize('830','200')->save(base_path('public/assets/uploads/pages/'.$imageName));
          
         objectivepage::where('id',$obinfo->id)->update([
           'ob_ban' =>$imageName,
         ]);
        if (file_exists(public_path().'/assets/uploads/pages/'.$obinfo->ob_ban)) {
             unlink(public_path().'/assets/uploads/pages/'.$obinfo->ob_ban);
         }else{
         return redirect(route('objectivepage'));
         }
 
      }
    }else{
        $updateobinfo=objectivepage::where('id',$obinfo->id)->update([
         'ob_des' =>$_POST['ob_des'],
         'Created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
        if($updateobinfo){
          Session::flash('status','value');
          return redirect(route('objectivepage'));
        }else{
          Session::flash('error','value');
            return redirect(route('objectivepage'));
        }
   
   }


// about page banner enactive active
 public function disableob($id){
    $enactive=objectivepage::where('ob_status',1)->where('id',$id)->update([
      'ob_status' => 0,
    ]);
    if($enactive){
      return redirect(route('objectivepage'));
    }
  }
  public function enableob($id){
    $active=objectivepage::where('ob_status',0)->where('id',$id)->update([
      'ob_status' => 1,
    ]);
    if($active){
      return redirect(route('objectivepage'));
    }
 }











}
