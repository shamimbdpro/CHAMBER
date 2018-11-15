@extends('layouts.backend')
@section('contents')

   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> All Event</h1>
          <p>you can update, delete, edit from this page</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">All Event</li>
        </ul>
      </div>
      <div class="add-slider">
      	 <a class="btn btn-primary icon-btn" href="{{route('addevent')}}"><i class="fa fa-plus"></i>Add Event  </a>
      </div>
            @if (Session('status'))
            <div class="alert alert-success text-center">
                <strong>Event Updated successfully</strong>
            </div>
             @endif
        @if(Session('delete_event'))
                <div class="alert alert-success text-center">
                <strong>Event Deleted successfully</strong>
            </div>
          @endif 
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Event No</th>
                    <th>Event Name</th>
                    <th>Event Date</th>
                    <th>Devent img</th>
                    <th>Event Status</th>
                    <th>action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php $x=0;?>
                  @foreach($events as $event)
                     <?php $x++;?>
                  <tr>
                    <td><?php echo $x;?></td>
                   
                    <td>{{$event->event_title}}</td>
                    <td>{{$event->event_date}}</td>
                     <td> <img height="70" width="90" src="{{asset('assets/uploads/events')}}/{{$event->event_photo}}" alt="Image"></td>
                   <td>
                     @if($event->event_status ==1)
                       <a  href="{{route('unpublish_event',$event->event_id)}}" class="btn btn-small btn-success ">Active</a>
                     @else
                      <a href="{{route('publish_event',$event->event_id)}}" class="btn btn-small btn-secondary ">Deactive</a>
                     @endif
                    </td>

                    <td>
                      
                      <div class="btn-group action-group">
                       <a class="btn btn-primary" href="{{route('editevent',$event->event_id)}}"><i class="fa fa-lg fa-edit"></i></a>
                        <a class="btn btn-danger" href="#"  data-toggle="modal" data-target="#{{$event->event_id}}"><i class="fa fa-lg fa-trash"></i></a> 
                      </div>
                    </td>
                   
                  </tr>


                  <!-- Modal -->
                  <div class="modal fade" id="{{$event->event_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">are you sure want to delete Event?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <form action="{{route('delete_event',$event->event_id)}}">
                          <button type="submit" id='deleted' class="btn btn-danger">Delete</button>
                        </form> 
                        </div>
                      </div>
                    </div>
                  </div>

                  @endforeach
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>

    @endsection