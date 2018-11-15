@extends('layouts.backend')
@section('contents')

   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> All Sponsor</h1>
          <p>you can update, delete, edit from this page</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">All slider</li>
        </ul>
      </div>
      <div class="add-slider">
      	 <a class="btn btn-primary icon-btn" href="{{route('addsponsor')}}"><i class="fa fa-plus"></i>Add Sponsor  </a>
      </div>

             <div class="row justify-content-md-center ">
               <div class="col-md-6 ">
                @if (Session('delete_sponsor'))
                       <div class="alert alert-danger text-center">
                        <strong>{{Session('delete_sponsor')}}</strong>
                      </div>
                  @endif
              </div>
            </div>
         @if (Session('updatedsponsor'))
                <p class="sucmsg">Sponsor Updated Suceesfully</p>
          @endif
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Sponsor No</th>
                    <th>Sponsor image</th>
                    <th>Sponsor status</th>
                    <th>created at</th>
                    <th>action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php $x=0;?>
                  @foreach($sponsors as $sponsor)
                  <?php $x++;?>
                  <tr>
                    <td>{{$x}}</td>
                    <td> <img height="50" width="100" src="{{asset('assets/uploads/sponsor')}}/{{$sponsor->sponsor_img}}" alt="Image"></td>
                
                    <td>
                     @if($sponsor->sponsor_status ==1)
                       <a  href="{{route('deactive_sponsor',$sponsor->id)}}" class="btn btn-small btn-success ">Active</a>
                     @else
                      <a href="{{route('active_sponsor',$sponsor->id)}}" class="btn btn-small btn-secondary ">Deactive</a>
                     @endif
                    </td>
                    <td>{{$sponsor->created_at}}</td>
                    <td>
                      
                      <div class="btn-group action-group">
                        <a class="btn btn-primary" href="{{route('editsponsor',$sponsor->id)}}"><i class="fa fa-lg fa-edit"></i></a>
                        <a class="btn btn-danger" href="#"  data-toggle="modal" data-target="#{{$sponsor->id}}"><i class="fa fa-lg fa-trash"></i></a>
                      </div>
                    </td>
                   
                  </tr>


                  <!-- Modal -->
                  <div class="modal fade" id="{{$sponsor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">are you want to sure delete Sponsor?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <form action="{{route('deletesponsor',$sponsor->id)}}">
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



<script type="text/javascript">
  
  $('#deleted').click(function(){
    return true;

  });
</script>

    @endsection