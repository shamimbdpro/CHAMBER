@extends('layouts.backend')
@section('contents')

   <main class="app-content">
      @if (Session('status'))
          <p class="sucmsg">Newslatter Updated successfully</p>
       @endif
      <div class="row " >
          <div class="col-md-12">
             <h2 class="text-center">Newslatter Pormote Section</h2>
           <form action="{{route('insertnewslatterpdf')}}" method="post" enctype="multipart/form-data">
               @csrf
            <div class="form-group row imgshamim">
                 <h3>Update PDF</h3>
                  <div class="col-md-12">
                    <input type="file" class="file233" name="newslatter_pdf" value="{{$getInfo->newslatter_pdf}}"> <br>
                        @if($errors->has('newslatter_pdf'))
                                 <p class="help-block">{{$errors->first('newslatter_pdf')}}</p>
                       @endif
                  </div>
                    <embed src="{{asset('assets/uploads/newslatter')}}/{{$getInfo->newslatter_pdf}}" type="application/pdf" width="100%" height="400px">

            </div>

            <div class="tile-footer text-left" style="margin-bottom: 20px">
           <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Pdf</button>
               </div>
             </form>

         
          <form action="{{route('insertnewslatterimg')}}" method="post" enctype="multipart/form-data">
               @csrf
            <div class="form-group row imgshamim">
                 <h3>Update Newslatter Image</h3>
                  <div class="col-md-12">
                   <input type="file" class="file233" name="newslatter_img" value="{{$getInfo->newslatter_img}}">
                       @if($errors->has('newslatter_img'))
                                 <p class="help-block">{{$errors->first('newslatter_img')}}</p>
                       @endif
                  </div>
                   <img width="200" height="100" src="{{asset('assets/uploads/newslatter')}}/{{$getInfo->newslatter_img}}" alt="image">
            </div>

            <div class="tile-footer text-left" style="margin-bottom: 20px">
           <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Newslatter Image</button>
               </div>
             </form>

             
           </div>


       {{-- sponsor promote image --}}
   
       <div class="col-md-12">
          <br><br><br>
         <h2 class="text-center">Sponsor Pormote Section</h2> <br>
           <form action="{{route('insertsponsorpromote')}}" method="post" enctype="multipart/form-data">
               @csrf
            <div class="form-group row imgshamim">
                 <h3>Update Sponsor Promote Image</h3>
                  <div class="col-md-12">
                    <input type="file" class="file233" name="sponsor_promote_img" value="{{$sponsorpromote_info->sponsor_promote_img}}"> <br>
                        @if($errors->has('sponsor_promote_img'))
                                 <p class="help-block">{{$errors->first('sponsor_promote_img')}}</p>
                       @endif
                  </div>
                    <img width="200" height="100" src="{{asset('assets/uploads/newslatter')}}/{{$sponsorpromote_info->sponsor_promote_img}}" alt="image">
            </div>

             <div class="form-group row imgshamim">
                  <div class="col-md-12">
                    <label for="">Sponsor Promote Link</label>
                    <input type="url" class="form-control" name="sponsor_promote_link" value="{{$sponsorpromote_info->sponsor_promote_link}}"> <br>
                        @if($errors->has('sponsor_promote_link'))
                                 <p class="help-block">{{$errors->first('sponsor_promote_link')}}</p>
                       @endif
                  </div>
                 
            </div>

             <div class="tile-footer text-left" style="margin-bottom: 20px">
               <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Sponsor Info</button>
             </div>
             </form>

           </div>










       
      </div>

       
    </main>



    @endsection