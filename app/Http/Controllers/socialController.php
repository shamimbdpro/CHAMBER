<?php

namespace App\Http\Controllers;
use App\social;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
class socialController extends Controller
{

public function __construct(){
  $this->middleware('auth');
}
  
    public function index(){
    	$social=social::get();
    	return view('backend.social.allsocial',compact('social'));
    }

    public function addsocial(){
    	return view('backend.social.addsocial');
    }

   public function insertsocial(Request $request){

        $insertsocial=social::insertGetId([
         'social_name' =>$_POST['social_name'],
         'social_link' =>$_POST['social_link'],
         'social_status' =>$_POST['social_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
        ]);


      if($insertsocial){
        Session::flash('status','value');
          return redirect('addsocial');
      }else{
        Session::flash('error','value');
          return redirect('addsocial');
      }

   }

   public function editsocial($id){
   	$getsocial=social::where('id',$id)->FirstorFail();
   	return view('backend.social.editsocial',compact('getsocial'));
   }


   public function updatesocial(Request $request,$id){

        $insertsocial=social::where('id',$id)->update([
         'social_name' =>$_POST['social_name'],
         'social_link' =>$_POST['social_link'],
         'social_status' =>$_POST['social_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
        ]);


      if($insertsocial){
        Session::flash('updatesocial','value');
          return redirect('social');
      }else{
        Session::flash('error','value');
          return redirect('social');
      }

   }




 
 public function unpublish_social($id){
    $enactive=social::where('social_status',1)->where('id',$id)->update([
      'social_status' => 0,
    ]);
    if($enactive){
      return redirect(route('social'));
    }
  }
  public function publish_social($id){
    $active=social::where('social_status',0)->where('id',$id)->update([
      'social_status' => 1,
    ]);
    if($active){
      return redirect(route('social'));
    }
 }


 public function social_delete($id){
 	$deletesocial=social::where('id',$id)->delete();
    if($deletesocial){
        Session::flash('deletesocial','value');
          return redirect('social');
      }
 }











}
