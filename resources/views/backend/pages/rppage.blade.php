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
                   @if($rppageinfo->rp_status ==1)
                  <a  href="{{route('disablerpban',$rppageinfo->id)}}" class="btn btn-small btn-secondary">Deactive</a>
                     @else
                      <a href="{{route('enablerpban',$rppageinfo->id)}}" class="btn btn-small btn-success">Active</a>
                     @endif
                  </div>
            </div>

          </form>
          <form action="{{route('updaterpinfo')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if($rppageinfo->rp_status==1)
             <div class="form-group row">
                  <label class="control-label col-md-2">Right And Previllage Banner</label>
                  <div class="col-md-10">
                    <input type="file" class="form-control" name="rp_ban" value="{{$rppageinfo->rp_ban}}">
                    <img src="{{asset('assets/uploads/pages')}}/{{$rppageinfo->rp_ban}}" alt="Rigght and Previllage Banner" img="img-fluid">
                  </div>
            </div>
            @endif



              <div class="form-group row">
                  <label class="control-label col-md-2">Right and Previllage Page Description</label>
                  <div class="col-md-10">
                    <textarea id="about_page" class="form-control" name="rp_des">{!!$rppageinfo->rp_des!!}</textarea>
                           @if($errors->has('rp_des'))
                                 <p class="help-block">{{$errors->first('rp_des')}}</p>
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