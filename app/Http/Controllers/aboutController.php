<?php

namespace App\Http\Controllers;
use App\welcomemsg;
use Illuminate\Http\Request;
use Session;
use Image;
use Carbon\Carbon;
class aboutController extends Controller
{
  public function __construct(){
  $this->middleware('auth');
}
    public function about(){
       $wecomemsg=welcomemsg::where('id',1)->FirstorFail();
    	return view('backend.about',compact('wecomemsg'));
    }



  public function welcomemsg(Request $request){ 	   
  $this->validate($request,[
        'welcomemsg' => 'required',
          ],[
        'welcomemsg.required' => 'welcome Message is Required',
          ]);
      $welcomemsg=welcomemsg::where('id',1)->update([
         'welcomemsg' => $_POST['welcomemsg'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);
      if($welcomemsg){
        Session::flash('status','value');
          return redirect('about');
      }else{
        Session::flash('error','value');
          return redirect('about');
      }
}  



}