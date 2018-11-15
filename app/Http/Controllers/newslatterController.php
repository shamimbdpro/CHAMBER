<?php

namespace App\Http\Controllers;
use App\newslatter;
use App\sponsorpromote;

use Illuminate\Http\Request;
use Illuminate\Illuminate\Validation\Validator;
use Image;
use Session;
use Carbon\Carbon;
class newslatterController extends Controller
{

public function __construct(){
  $this->middleware('auth');
}

  
    public function newslatter(){
        $getInfo = newslatter::first();
        $sponsorpromote_info = sponsorpromote::first();
    	return view('backend.newslatter',compact('getInfo','sponsorpromote_info'));
    }


   public function insertnewslatterimg(Request $request){
        $newsimg=newslatter::first();
           $this->validate($request,[
	        'newslatter_img' => 'mimes:jpeg,jpg,png,gif',
	          ],[
	        'newslatter_img.mimes' => 'image format allow only jpeg,jpg,png,gif',
          ]);
       if(!empty($_FILES['newslatter_img']['name'])){
	        $updateimg=newslatter::where('id',$newsimg->id)->update([
	          'newslatter_img' => 'newslatter_img.jpg',
	          'Created_at' => Carbon::now()->toDateTimeString(),
	         ]);
      
	     if($request->hasFile('newslatter_img')){
	       $image=$request->file('newslatter_img');
	       $imageName='newslatter_img'.'_'.time().'.'.$image->getClientOriginalExtension();
	      image::make($image)->resize('260','345')->save(base_path('public/assets/uploads/newslatter/'.$imageName));
          
	       newslatter::where('id',$newsimg->id)->update([
	         'newslatter_img' =>$imageName,
	       ]);
        if (file_exists(public_path().'/assets/uploads/newslatter/'.$newsimg->newslatter_img)) {
             unlink(public_path().'/assets/uploads/newslatter/'.$newsimg->newslatter_img);
         }else{
          return redirect(route('newslatter'));
         }
 
      }
    }else{
        $updateimg=newslatter::where('id',$newsimg->id)->update([
         'newslatter_img' =>$newsimg->newslatter_img,
         'Created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
	      if($updateimg){
	        Session::flash('status','value');
	          return redirect('newslatter');
	      }else{
	        Session::flash('error','value');
	          return redirect('newslatter');
	      }
	 
   }


/*********************************
      INSERT PDF
*************************************/
public function insertnewslatterpdf(Request $request){ 	
    $image_path = newslatter::first();
    $targetfolder = base_path('public/assets/uploads/newslatter/');
      $this->validate($request,[
	        'newslatter_pdf' => 'mimes:pdf',
	          ],[
	        'newslatter_pdf.mimes' => 'just upload only pdf',
          ]);
 if(!empty($_FILES['newslatter_pdf']['name'])){
     $insertpdf=newslatter::where('id',$image_path->id)->update([
         'newslatter_pdf' =>'newslatterimage.jpg',
          'Created_at' => Carbon::now()->toDateTimeString(),
      ]);

        if($request->hasFile('newslatter_pdf')){
       $imagepdf=$request->file('newslatter_pdf');
       $pdfname='pdf'.'_'.time().'.'.$imagepdf->getClientOriginalExtension();
        move_uploaded_file($_FILES['newslatter_pdf']['tmp_name'], $targetfolder.$pdfname);
         if(file_exists($targetfolder.$image_path->newslatter_pdf)){
            	 unlink($targetfolder.$image_path->newslatter_pdf);
           }
          newslatter::where('id',$image_path->id)->update([
         'newslatter_pdf' =>$pdfname,
       ]);
     }

  }else{
  	  $insertpdf=newslatter::where('id',$image_path->id)->update([
         'newslatter_pdf' =>$image_path->newslatter_pdf,
          'Created_at' => Carbon::now()->toDateTimeString(),
      ]);
  }

      if($insertpdf){
	        Session::flash('status','value');
	          return redirect('newslatter');
	      }else{
	        Session::flash('error','value');
	          return redirect('newslatter');
	      }

}





/******************************************
          SPONSOR PROMOTE LINK
********************************************/

   public function insertsponsorpromote(Request $request){
        $sponsorinfo=sponsorpromote::first();
           $this->validate($request,[
            'sponsor_promote_img' => 'mimes:jpeg,jpg,png,gif',
              ],[
            'sponsor_promote_img.mimes' => 'image format allow only jpeg,jpg,png,gif',
            ]);
       if(!empty($_FILES['sponsor_promote_img']['name'])){
          $updatesponsorinfo=sponsorpromote::where('id',$sponsorinfo->id)->update([
            'sponsor_promote_img' => 'sponsor_promote_img.jpg',
            'sponsor_promote_link' =>$_POST['sponsor_promote_link'],
            'Created_at' => Carbon::now()->toDateTimeString(),
           ]);
      
       if($request->hasFile('sponsor_promote_img')){
         $image=$request->file('sponsor_promote_img');
         $imageName='sponsorpromote'.'_'.time().'.'.$image->getClientOriginalExtension();
        image::make($image)->resize('260','345')->save(base_path('public/assets/uploads/newslatter/'.$imageName));
          
         sponsorpromote::where('id',$sponsorinfo->id)->update([
           'sponsor_promote_img' =>$imageName,
         ]);
        if (file_exists(public_path().'/assets/uploads/newslatter/'.$sponsorinfo->sponsor_promote_img)) {
             unlink(public_path().'/assets/uploads/newslatter/'.$sponsorinfo->sponsor_promote_img);
         }else{
          return redirect(route('newslatter'));
         }
 
      }
    }else{
        $updatesponsorinfo=sponsorpromote::where('id',$sponsorinfo->id)->update([
         'sponsor_promote_link' =>$_POST['sponsor_promote_link'],
         'Created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
        if($updatesponsorinfo){
          Session::flash('status','value');
            return redirect('newslatter');
        }else{
          Session::flash('error','value');
            return redirect('newslatter');
        }
   
   }











}
