@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                    <div class="col-md-8">
                                        <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                        @if ($errors->has('first_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>                                
                            </div>
                               <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                    <div class="col-md-8">
                                        <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                        @if ($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                   </div>
                               </div>
                            </div>   
                        </div>



                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                                    <div class="col-md-8">
                                        <input id="dob" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" required autofocus>

                                        @if ($errors->has('dob'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('dob') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>                            
                            </div>
                            <div class="col-md-6">                                
                                 <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                                    <div class="col-md-8">
                                        <input id="department_name" type="text" class="form-control{{ $errors->has('department_name') ? ' is-invalid' : '' }}" name="department_name" value="{{ old('department_name') }}" required autofocus>

                                        @if ($errors->has('department_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('department_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>    
                        </div>
                            

                        <div class="row">
                            <div class="col-md-6">
                            
                                <div class="form-group row">
                                    <label for="user_role" class="col-md-4 col-form-label text-md-right">{{ __('User Role') }}</label>

                                    <div class="col-md-8">
                                        <input id="user_role" type="text" class="form-control{{ $errors->has('user_role') ? ' is-invalid' : '' }}" name="user_role" value="{{ old('user_role') }}" required autofocus>

                                        @if ($errors->has('user_role'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('user_role') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                           <div class="col-md-6">
                                 <div class="form-group row">
                                    <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                                    <div class="col-md-8">
                                        <select name="status" class="form-group form-control">
                                              <option value="active">Active</option>
                                              <option value="inactive">Inactive</option>
                                              <option value="cancle">Cancel</option>     
                                        </select>

                                        @if ($errors->has('status'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('status') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>    
                        </div>
                        


                        <div class="row">
                           <div class="col-md-6">
                                 <div class="form-group row">
                                    <label for="job_id" class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>

                                    <div class="col-md-8">
                                        <select name="sex" class="form-group form-control">
                                              <option value="male">Male</option>
                                              <option value="female">Female</option>       
                                        </select>

                                        @if ($errors->has('sex'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('sex') }}</strong>
                                            </span>
                                        @endif
                                   </div>
                               </div>                           
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="job_id" class="col-md-4 col-form-label text-md-right">{{ __('Employee ID') }}</label>

                                        <div class="col-md-8">
                                            <input id="job_id" type="text" class="form-control{{ $errors->has('job_id') ? ' is-invalid' : '' }}" name="job_id" value="{{ old('job_id') }}" required autofocus>

                                            @if ($errors->has('job_id'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('job_id') }}</strong>
                                                </span>
                                            @endif
                                       </div>
                                   </div>                              
                            </div>    
                        </div>    





                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="job_id" class="col-md-4 col-form-label text-md-right">{{ __('Employee Machine IP') }}</label>

                                    <div class="col-md-8">
                                        <input id="local_ip" type="text" class="form-control{{ $errors->has('local_ip') ? ' is-invalid' : '' }}" name="local_ip" value="{{ old('local_ip') }}" required autofocus>

                                        @if ($errors->has('local_ip'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('local_ip') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>                            
                            </div>    
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-8">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>                             
                            </div>
                        </div>      

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-8">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-8">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>                                
                            </div>    
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
