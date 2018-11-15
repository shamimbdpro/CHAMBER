<?php

namespace App\Http\Controllers;
use App\menu;
use Image;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

class menuController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function menu(){
        $allmenus=menu::orderby('id','DESC')->get();
    	return view('backend.menu.allmenu',compact('allmenus'));
    }

    /******************** ADD MENU ***********/
   public function addmenu(){
    	return view('backend.menu.addmenu');
   }

/******************** insert  MENU ***********/
   public function insertmenu(Request $request){
	 	     $this->validate($request,[
	        'menu_name' => 'required',
	        'menu_si' => 'required',
	        'menu_display' => 'required',
	        'menu_status' => 'required',
	          ],[
	        'menu_name.required' => 'Menu name is required',
	        'menu_si.required' => 'Menu Sirial is required',
	        'menu_display.required' => 'Menu Display is required',
	        'menu_status.required' => 'Menu Status is required',
	          ]);

	        $insertmenu=menu::insertGetId([
	         'menu_name' => $_POST['menu_name'],
	         'menu_url' => $_POST['menu_url'],
	         'menu_si' => $_POST['menu_si'],
	         'menu_display' => $_POST['menu_display'],
	         'menu_status' => $_POST['menu_status'],
	         'Created_at' => Carbon::now()->toDateTimeString(),
	      ]);
	   
	      if($insertmenu){
	        Session::flash('status','value');
	          return redirect('addmenu');
	      }else{
	        Session::flash('error','value');
	          return redirect('addmenu');
	      }
	   }
/**************** Edit Menu************/
public function editmenu($id){
	$editmenu=menu::where('id',$id)->FirstorFail();
	return view('backend.menu.editmenu',compact('editmenu'));
}



/******************** Upate  MENU ***********/
   public function updatemenu(Request $request,$id){
	 	     $this->validate($request,[
	        'menu_name' => 'required',
	        'menu_si' => 'required',
	        'menu_display' => 'required',
	        'menu_status' => 'required',
	          ],[
	        'menu_name.required' => 'Menu name is required',
	        'menu_si.required' => 'Menu Sirial is required',
	        'menu_display.required' => 'Menu Display is required',
	        'menu_status.required' => 'Menu Status is required',
	          ]);

	        $insertmenu=menu::where('id',$id)->update([
	         'menu_name' => $_POST['menu_name'],
	         'menu_url' => $_POST['menu_url'],
	         'menu_si' => $_POST['menu_si'],
	         'menu_display' => $_POST['menu_display'],
	         'menu_status' => $_POST['menu_status'],
	         'Created_at' => Carbon::now()->toDateTimeString(),
	      ]);
	   
	      if($insertmenu){
	        Session::flash('status','value');
	          return redirect('menu');
	      }else{
	        Session::flash('error','value');
	          return redirect('menu');
	      }
	   }



//Menu PUBLIC AND UNPUBLISH


 public function unpublishmenu($id){
    $enactive=menu::where('menu_status',1)->where('id',$id)->update([
      'menu_status' => 0,
    ]);
    if($enactive){
      return redirect(route('menu'));
    }
  }
  public function publishmenu($id){
    $active=menu::where('menu_status',0)->where('id',$id)->update([
      'menu_status' => 1,
    ]);
    if($active){
      return redirect(route('menu'));
    }
 }



 /*******************************
      DELETE MENU
 ********************************/

   public function delete_menu($id){
   	  $delete_menu=menu::where('id',$id)->delete();
   	   if($delete_menu){
	        Session::flash('deletemnu','Menu Deleted Successfully');
	          return redirect()->back();
	      }
   }



}
