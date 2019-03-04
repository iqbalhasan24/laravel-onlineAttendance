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


                    <div class="row">  
                      <div class="col-md-3">  
                         <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text"  name="first_name" class="form-control form-control-square" id="first_name" placeholder="Enter First Name">
                         </div>
                      </div>

                      <div class="col-md-3"> 
                         <div class="form-group">
                            <label for="input-13">Last Name</label>
                            <input type="text"  name="last_name" class="form-control form-control-square" id="input-13" placeholder="Enter Last Name">
                         </div>
                      </div>




                      <div class="col-md-3"> 
                          <div class="form-group" data-select2-id="57">
                            <label>Gender</label>
                            <select name="sex" class="form-control single-select select2-hidden-accessible" >
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="common">Common</option>
                            </select>
                          </div>
                      </div>

                      <div class="col-md-3"> 
                         <div class="form-group">
                            <label for="input-13">Date Of Birth</label>
                            <input type="text" id="autoclose-datepicker" name="dob" class="form-control">
                         </div>
                      </div>
                   </div>   


                      <div class="row">
                      <div class="col-md-3">  
                         <div class="form-group">
                            <label for="department_name">Department </label>
                            <input type="text"  name="department_name" class="form-control form-control-square" id="department_name" placeholder="Enter Department ">
                         </div>
                      </div>

                      <div class="col-md-3"> 
                          <div class="form-group" data-select2-id="57">
                            <label>Staff Type</label>
                            <select name="user_role" class="form-control single-select select2-hidden-accessible" >
                                <option value="oparetor">Oparetor</option>
                                <option value="staff">Staff</option>
                            </select>
                          </div>
                      </div>

                      <div class="col-md-3"> 
                          <div class="form-group" data-select2-id="57">
                            <label>Staff Type</label>
                            <select name="user_role" class="form-control single-select select2-hidden-accessible" >
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                                <option value="cancel">Cancel</option>
                            </select>
                          </div>
                      </div>
                      <div class="col-md-3">  
                         <div class="form-group">
                            <label for="job_id">Employee ID </label>
                            <input type="text"  name="job_id" class="form-control form-control-square" id="department_name" placeholder="Enter Department ">
                         </div>
                      </div>
                     
                    </div>

                     <div class="row">


                      <div class="col-md-3"> 
                          <div class="form-group" data-select2-id="57">
                            <label for="local_ip">Device IP</label>
                            <input type="text"  name="local_ip" class="form-control form-control-square" id="department_name" placeholder="Enter Department ">
                          </div>
                      </div>

                      <div class="col-md-3"> 
                          <div class="form-group" data-select2-id="57">
                            <label for="password">Password</label>
                            <input type="text"  name="password" class="form-control form-control-square" id="password" placeholder="Enter Password ">
                            
                          </div>
                      </div>
                      <div class="col-md-3"> 
                          <div class="form-group" data-select2-id="57">
                            <label for="repassword">Retype Password</label>
                            <input type="text"  name="repassword" class="form-control form-control-square" id="repassword" placeholder="Enter Password ">
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
                       <button type="submit" class="btn btn-primary shadow-primary btn-square px-5 pull-right"><i class="icon-lock"></i> Save</button> 
                       </div>
                      </div>
                    </div>
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
                    <tr>                        
                        <td><a href=""> ABC</a> </td>
                        <td>Education</td>
                        <td>Education</td>
                        <td>24.00</td>
                        <td><a href=""> Edit</a> </td>
                        
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
