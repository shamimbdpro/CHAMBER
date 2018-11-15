<?php

namespace App\Http\Controllers;
use App\quicklink;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

class quicklinkController extends Controller
{
	public function __construct(){
	  $this->middleware('auth');
	}
	
    public function quicklink(){
       $getlink=quicklink::get();
    	return view('backend.quicklink.alllink',compact('getlink'));
    }

   public function addlink(){
       return view('backend.quicklink.addlink');
   }

public function insertlink(){
    $insertlink=quicklink::insert([
         'link_title' =>$_POST['link_title'],
         'link_url' =>$_POST['link_url'],
         'Created_at' => Carbon::now()->toDateTimeString(),
        ]);
      if($insertlink){
        Session::flash('status','value');
          return redirect(route('addlink'));
      }else{
        Session::flash('error','value');
          return redirect(route('addlink'));
      }


 }


 public function editlink($id){
 	$editlink=quicklink::where('id',$id)->FirstorFail();
 	return view('backend.quicklink.editlink',compact('editlink'));
 }



public function update_link($id){
    $updatelink=quicklink::where('id',$id)->update([
         'link_title' =>$_POST['link_title'],
         'link_url' =>$_POST['link_url'],
         'Created_at' => Carbon::now()->toDateTimeString(),
        ]);
      if($updatelink){
        Session::flash('status','value');
          return redirect(route('quicklink'));
      }else{
        Session::flash('error','value');
          return redirect(route('quicklink'));
      }

 }


 public function deletelink($id){
 	$deletelink=quicklink::where('id',$id)->delete();
 	 if($deletelink){
        Session::flash('deletelink','value');
          return redirect(route('quicklink'));
      }
 }








}
