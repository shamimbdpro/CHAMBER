@extends('layouts.backend')
@section('contents')

   <main class="app-content">
      @if (Session('status'))
          <p class="sucmsg">Information Updated successfully</p>
       @endif
      <div class="row">
        <div class="col-md-12">
          {{-- welcome message --}}
          <form action="" method="post">
          <div class="form-group row">
                  <label class="control-label col-md-2"></label>
                  <div class="col-md-10">
                   @if($aboutinfo->ban_status ==1)
                  <a  href="{{route('disabblebanner',$aboutinfo->id)}}" class="btn btn-small btn-secondary">Deactive</a>
                     @else
                      <a href="{{route('enablebanner',$aboutinfo->id)}}" class="btn btn-small btn-success">Active</a>
                     @endif
                  </div>
            </div>

          </form>
          <form action="{{route('updateaboutinfo')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if($aboutinfo->ban_status==1)
             <div class="form-group row">
                  <label class="control-label col-md-2">About Banner</label>
                  <div class="col-md-10">
                    <input type="file" class="form-control" name="about_ban" value="{{$aboutinfo->about_ban}}">
                    <img src="{{asset('assets/uploads/pages')}}/{{$aboutinfo->about_ban}}" alt="About Banner" img="img-fluid">
                  </div>
            </div>
            @endif



              <div class="form-group row">
                  <label class="control-label col-md-2">About Page Description</label>
                  <div class="col-md-10">
                    <textarea id="about_page" class="form-control" name="about_des">{!!$aboutinfo->about_des!!}</textarea>
                           @if($errors->has('about_des'))
                                 <p class="help-block">{{$errors->first('about_des')}}</p>
                             @endif
                  </div>
            </div>
               <div class="tile-footer text-right" style="margin-bottom: 20px">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update information</button>
               </div>

          </form>
             
        </div>   

        
      </div>

       
    </main>



    @endsection