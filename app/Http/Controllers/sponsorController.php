<?php

namespace App\Http\Controllers;
use App\sponsor;
use Illuminate\Http\Request;
use Image;
use Session;
use Carbon\Carbon;
class sponsorController extends Controller
{
	public function __construct(){
	  $this->middleware('auth');
	}

/******************************************
                ALL SPONSOR
*****************************************/
    public function allsponsor(){
       	$sponsors=sponsor:: get();
        return view('backend.sponsor.allsponsor',compact('sponsors'));
    }
/******************************************
               ADD SPONSOR
*****************************************/
  public function addsponsor(){
    return view('backend.sponsor.addsponsor');
  }

  /******************************************
              INSERT SPONSOR
*****************************************/

  public function insertsponsor(Request $request){
   	     $this->validate($request,[
        'sponsor_img' => ' required|mimes:jpeg,jpg,png,gif',
          ],[
        'sponsor_img.mimes' => 'image format allow only jpeg,jpg,png,gif',
          ]);

        $insertsponsor=sponsor::insertGetId([
         'sponsor_img' => 'sponsor.jpg',
         'sponsor_status' =>$_POST['sponsor_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);
     if($request->hasFile('sponsor_img')){
       $image=$request->file('sponsor_img');
       $imageName='sponsor_'.$insertsponsor.'_'.time().'.'.$image->getClientOriginalExtension();
       Image::make($image)->resize('200','80')->save(base_path('public/assets/uploads/sponsor/'.$imageName));
       sponsor::where('id',$insertsponsor)->update([
         'sponsor_img' =>$imageName,
       ]);
      if($insertsponsor){
        Session::flash('status','value');
          return redirect('addsponsor');
      }else{
        Session::flash('error','value');
          return redirect('addsponsor');
      }
   }
  }   
/*******************************************
              ACTIVE DEACTIVE SPONSOR
********************************************/

 public function deactive_sponsor($id){
    $enactive=sponsor::where('sponsor_status',1)->where('id',$id)->update([
      'sponsor_status' => 0,
    ]);
    if($enactive){
      return redirect(route('allsponsor'));
    }
  }
  public function active_sponsor($id){
    $active=sponsor::where('sponsor_status',0)->where('id',$id)->update([
      'sponsor_status' => 1,
    ]);
    if($active){
      return redirect(route('allsponsor'));
    }
 }

/**************************************
      EDIT SPONSOR
*************************************/
 public function editsponsor($id){
   	$editsponsor =sponsor::where('id',$id)->FirstorFail();
    return view ('backend.sponsor.editsponsor',compact('editsponsor'));
     }

/**********************************
            UPDATE SPONSOR
-**********************************/
public function updatesponsor(Request $request,$id){
      $image_path=sponsor::where('id', $id)->FirstorFail();
           $this->validate($request,[
        'sponsor_img' => 'mimes:jpeg,jpg,png,gif',
          ],[
        'sponsor_img.mimes' => 'image format allow only jpeg,jpg,png,gif',
          ]);
       if(!empty($_FILES['sponsor_img']['name'])){
      
        $updatesponsor=sponsor::where('id',$id)->update([
         'sponsor_img' => 'sponsor.jpg',
         'sponsor_status' =>$_POST['sponsor_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
        ]);
      
	     if($request->hasFile('sponsor_img')){
	       $image=$request->file('sponsor_img');
	       $imageName='updated_'.$updatesponsor.'_'.time().'.'.$image->getClientOriginalExtension();
	       $unlik=Image::make($image)->resize('200','80')->save(public_path('/assets/uploads/sponsor/'.$imageName));
          
	       sponsor::where('id',$id)->update([
	         'sponsor_img' =>$imageName,
	       ]);
        if (file_exists(public_path().'/assets/uploads/sponsor/'.$image_path->sponsor_img)) {
             unlink(public_path().'/assets/uploads/sponsor/'.$image_path->sponsor_img);
         }else{
          return redirect(route('allsponsor'));
         }
 
      }
    }else{


        $updatesponsor=sponsor::where('id',$id)->update([
         'sponsor_img' =>$image_path->sponsor_img,
         'sponsor_status' =>$_POST['sponsor_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),

        ]);
    }
	      if($updatesponsor){
	        Session::flash('updatedsponsor','value');
	          return redirect('allsponsor');
	      }else{
	        Session::flash('error','value');
	          return redirect('allsponsor');
	      }
	 
   }

/******************************************
         DELETE SPONSOR
********************************************/

  public function deletesponsor($id){
    $image_path=sponsor::where('id', $id)->FirstorFail();
     sponsor::where('id',$id)->delete();
 
      if (file_exists(public_path().'/assets/uploads/sponsor/'.$image_path->sponsor_img)) {
       unlink(public_path().'/assets/uploads/sponsor/'.$image_path->sponsor_img);
        return redirect(route('allsponsor'))->with('delete_sponsor','Sponsor Deleted Sucessfuly');
 
     }else{
       return redirect(route('allsponsor'))->with('delete_sponsor','Sponsor Deleted Sucessfuly');
     }  
  }





}
