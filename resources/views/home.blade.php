@extends('layouts.admin-app')

@section('content')
      <!-- Breadcrumb-->
      <div class="row pt-2 pb-2">
        <div class="col-sm-9">
          <h4 class="page-title">Data Tables</h4>         
       </div>
     </div>

      

      <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> {{ $pageTitle}} 
                        @if (Route::has('register'))
                            <span class="pull-right"> <a href="{{ route('register') }}" class="bnt btn-info"> Add New Employee</a></span>
                        @endif

              </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Employee ID </th>
                        <th>Device ID</th>
                        <th>Paid Hours(This Month)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                  @if(!$data->isEmpty())
                      @if(isset($data))
                          @foreach($data as $key => $values) 
                            <tr>                        
                                <td>
                                    <a href="{{ route('admin.attendance.details', $values->id) }}"> 
                                      {{ ucfirst($values->first_name) }} {{ ucfirst($values->last_name)}}
                                    </a> 
                                </td>
                                <td> {{ $values->job_id }} </td>
                                <td>{{ $values->local_ip}}</td>
                                <td>
                                 <?php
                                      $arr=$values['userAttendances'];
                                      $total=0.0;
                                         foreach($arr as $h_key => $h_value):
                                            $cy= \Carbon\Carbon::now()->format('Y');
                                            $cm= \Carbon\Carbon::now()->format('m'); 
                                            $attendance_in = $h_value['attendance_in'];   
                                            $att_y = date('Y', strtotime($attendance_in));
                                            $att_m = date('m', strtotime($attendance_in));
                                            if( $cy == $att_y && $cm == $att_m  ){
                                                $hour =  (float) $h_value['total_hour'];
                                                $total +=$hour;
                                            }                                            
                                         endforeach;                                    
                                          echo $total;                                        
                                       ?>
                                </td>
                                <td><a href="{{ route('admin.edit.employee', $values->id) }}"> Edit</a> </td>                                
                            </tr>
                          @endforeach
                      @endif    
                  @endif    
                    
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
      <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
@endsection
