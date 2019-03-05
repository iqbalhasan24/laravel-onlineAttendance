@extends('layouts.admin-app')

@section('content')
      <!-- Breadcrumb-->
      <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> {{ $pageTitle}} 
              </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
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
                                <td> {{ $values->in_time }} </td>
                                <td>{{ $values->out_time}}</td>
                                <td>{{ $values->total_hour}}</td>                           
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
