@extends('layouts.admin-app')
@section('content')
   <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">User Profile</h4>
       </div>

     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-4">
           <div class="profile-card-3">
            <div class="card">
             <div class="user-fullimage">
               <img src="assets/images/avatars/avatar-22.png" alt="user avatar" class="card-img-top">
                <div class="details">
                  <h5 class="mb-1 text-white ml-3">Mark Jhonsan</h5>
                  <h6 class="text-white ml-3">Senior Designer</h6>
                 </div>
              </div>
            
             </div>
            </div>
        </div>
        <div class="col-lg-8">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                </li>
             
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3"> Profile</h5>
                    <div class="row">
                       
                        <div class="col-md-12">
                            
                            <table class="table table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            <strong>Name:</strong>  
                                            {{ ucfirst($data->first_name) }}
                                            {{ ucfirst($data->last_name) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Emai:</strong>
                                            {{ $data->email }}
                                        </td>
                                    </tr>    
                                    <tr>
                                        <td>
                                            <strong>DOB:</strong>  
                                            {{ $data->dob }}
                                        </td>
                                    </tr>        

                                    <tr>
                                        <td>
                                            <strong>Sex:</strong>  
                                            {{ ucfirst($data->sex) }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <strong>User Type:</strong>  
                                            {{ $data->user_role }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Department:</strong>  
                                            {{ $data->department_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>User ID:</strong>  
                                            {{ $data->job_id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Matchin IP:</strong>  
                                            {{ $data->local_ip }}
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <strong>Network IP:</strong>  
                                            {{ $data->common_ip }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/row-->
                </div>
              
                <div class="tab-pane" id="edit">
                    <form method="POST" action="{{route('update.staff.profile', $data->id)}}">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="first_name" value="{{ old( 'first_name', $data->first_name) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="last_name" value="{{ old( 'last_name', $data->last_name) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email"  name="email" value="{{ old( 'email', $data->email) }}">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">DOB</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="date" name="dob" value="{{ old( 'dob', $data->dob) }}" >
                            </div>
                        </div>

                       
                       
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">                                
                                <input type="submit" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
      </div>        
    </div>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
@endsection