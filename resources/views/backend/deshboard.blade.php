@extends('layouts.backend')
@section('contents')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Welcome To Bangladesh Chamber</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Users</h4>
              <p><b>  
                 @if($alluser<=10)
                    0{{$alluser}}
                  @else
                  {{$alluser}}
                 @endif
              </b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-table fa-3x"></i>
            <div class="info">
              <h4>Director</h4>
              <p><b>
                
              @if($director<=10)
                    0{{$director}}
                  @else
                  {{$director}}
                 @endif

              </b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-video-camera fa-3x"></i>
            <div class="info">
              <h4>All Video</h4>
              <p><b>
                   @if($video<=10)
                    0{{$video}}
                  @else
                  {{$video}}
                 @endif

              </b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>All Sponsor</h4>
              <p><b>
              @if($sponsor<=10)
                    0{{$sponsor}}
                  @else
                  {{$sponsor}}
                 @endif
              </b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
       
     
      </div>
 
    </main>


    @endsection