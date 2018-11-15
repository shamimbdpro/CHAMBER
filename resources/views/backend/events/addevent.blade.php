 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Add event</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">add evetn</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
        	@if (Session('status'))
            <div class="alert alert-success text-center">
                <strong>Event added successfully</strong>
            </div>
		     @endif
          <div class="tile">
            <h3 class="tile-title">Add New Event</h3>
             <form action="{{route('inser_event')}}" method="post" enctype="multipart/form-data">
             	@csrf
	            <div class="tile-body">

                <div class="form-group">
                  <label class="control-label">Event Title <span class="required_filed">*</span></label>
                  <input type="text" class="form-control"  placeholder="Enter Director Name" name="event_title" value="{{old('event_title')}}">
                     @if($errors->has('event_title'))
                                 <p class="help-block">{{$errors->first('event_title')}}</p>
                      @endif
                </div> 

                <div class="form-group">
                  <label class="control-label">Event Descritption</label>
                  <textarea id="summernote" class="form-control" placeholder="Event Descritption" name="event_des" rows="10" value="">{{old('event_des')}}</textarea>
                     @if($errors->has('event_des'))
                                 <p class="help-block">{{$errors->first('event_des')}}</p>
                      @endif
               </div>

               <div class="form-group">
                  <label class="control-label">Event Date</label>
                  <input type="date" class="form-control"  placeholder="Event Date" name="event_date" value="{{old('event_date')}}">
                  @if($errors->has('event_date'))
                                 <p class="help-block">{{$errors->first('event_date')}}</p>
                      @endif
                </div> 

                 <div class="form-group">
                  <label class="control-label">Event Time ex(12:36 PM)</label>
                  <input type="time" class="form-control"  placeholder="Enter Director Email" name="event_time" value="{{old('event_time')}}">
                  @if($errors->has('event_time'))
                                 <p class="help-block">{{$errors->first('event_time')}}</p>
                  @endif
                </div> 


	                <div class="form-group">
	                  <label class="control-label"> Event Photo <span class="required_filed">*</span></label>
	                  <input class="form-control" type="file" name="event_photo" value="{{old('event_photo')}}">
	                  		 @if($errors->has('event_photo'))
                                 <p class="help-block">{{$errors->first('event_photo')}}</p>
                         @endif
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
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Event</button>
	            </div>
             </form>
          </div>
        </div>
        </div>
    

    </main>

    @endsection