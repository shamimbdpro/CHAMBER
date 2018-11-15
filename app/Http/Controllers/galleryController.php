<?php

namespace App\Http\Controllers;
use App\gallerycategory;
use App\photogallery;
use Illuminate\Http\Request;
use Image;
use Session;
use Carbon\Carbon;
class galleryController extends Controller
{
public function __construct(){
  $this->middleware('auth');
}   

/*****************************************
      PHOTO GALLERY CATEGORY
*********************************************/
  public function pcat(){
   $pcats=gallerycategory::orderBy('gallerycat_id','DESC')->get();
     return view('backend.pgallery.cat.allcategory',compact('pcats'));
 }

   public function addpcat(){
    return view('backend.pgallery.cat.addcategory');
 }

 
  /******* 	Add category **********/
					

  public function insertpcat(Request $request){
   	     $this->validate($request,[
        'gallerycat_name' => ' required',
        'gallerycat_img' => ' required|mimes:jpeg,jpg,png,gif',
          ],[
        'gallerycat_name.required' => 'Category name is required',
        'gallerycat_img.mimes' => 'image format allow only jpeg,jpg,png,gif',
          ]);

        $insertpcat=gallerycategory::insertGetId([
         'gallerycat_name' =>$_POST['gallerycat_name'],
         'gallerycat_img' => 'category.jpg',
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);
     if($request->hasFile('gallerycat_img')){
       $image=$request->file('gallerycat_img');
       $imageName='catimg_'.$insertpcat.'_'.time().'.'.$image->getClientOriginalExtension();
       image::make($image)->resize('280','200')->save(base_path('public/assets/uploads/photogallery/catimage/'.$imageName));
       gallerycategory::where('gallerycat_id',$insertpcat)->update([
         'gallerycat_img' =>$imageName,
       ]);
      if($insertpcat){
        Session::flash('status','value');
          return redirect('addpcat');
      }else{
        Session::flash('error','value');
          return redirect('addpcat');
      }
   }
  }  

   /**************************************************************
						Edit category
  /**************************************************************/
  public function editpcat($id){
   	$pcats =gallerycategory::where('gallerycat_id',$id)->FirstorFail();
    return view ('backend.pgallery.cat.editcategory',compact('pcats'));
     }



   /**************************************************************
					update category
  /**************************************************************/
   public function updatepcat(Request $request,$id){
      $image_path=gallerycategory::where('gallerycat_id', $id)->FirstorFail();
           $this->validate($request,[
	        'gallerycat_name' => ' required',
	        'gallerycat_img' => 'mimes:jpeg,jpg,png,gif',
	          ],[
	        'gallerycat_name.required' => 'Category name is required',
	        'gallerycat_img.mimes' => 'image format allow only jpeg,jpg,png,gif',
          ]);
       if(!empty($_FILES['gallerycat_img']['name'])){
	        $updatepcat=gallerycategory::where('gallerycat_id',$id)->update([
	          'gallerycat_name' =>$_POST['gallerycat_name'],
	          'gallerycat_img' => 'category.jpg',
	          'Created_at' => Carbon::now()->toDateTimeString(),
	         ]);
      
	     if($request->hasFile('gallerycat_img')){
	       $image=$request->file('gallerycat_img');
	       $imageName='updatecatimg_'.$updatepcat.'_'.time().'.'.$image->getClientOriginalExtension();
	      image::make($image)->resize('280','200')->save(base_path('public/assets/uploads/photogallery/catimage/'.$imageName));
          
	       gallerycategory::where('gallerycat_id',$id)->update([
	         'gallerycat_img' =>$imageName,
	       ]);
        if (file_exists(public_path().'/assets/uploads/photogallery/catimage/'.$image_path->gallerycat_img)) {
             unlink(public_path().'/assets/uploads/photogallery/catimage/'.$image_path->gallerycat_img);
         }else{
          return redirect(route('pcat'));
         }
 
      }
    }else{
        $updatepcat=gallerycategory::where('gallerycat_id',$id)->update([
         'gallerycat_name' =>$_POST['gallerycat_name'],
         'Created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
	      if($updatepcat){
	        Session::flash('updatecat','value');
	          return redirect('pcat');
	      }else{
	        Session::flash('error','value');
	          return redirect('pcat');
	      }
	 
   }


/*******************************************
      DELETE CATEGORY
**********************************************/


public function deletepcat($id){
     $image_path=gallerycategory::where('gallerycat_id', $id)->FirstorFail();
     $delete_ournews=gallerycategory::where('gallerycat_id',$id)->delete();
     
     if (file_exists(public_path().'/assets/uploads/photogallery/catimage/'.$image_path->gallerycat_img)) {
       unlink(public_path().'/assets/uploads/photogallery/catimage/'.$image_path->gallerycat_img);
        return redirect(route('pcat'))->with('deletepcat','Category Deleted Sucessfuly');
     }else{
       return redirect(route('pcat'))->with('deletepcat','Category Deleted Sucessfuly');
     }
  }




/********************************************************************
                   PHOTO GALLERY 
**********************************************************************/

  public function photogallery(){
   $pgallerys=photogallery::orderBy('id','DESC')->get();
     return view('backend.pgallery.gallery.allgallery',compact('pgallerys'));
 } 

  public function addgallery(){
    $categoryitems=gallerycategory::get();
     return view('backend.pgallery.gallery.addgallery',compact('categoryitems'));
 }
   /**************************************************************
            INSERT GALLERY
  /**************************************************************/

  public function insertgallery(Request $request){

         $this->validate($request,[
        'pgallery_img' => 'required|mimes:jpeg,jpg,png,gif',
        'pgallery_cat' => 'required',
          ],[
        'pgallery_img.required' => 'Gallery image is required',
        'pgallery_img.mimes' => 'image format allow only jpeg,jpg,png,gif',
         'pgallery_cat.required' => 'Category select is required',
          ]);

        $insertgallery=photogallery::insertGetId([
         'pgallery_img' => 'category.jpg',
         'pgallery_cat' =>$_POST['pgallery_cat'],
         'pgallery_status' =>$_POST['pgallery_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);
     if($request->hasFile('pgallery_img')){
       $image=$request->file('pgallery_img');
       $imageName='galleryimg_'.$insertgallery.'_'.time().'.'.$image->getClientOriginalExtension();
       image::make($image)->resize('280','200')->save(base_path('public/assets/uploads/photogallery/galleryimage/'.$imageName));
       photogallery::where('id',$insertgallery)->update([
         'pgallery_img' =>$imageName,
       ]);
      if($insertgallery){
        Session::flash('status','value');
          return redirect('addgallery');
      }else{
        Session::flash('error','value');
          return redirect('addgallery');
      }
   }
  }



   /**************************************************************
            EDIT GALLERY
  /**************************************************************/
  public function editpgallery($id){
    $categoryitems=gallerycategory::get();
    $editgallery =photogallery::where('id',$id)->FirstorFail();
    return view ('backend.pgallery.gallery.editgallery',compact('categoryitems','editgallery'));
     }




   /**************************************************************
          UPATE GALLERY
  /**************************************************************/
   public function updategallery(Request $request,$id){
      $image_path=photogallery::where('id', $id)->FirstorFail();
           $this->validate($request,[
            'pgallery_img' => 'mimes:jpeg,jpg,png,gif',
            'pgallery_cat' => 'required',
              ],[
            'pgallery_img.mimes' => 'image format allow only jpeg,jpg,png,gif',
             'pgallery_cat.required' => 'Category select is required',
          ]);
       if(!empty($_FILES['pgallery_img']['name'])){
          $updategallery=photogallery::where('id',$id)->update([
             'pgallery_img' => 'category.jpg',
             'pgallery_cat' =>$_POST['pgallery_cat'],
             'pgallery_status' =>$_POST['pgallery_status'],
             'Created_at' => Carbon::now()->toDateTimeString(),
           ]);
      
       if($request->hasFile('pgallery_img')){
         $image=$request->file('pgallery_img');
         $imageName='updategallery_img'.$updategallery.'_'.time().'.'.$image->getClientOriginalExtension();
        image::make($image)->resize('280','200')->save(base_path('public/assets/uploads/photogallery/galleryimage/'.$imageName));
          
         photogallery::where('id',$id)->update([
           'pgallery_img' =>$imageName,
         ]);
        if (file_exists(public_path().'/assets/uploads/photogallery/galleryimage/'.$image_path->pgallery_img)) {
             unlink(public_path().'/assets/uploads/photogallery/galleryimage/'.$image_path->pgallery_img);
         }else{
          return redirect(route('photogallery'));
         }
 
      }
    }else{
        $updategallery=photogallery::where('id',$id)->update([
            'pgallery_cat' =>$_POST['pgallery_cat'],
            'pgallery_status' =>$_POST['pgallery_status'],
            'Created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
        if($updategallery){
          Session::flash('updategallery','value');
            return redirect('photogallery');
        }else{
          Session::flash('error','value');
            return redirect('photogallery');
        }
   
   }

/*******************************************
        PUBLISH UNPUBLISH GALLERY
**********************************************/
 public function unpublish_gallery($id){
    $enactive=photogallery::where('pgallery_status',1)->where('id',$id)->update([
      'pgallery_status' => 0,
    ]);
    if($enactive){
      return redirect(route('photogallery'));
    }
  }
  public function publish_gallery($id){
  $active=photogallery::where('pgallery_status',0)->where('id',$id)->update([
    'pgallery_status' => 1,
  ]);
  if($active){
    return redirect(route('photogallery'));
  }
 }


/*******************************************
        DELETE GALLERY
**********************************************/


public function deletegallery($id){
     $image_path=photogallery::where('id', $id)->FirstorFail();
     $delete_ournews=photogallery::where('id',$id)->delete();
     
     if (file_exists(public_path().'/assets/uploads/photogallery/galleryimage/'.$image_path->pgallery_img)) {
       unlink(public_path().'/assets/uploads/photogallery/galleryimage/'.$image_path->pgallery_img);
        return redirect(route('photogallery'))->with('deletegallery','Gallery Deleted Sucessfuly');
     }else{
       return redirect(route('photogallery'))->with('deletegallery','Gallery Deleted Sucessfuly');
     }
  }






}





