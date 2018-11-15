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
                   @if($mission->mission_status ==1)
                  <a  href="{{route('disablemission',$mission->id)}}" class="btn btn-small btn-secondary">Deactive</a>
                     @else
                      <a href="{{route('enablemission',$mission->id)}}" class="btn btn-small btn-success">Active</a>
                     @endif
                  </div>
            </div>

          <form action="{{route('updatemission')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if($mission->mission_status==1)
             <div class="form-group row">
                  <label class="control-label col-md-2">Mission Banner</label>
                  <div class="col-md-10">
                    <input type="file" class="form-control" name="mission_ban" value="{{$mission->mission_ban}}">
                    <img src="{{asset('assets/uploads/pages')}}/{{$mission->mission_ban}}" alt="Objective Banner" img="img-fluid">
                  </div>
            </div>
            @endif



              <div class="form-group row">
                  <label class="control-label col-md-2">Mission Page Description</label>
                  <div class="col-md-10">
                    <textarea id="summernote" class="form-control" name="mission_des">{!!$mission->mission_des!!}</textarea>
                           @if($errors->has('mission_des'))
                                 <p class="help-block">{{$errors->first('mission_des')}}</p>
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