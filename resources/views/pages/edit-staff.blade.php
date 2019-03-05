@extends('layouts.admin-app')
@section('content')
      <!-- Breadcrumb-->
      <div class="row pt-2 pb-2">
        <div class="col-sm-9">
          <h4 class="page-title">Data Tables</h4>         
       </div>
     </div>

      <div class="row">
        <div class="col-lg-12">  
            <div class="card">
                <div class="card-body">

                <form>
                   @if(isset($formdata))                 
                 
                    <div class="row">  
                      <div class="col-md-3">  
                         <div class="form-group">
                            <label for="first_name">First Name</label>
                             <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old( 'department_name', $formdata->first_name) }}" required autofocus>
                         </div>
                      </div>

                      <div class="col-md-3"> 
                         <div class="form-group">
                            <label for="input-13">Last Name</label>
                            <input type="text"  name="last_name" class="form-control form-control-square" id="input-13" value="{{$formdata->last_name }}">
                         </div>
                      </div>


                      <div class="col-md-3"> 
                          <div class="form-group" data-select2-id="57">
                            <label>Gender</label>
                              <select class="form-control" name="sex" >
                              <?php $se_lists = ['male', 'female']; ?>
                              @foreach($se_lists as $se_list)
                              <option value="{{$formdata->sex}}" @if(old('sex', $formdata->sex) == $se_list )  @endif > 
                                  {{ ucfirst( $se_list) }}
                              </option>
                              @endforeach

                            </select>
                          </div>
                      </div>

                      <div class="col-md-3"> 
                         <div class="form-group">
                            <label for="input-13">Date Of Birth</label>
                            <input type="text" id="autoclose-datepicker" name="dob" class="form-control" value="{{$formdata->dob }}">
                         </div>
                      </div>
                   </div>  
                      <div class="row">
                      <div class="col-md-3">  
                         <div class="form-group">
                            <label for="department_name">Department </label>
                            <input type="text"  name="department_name" class="form-control form-control-square" id="department_name" value="{{ old( 'department_name', $formdata->department_name) }}">
                         </div>
                      </div>

                      <div class="col-md-3"> 
                          <div class="form-group" data-select2-id="57">
                            <label>Staff Type</label>
                            <select class="form-control" name="user_role" >
                              <?php $lists = ['admin', 'oparetor', 'staff']; ?>
                              @foreach($lists as $list)

                              <option value="{{$formdata->user_role}}" @if(old('user_role', $formdata->user_role) == $list )  @endif > 
                                  {{ ucfirst( $list) }}
                              </option>
                              @endforeach

                            </select>

                          </div>
                      </div>

                      <div class="col-md-3"> 
                          <div class="form-group" data-select2-id="57">
                            <label>Status</label>
                            <select class="form-control" name="status" >
                              <?php $sta_lists = ['active', 'inactive', 'cancel']; ?>
                              @foreach($sta_lists as $sta_list)

                              <option value="{{$formdata->status}}" @if(old('status', $formdata->status) == $sta_list )  @endif > 
                                  {{ ucfirst( $sta_list) }}
                              </option>
                              @endforeach

                            </select>
                          </div>
                      </div>
                      <div class="col-md-3">  
                         <div class="form-group">
                            <label for="job_id">Employee ID </label>
                            <input type="text"  name="job_id" class="form-control form-control-square" id="job_id" value="{{ old( 'job_id', $formdata->job_id) }}">
                         </div>
                      </div>
                     
                    </div>

                     <div class="row">
                      <div class="col-md-3"> 
                          <div class="form-group" data-select2-id="57">
                            <label for="local_ip">Device IP</label>
                            <input type="text"  name="local_ip" class="form-control form-control-square" id="local_ip" value="{{ old( 'local_ip', $formdata->local_ip) }}">
                          </div>
                      </div>

                      <div class="col-md-3"> 
                          <div class="form-group" data-select2-id="57">
                            <label for="password">Password</label>
                            <input type="password"  name="password" class="form-control form-control-square" id="password" placeholder="Enter Password ">
                            
                          </div>
                      </div>

                       <div class="col-md-3"> 
                         <div class="form-group">
                            <label for="input-13">Photo</label>
                            <input type="file" class="form-control" name="">
                         </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12"> 
                      <div class="form-group">
                       <button type="submit" class="btn btn-primary shadow-primary btn-square px-5"><i class="icon-lock"></i> Save</button> 
                       </div>
                      </div>
                    </div>
                @endif
                  </form>
                </div>
            </div>
          </div>
      </div>
      <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


      <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> All Employee Informations   </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Gender </th>
                        <th>DOB</th>
                        <th>Email</th>
                        <th>Department </th>
                        <th>User type </th>
                        <th>Device ID</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>  
                        <td>{{$formdata->first_name}} {{$formdata->last_name}} </td>
                        <td>{{$formdata->sex}}</td>
                        <td>{{$formdata->dob}}</td>
                        <td>{{$formdata->email}}</td>
                        <td>{{$formdata->department_name}}</td>
                        <td>{{$formdata->user_role}}</td>
                        <td>{{$formdata->local_ip}}</td>                     
                        <td>{{$formdata->status}}</td>
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
