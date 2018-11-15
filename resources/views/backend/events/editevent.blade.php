 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Update Event</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">add Director</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
         
        <div class="col-md-10">
      
          <div class="tile">
            <h3 class="tile-title">Update Event</h3>
             <form action="{{route('updateEvent',$editevent->event_id)}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="tile-body">

                <div class="form-group">
                  <label class="control-label">Event Title <span class="required_filed">*</span></label>
                  <input type="text" class="form-control"  placeholder="Enter Director Name" name="event_title" value="{{$editevent->event_title}}">
                     @if($errors->has('event_title'))
                                 <p class="help-block">{{$errors->first('event_title')}}</p>
                      @endif
                </div> 

                <div class="form-group">
                  <label class="control-label">Event Descritption</label>
                  <textarea id="summernote" class="form-control" placeholder="Event Descritption" name="event_des" rows="10" value="">{{$editevent->event_des}}</textarea>
                     @if($errors->has('event_des'))
                                 <p class="help-block">{{$errors->first('event_des')}}</p>
                      @endif
               </div>

               <div class="form-group">
                  <label class="control-label">Event Date</label>
                  <input type="date" class="form-control"  placeholder="Event Date" name="event_date" value="{{$editevent->event_date}}">
                  @if($errors->has('event_date'))
                                 <p class="help-block">{{$errors->first('event_date')}}</p>
                      @endif
                </div> 

                 <div class="form-group">
                  <label class="control-label">Event Time ex(12:36 PM)</label>
                  <input type="time" class="form-control" name="event_time" value="{{$editevent->event_time}}">
                  @if($errors->has('event_time'))
                                 <p class="help-block">{{$errors->first('event_time')}}</p>
                  @endif
                </div> 


                  <div class="form-group">
                    <label class="control-label"> Event Photo <span class="required_filed">*</span></label>
                    <input class="form-control" type="file" name="event_photo" value="{{$editevent->event_photo}}">
                         @if($errors->has('event_photo'))
                                 <p class="help-block">{{$errors->first('event_photo')}}</p>
                         @endif
                     <img height="70" width="150" src="{{asset('assets/uploads/events')}}/{{$editevent->event_photo}}" alt="Image">
                  </div>


                   <div class="form-group">
                    <label for="event">Publication Status</label>
                    <select class="form-control" id="event" name="event_status">
                      <option value="1">Publish Event</option>
                      <option value="0">Unpublish Event</option>
                    </select>
                  </div>

              </div>
              <div class="tile-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Event</button>
              </div>
             </form>
          </div>
        </div>
        </div>
    

    </main>

    @endsection