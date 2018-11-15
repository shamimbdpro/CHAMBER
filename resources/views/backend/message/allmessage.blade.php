@extends('layouts.backend')
@section('contents')

   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> All latest news</h1>
          <p>you can update, delete, edit from this page</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">All News</li>
        </ul>
      </div>
       <div class="row justify-content-md-center ">
       <div class="col-md-6 ">
        @if (Session('deletemessage'))
               <div class="alert alert-danger text-center">
                <strong>{{session('deletemessage')}}</strong>
              </div>
          @endif
      </div>
      </div>  
        <div class="row justify-content-md-center ">
       <div class="col-md-6 ">
        @if (Session('status'))
               <div class="alert alert-success text-center">
                <strong>Message Updated Successfully</strong>
              </div>
          @endif
      </div>
      </div>
      <div class="add-slider">
      	 <a class="btn btn-primary icon-btn" href="{{route('addmessage')}}"><i class="fa fa-plus"></i>Add Message</a>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Message No</th>
                    <th>Message title</th>
                    <th>Message Photo</th>
                    <th>News Status</th>
                    <th>action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php $x=0;?>
                  @foreach($all_messages as $all_message)
                     <?php $x++;?>
                  <tr>
                    <td><?php echo $x;?></td>
                   
                    <td>{{str_limit($all_message->message_title, 80, ' ...')}}</td>
                  
                    <td>
                     <img height="50" width="100" src="{{asset('assets/uploads/message')}}/{{$all_message->message_photo }}" alt="Message Photo">
                   </td>
                    <td>
                     @if($all_message->message_status ==1)
                       <a  href="{{route('unpublish',$all_message->id)}}" class="btn btn-small btn-success ">Publish</a>
                     @else
                     <a  href="{{route('publish',$all_message->id)}}" class="btn btn-small btn-secondary ">Unpublish</a>
                     @endif

                    </td>
                    <td>
                      
                      <div class="btn-group action-group">
                         <a class="btn btn-primary" href="{{route('editmessage',$all_message->id)}}"><i class="fa fa-lg fa-edit"></i></a>  
                        <a class="btn btn-danger" href="#"  data-toggle="modal" data-target="#{{$all_message->id}}"><i class="fa fa-lg fa-trash"></i></a> 
                      </div>
                    </td>
                   
                  </tr>


                  <!-- Modal -->
                  <div class="modal fade" id="{{$all_message->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">are you sure want to delete Message?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <form action="{{route('deletemessage',$all_message->id)}}">
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