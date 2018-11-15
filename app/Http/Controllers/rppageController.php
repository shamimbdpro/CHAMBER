<?php

namespace App\Http\Controllers;
use App\rppage;
use Session;
use Image;
use Carbon\Carbon;

use Illuminate\Http\Request;

class rppageController extends Controller
{
public function __construct(){
  $this->middleware('auth');
}

   public function rppage(){
    $rppageinfo=rppage::first();
    return view('backend.pages.rppage',compact('rppageinfo'));
}



   public function updaterpinfo(Request $request){
        $rpinfo=rppage::first();
           $this->validate($request,[
            'rp_ban' => 'mimes:jpeg,jpg,png,gif',
              ],[
            'rp_ban.mimes' => 'image format allow only jpeg,jpg,png,gif',
            ]);
       if(!empty($_FILES['rp_ban']['name'])){
          $updaterpinfo=rppage::where('id',$rpinfo->id)->update([
            'rp_ban' => 'rp_ban.jpg',
            'rp_des' =>$_POST['rp_des'],
            'Created_at' => Carbon::now()->toDateTimeString(),
           ]);
      
       if($request->hasFile('rp_ban')){
         $image=$request->file('rp_ban');
         $imageName='obectiveban'.'_'.time().'.'.$image->getClientOriginalExtension();
        image::make($image)->resize('830','200')->save(base_path('public/assets/uploads/pages/'.$imageName));
          
         rppage::where('id',$rpinfo->id)->update([
           'rp_ban' =>$imageName,
         ]);
        if (file_exists(public_path().'/assets/uploads/pages/'.$rpinfo->rp_ban)) {
             unlink(public_path().'/assets/uploads/pages/'.$rpinfo->rp_ban);
         }else{
         return redirect(route('rppage'));
         }
 
      }
    }else{
        $updaterpinfo=rppage::where('id',$rpinfo->id)->update([
         'rp_des' =>$_POST['rp_des'],
         'Created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
        if($updaterpinfo){
          Session::flash('status','value');
          return redirect(route('rppage'));
        }else{
          Session::flash('error','value');
            return redirect(route('rppage'));
        }
   
   }


// about page banner enactive active
 public function disablerpban($id){
    $enactive=rppage::where('rp_status',1)->where('id',$id)->update([
      'rp_status' => 0,
    ]);
    if($enactive){
      return redirect(route('rppage'));
    }
  }
  public function enablerpban($id){
    $active=rppage::where('rp_status',0)->where('id',$id)->update([
      'rp_status' => 1,
    ]);
    if($active){
      return redirect(route('rppage'));
    }
 }






}
