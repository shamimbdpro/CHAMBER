@extends('layouts.backend')
@section('contents')

   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> All Contact</h1>
          <p>you can update, delete, edit from this page</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">All Contact</li>
        </ul>
      </div>
       <div class="row justify-content-md-center ">
       <div class="col-md-6 ">
        @if (Session('updatecontact'))
               <div class="alert alert-success text-center">
                <strong>Contact Updated Successfully</strong>
              </div>
          @endif
      </div>
      </div>    

         <div class="row justify-content-md-center ">
       <div class="col-md-6 ">
        @if (Session('deletecontact'))
               <div class="alert alert-danger text-center">
                <strong>Contact Deleted Successfully</strong>
              </div>
          @endif
      </div>
      </div>
      

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Contact No</th>
                    <th>Contact Name</th>
                    <th>Contact Email</th>
                    <th>Contact Message</th>
                    <th>action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php $x=0;?>
                  @foreach($contact_us as $contact_info)
                     <?php $x++;?>
                  <tr>
                    <td><?php echo $x;?></td>
                   
                    <td>{{$contact_info->contact_name}}</td>
                    <td>{{$contact_info->contact_email}}</td>
                    <td>{{str_limit($contact_info->contact_message, 50, ' ...')}}</td>
                    <td>
                      
                      <div class="btn-group action-group">
                         <a class="btn btn-info" href="{{route('view_contact',$contact_info->id)}}"><i class="fa fa-lg fa-eye"></i></a>  
                         <a class="btn btn-primary" href="{{route('editcontact',$contact_info->id)}}"><i class="fa fa-lg fa-edit"></i></a>  
                        <a class="btn btn-danger" href="#"  data-toggle="modal" data-target="#{{$contact_info->id}}"><i class="fa fa-lg fa-trash"></i></a> 
                      </div>
                    </td>
                   
                  </tr>


                  <!-- Modal -->
                  <div class="modal fade" id="{{$contact_info->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">are you sure want to delete Contact?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <form action="{{route('deletecontact',$contact_info->id)}}">
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