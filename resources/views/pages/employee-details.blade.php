@extends('layouts.admin-app')

@section('content')
     
      <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> {{ $pageTitle}} 
                        @if (Route::has('register') && Auth::user()->user_role=='admin')
                            <span class="pull-right"> <a href="{{ route('register') }}" class="bnt btn-info"> Add New Employee</a></span>
                        @endif
              </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>
					<tr>
                        <th>Name</th>
                        <td>{{ ucfirst($data->first_name) }} {{ ucfirst($data->last_name)}}</td>
                     </tr>
                     <tr>   
                        <th>Gender </th>
                        <td>{{ $data->sex}}</td>
                     </tr>

                     <tr>
                        <th>DOB</th>
                        <td>{{ $data->dob}}</td>
                     </tr>
                     <tr>
                        <th>Email</th>
                        <td>{{ $data->email}}</td>
                     </tr>
                     <tr>   
                        <th>Employee ID </th>
                        <td> {{ $data->job_id }} </td>
                    </tr>
                     <tr>
                        <th>Department </th>
                        <td> {{ $data->department }} </td>
                     </tr>
                     <tr>   
                        <th>User Type </th>
                        <td>{{ $data->user_role}}</td>
                    </tr>
                     <tr>    
                        <th>Local IP</th>
                        <td>{{ $data->local_ip}}</td>
                    </tr>
                     <tr>   
                        <th>Global IP </th>
                        <td>{{ $data->common_ip}}</td>
                    </tr>
                     <tr>    
                        <th>Join Date </th>
                        <td>{{ $data->created_at}}</td>
                    </tr>
                     <tr>    
                        <th>Status </th>
                        <td>{{ $data->status}}</td>
                    </tr>
                    
                
                    
                    
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
      <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
@endsection
