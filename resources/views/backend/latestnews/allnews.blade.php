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
        @if (Session('deletenotice'))
               <div class="alert alert-danger text-center">
                <strong>{{session('deletenotice')}}</strong>
              </div>
          @endif
      </div>
      </div>
      <div class="add-slider">
      	 <a class="btn btn-primary icon-btn" href="{{route('addnews')}}"><i class="fa fa-plus"></i>Add latest news</a>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>News serial</th>
                    <th>News title</th>
                    <th>News Status</th>
                    <th>action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php $x=0;?>
                  @foreach($latestnews as $latestnew)
                     <?php $x++;?>
                  <tr>
                    <td><?php echo $x;?></td>
                   
                    <td>{{str_limit($latestnew->latestnews_title, 80, ' ...')}}</td>
                    <td>
                     @if($latestnew->latestnews_status ==1)
                       <a  href="{{route('unpublish_news',$latestnew->latestnews_id)}}" class="btn btn-small btn-success ">Publish</a>
                     @else
                      <a href="{{route('publish_news',$latestnew->latestnews_id)}}" class="btn btn-small btn-secondary ">Unpublish</a>
                     @endif

                    </td>
                    <td>
                      
                      <div class="btn-group action-group">
                         <a class="btn btn-primary" href="{{route('editnews',$latestnew->latestnews_id)}}"><i class="fa fa-lg fa-edit"></i></a>  
                        <a class="btn btn-danger" href="#"  data-toggle="modal" data-target="#{{$latestnew->latestnews_id}}"><i class="fa fa-lg fa-trash"></i></a> 
                      </div>
                    </td>
                   
                  </tr>


                  <!-- Modal -->
                  <div class="modal fade" id="{{$latestnew->latestnews_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">are you sure want to delete News?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <form action="{{route('deletenews',$latestnew->latestnews_id)}}">
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