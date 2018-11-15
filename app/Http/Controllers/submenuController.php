<?php

namespace App\Http\Controllers;
use App\submenu;
use Image;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

class submenuController extends Controller
{
     public function addsubmenu($id){
     	$id=$id;
     	$submenuinfo=submenu::where('menu_id',$id)->get();
     	return view ('backend.submenu.addsubmenu',compact('id','submenuinfo'));
    }



    /******************** insert  MENU ***********/
   public function insertsubmenu(Request $request){

     $this->validate($request,[
	        'submenu_name' => 'required',
	        'submenu_si' => 'required',
	        'submenu_status' => 'required',
	          ],[
	        'submenu_name.required' => 'submenu name is required',
	        'submenu_si.required' => 'submenu Display is required',
	        'submenu_status.required' => 'submenu status is required',
	          ]);
	        $insertsubmenu=submenu::insert([
	         'submenu_name' => $_POST['submenu_name'],	
	         'submenu_url' => $_POST['submenu_url'],	
	         'submenu_si' => $_POST['submenu_si'],
	         'menu_id' => $_POST['menu_id'],
	         'submenu_status' => $_POST['submenu_status'],
	         'Created_at' => Carbon::now()->toDateTimeString(),
	      ]);
	   
	      if($insertsubmenu){
	        Session::flash('status','value');
	          return redirect()->back();
	      }else{
	        Session::flash('error','value');
	          return redirect('addmenu');
	      }
	   }


   public function editsubmenu($id){
   	 $id=$id;
   	 $editsubmenu=submenu::where('id',$id)->FirstorFail();
   	 return view('backend.submenu.editsubmenu',compact('id','editsubmenu'));
   }


   public function updatesubmenu(Request $request,$id){

     $this->validate($request,[
	        'submenu_name' => 'required',
	        'submenu_si' => 'required',
	        'submenu_status' => 'required',
	          ],[
	        'submenu_name.required' => 'submenu name is required',
	        'submenu_si.required' => 'submenu Display is required',
	        'submenu_status.required' => 'submenu status is required',
	          ]);
	        $updatesubmenu=submenu::where('id',$id)->update([
	         'submenu_name' => $_POST['submenu_name'],	
	         'submenu_url' => $_POST['submenu_url'],	
	         'submenu_si' => $_POST['submenu_si'],
	         'submenu_status' => $_POST['submenu_status'],
	         'Created_at' => Carbon::now()->toDateTimeString(),
	      ]);
	   
	      if($updatesubmenu){
	        Session::flash('status','value');
	          return redirect()->back();
	      }
	      
	   }



/********************** DELETE SUBMENU7**********************/
public function deletesubmenu($id){
	$deletesubmenu=submenu::where('id',$id)->delete();
	 if($deletesubmenu){
	        Session::flash('deletesubmenu','value');
	          return redirect()->back();
	 }
}






//Menu PUBLIC AND UNPUBLISH


 public function unpublishsubmenu($id){
    $enactive=submenu::where('submenu_status',1)->where('id',$id)->update([
      'submenu_status' => 0,
    ]);
    if($enactive){
      return redirect()->back();
    }
  }
  public function publishsubmenu($id){
    $active=submenu::where('submenu_status',0)->where('id',$id)->update([
      'submenu_status' => 1,
    ]);
    if($active){
      return redirect()->back();
    }
 }





}
