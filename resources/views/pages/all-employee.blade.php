@extends('layouts.admin-app')

@section('content')     

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
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                  @if(!$data->isEmpty())
                      @if(isset($data))
                          @foreach($data as $values)
                            <tr>                        
                                <td>
                                    <a href="{{ route('admin.employee.details', $values->id) }}"> 
                                      {{ ucfirst($values->first_name) }} 
                                      {{ ucfirst($values->last_name)}}
                                    </a> 
                                </td>
                                <td> {{ $values->job_id }} </td>
                                <td>{{ $values->local_ip}}</td>
                                <td>{{ $values->email}}</td>
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
