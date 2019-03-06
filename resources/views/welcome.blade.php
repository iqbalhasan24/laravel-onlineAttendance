<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Login</title>
  <!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet"/>
  
</head>

<body>
 <!-- Start wrapper-->
 <div id="wrapper">
 	<div class="row">
 		<div class="col-md-10 offset-md-1">
 				<span class="pull-right" style="margin-top: 10px;">

 				@if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/dashboard') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>                        
                    @endauth
                
            	@endif
 			</span>
 		</div>
 	</div>
 	
	<div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">

		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo-icon.png">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Attendance</div>
		    
		    <form method="POST" action="{{ route('post.staff.in.out') }}">
                @csrf 
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="exampleInputUsername" class="sr-only">Username</label>
				  
				  <input type="text" id="exampleInputUsername" name="job_id" value="{{ old('job_id') }}" class="form-control form-control-rounded" placeholder="User ID">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>

				  <input type="hidden" name="common_ip" value="<?php echo  $_SERVER['REMOTE_ADDR']; ?>">
	                <input type="hidden" name="local_ip" value="<?php echo getHostByName(getHostName());?>">
	                @if ($errors->has('job_id'))
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $errors->first('job_id') }}</strong>
	                    </span>
	                @endif
			   </div>
			   <div style="text-align: center;">
					   <span style="color: #f00;"> 
		                            @if(session('message'))
		                              {{session('message')}}
		                            @endif
		                </span>			   	
			   </div>
			  </div>
			 <button type="submit" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Sign In</button>
			 </form>
		   </div>
		  </div>

	     </div>
    
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
	</div>
  <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
 
</body>
</html>
