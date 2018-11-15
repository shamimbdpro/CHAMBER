@extends('layouts.backend')
@section('contents')

   <main class="app-content">
      @if (Session('status'))
          <p class="sucmsg">Infomation Updated successfully</p>
       @endif
      <div class="row">
        <div class="col-md-12">
          {{-- welcome message --}}
          <form action="{{route('welcomemsg')}}" method="post">
            @csrf
            <div class="form-group row">
                  <label class="control-label col-md-2">Welcome Message</label>
                  <div class="col-md-10">
                    <textarea id="about_page" class="form-control" name="welcomemsg">{{$wecomemsg->welcomemsg}}</textarea>
                           @if($errors->has('welcomemsg'))
                                 <p class="help-block">{{$errors->first('welcomemsg')}}</p>
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