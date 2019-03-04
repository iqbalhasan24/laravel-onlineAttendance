<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #0A243E;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>                        
                    @endauth
                </div>
            @endif

            <div class="content">

                <div class="links">
                     <form method="POST" action="{{ route('post.staff.in.out') }}">
                        @csrf                       
                            <div class="col-lg-6">                             

                                    <div class="col-md-6">
                                        <input id="job_id" type="text" class="form-control{{ $errors->has('job_id') ? ' is-invalid' : '' }}" name="job_id" value="{{ old('job_id') }}" placeholder="User ID" required autofocus>
                                        <input type="hidden" name="common_ip" value="<?php echo  $_SERVER['REMOTE_ADDR']; ?>">
                                        <input type="hidden" name="local_ip" value="<?php echo getHostByName(getHostName());?>">
                                        @if ($errors->has('job_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('job_id') }}</strong>
                                            </span>
                                        @endif
                                         <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>

                                    <div class="col-md-6">
                                        <h2 style="color: #f00;"> 
                                          @if(session('message'))
                                          {{session('message')}}
                                        @endif
                                        </h2>
                                    </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
