@extends('layouts.backend')
@section('contents')

   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> All Slider</h1>
          <p>you can update, delete, edit from this page</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">All slider</li>
        </ul>
      </div>
      <div class="add-slider">
      	 <a class="btn btn-primary icon-btn" href="{{route('addournews')}}"><i class="fa fa-plus"></i>Add Item  </a>
      </div>

        @if (Session('delete_news'))
                <p class="sucmsg">News Deleted Successfully</p>
          @endif 
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>News No</th>
                    <th>News image</th>
                    <th>News link</th>
                    <th>News Status</th>
                    <th>action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php $x=0;?>
                  @foreach($ourallnews as $allnews)
                     <?php $x++;?>
                  <tr>
                    <td><?php echo $x;?></td>
                    <td> <img height="50" width="80" src="{{asset('assets/uploads/ournews')}}/{{$allnews->ournews_photo}}" alt="Image"></td>
                    <td>{{$allnews->ournews_link}}</td>
                    <td>
                     @if($allnews->ournews_status ==1)
                       <a  href="{{route('Enactiveournews',$allnews->ournews_id)}}" class="btn btn-small btn-success ">Active</a>
                     @else
                      <a href="{{route('active_ournews',$allnews->ournews_id)}}" class="btn btn-small btn-secondary ">Deactive</a>
                     @endif

                    </td>
                    <td>
                      
                      <div class="btn-group action-group">
                        
                        <a class="btn btn-primary" href="{{route('editournews',$allnews->ournews_id)}}"><i class="fa fa-lg fa-edit"></i></a>  

                         <a class="btn btn-danger" href="#"  data-toggle="modal" data-target="#{{$allnews->ournews_id}}"><i class="fa fa-lg fa-trash"></i></a> 
                      </div>
                    </td>
                   
                  </tr>


                  <!-- Modal -->
                  <div class="modal fade" id="{{$allnews->ournews_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">are you want to sure delete data?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <form action="{{route('deleteournews',$allnews->ournews_id)}}">
                          <button type="submit" id='deleted' class="btn btn-primary">Delete</button>
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