@extends('layouts.admin-app')

@section('content')
      <!-- Breadcrumb-->
      <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> {{ $pageTitle}} </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr> <th colspan="4"> 
                      {{ $pageTitle}} 
                        Of
                     @if(isset($user)) 
                        {{ $user->first_name }} 
                        {{ $user->last_name }} 
                        -( {{ $user->job_id }} ) 
                      @endif </th></tr>                  
                    <tr>
                        <th>Date</th>
                        <th>In Time</th>
                        <th>Out Time </th>
                        <th>Paid Hours</th>
                    </tr>
                </thead>
                <tbody>

                  @if(!$data->isEmpty())
                      @if(isset($data))
                          @foreach($data as $values)
                              


                            <tr>                        
                              <td>{{ $values->attendance_in }} </td>
                              <td>
                                <?php
                                  $in_time = $values->in_time; 
                                  $in_time =date("H:i:s",strtotime($in_time));
                                ?> 
                                  {{  $in_time }}
                               </td>                                
                                <td>
                                  <?php
                                    $out_time = $values->out_time; 
                                    $out_time =date("H:i:s",strtotime($out_time));
                                  ?> 
                                  {{ $out_time }}                                  
                                <td>
                                    <?php 
                                      $total_hour= $values->total_hour;
                                      $total_hour= number_format($total_hour, 2);
                                    ?>
                                    {{ $total_hour }}
                                  </td>                           
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
