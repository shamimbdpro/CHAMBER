@extends('layouts.backend')
@section('contents')

   <main class="app-content">
      @if (Session('status'))
          <p class="sucmsg">Information Updated successfully</p>
       @endif
      <div class="row">
        <div class="col-md-12">
          {{-- welcome message --}}
          <div class="form-group row">
                  <label class="control-label col-md-2"></label>
                  <div class="col-md-10">
                   @if($objective->ob_status ==1)
                  <a  href="{{route('disableob',$objective->id)}}" class="btn btn-small btn-secondary">Deactive</a>
                     @else
                      <a href="{{route('enableob',$objective->id)}}" class="btn btn-small btn-success">Active</a>
                     @endif
                  </div>
            </div>

          <form action="{{route('updateobinfo')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if($objective->ob_status==1)
             <div class="form-group row">
                  <label class="control-label col-md-2">Objective Banner</label>
                  <div class="col-md-10">
                    <input type="file" class="form-control" name="ob_ban" value="{{$objective->ob_ban}}">
                    <img src="{{asset('assets/uploads/pages')}}/{{$objective->ob_ban}}" alt="Objective Banner" img="img-fluid">
                  </div>
            </div>
            @endif



              <div class="form-group row">
                  <label class="control-label col-md-2">Objective Page Description</label>
                  <div class="col-md-10">
                    <textarea id="summernote" class="form-control" name="ob_des">{!!$objective->ob_des!!}</textarea>
                           @if($errors->has('ob_des'))
                                 <p class="help-block">{{$errors->first('ob_des')}}</p>
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