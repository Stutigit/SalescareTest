<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Salescare mmmm</title>
    <link rel="icon" type="image/x-icon" href=""/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('cork/HTML/ltr/demo4/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('cork/HTML/ltr/demo4/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('cork/HTML/ltr/demo4/assets/css/authentication/form-1.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('cork/HTML/ltr/demo4/assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cork/HTML/ltr/demo4/assets/css/forms/switches.css')}}">
    <style>

        .form-image-cstm {
          display: -webkit-box;
          display: -ms-flexbox;
          display: -webkit-flex;
          display: flex;
          -webkit-flex-direction: column;
          -ms-flex-direction: column;
          flex-direction: column;
          position: fixed;
          right: 0;
          min-height: auto;
          height: 100vh;
          width: 50%;
      }
      .form-image-cstm .cstm-image {
        
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /*background-color: #060818;*/
        background-position: center center;
        background-repeat: no-repeat;
        background-size: 75%;
        background-position-x: center;
        background-position-y: center;
    }

/*.errormsg
{
    color: #100 !important;
    }*/

</style>
</head>
<body class="form">


    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">
							Sign Into 
	
							<a href="index.html"><span class="brand-name">BPM360</span></a>	
							
						</h1>
                        <!-- <p class="signup-link">New Here? <a href="auth_register.html">Create an account</a></p> -->
                        

                        <form class="text-left" action="{{ route('login') }}"  method="POST" id="LoginForm">
                            @csrf
                            <div class="form">
								
                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input id="email" name="email" type="text" class="form-control" placeholder="E-Mail Address">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                </div>

                               

                               <br>


                              

                               <br>

                               <div class="d-sm-flex justify-content-between">
                                <div class="field-wrapper toggle-pass">
                                    <p class="d-inline-block">Show Password</p>
                                    <label class="switch s-primary">
                                        <input type="checkbox" id="toggle-password" class="d-none">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="field-wrapper">
                                    <!-- <button type="submit" class="btn btn-primary" value="">Sign-In</button> -->
                                    <button type="button" class="btn btn-primary" value="" onclick="ManualLogin()">Sign-In</button>
                                </div>

                            </div>

                                <!-- <div class="field-wrapper text-center keep-logged-in">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                          <input type="checkbox" class="new-control-input">
                                          <span class="new-control-indicator"></span>Keep me logged in
                                        </label>
                                    </div>
                                </div> -->

                                <!-- <div class="field-wrapper">
                                    <a href="auth_pass_recovery.html" class="forgot-pass-link">Forgot Password?</a>
                                </div> -->

                            </div>
                        </form>                        
                        <!-- <p class="terms-conditions">© 2021 All Rights Reserved. <a href="index.html">CORK</a> is a product of Designreset. <a href="javascript:void(0);">Cookie Preferences</a>, <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.</p> -->

                    </div>                    
                </div>
            </div>
        </div>
        <div class="form-image-cstm">
            <div class="cstm-image">
            </div>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('cork/HTML/ltr/demo4/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('cork/HTML/ltr/demo4/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('cork/HTML/ltr/demo4/bootstrap/js/bootstrap.min.js')}}"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('cork/HTML/ltr/demo4/assets/js/authentication/form-1.js')}}"></script>


    <script type="text/javascript">

        ManualLogin=()=>{

            LoginForm=document.getElementById('LoginForm');

            CaptchaText=document.getElementById('CaptchaText').value;

            $.ajax({
                type:"post",
                url:"{{url('CustomCaptcha-GetCaptchaCode')}}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                beforeSend:()=>{},
                success:response=>{
                    // alert(res);
                    res=JSON.parse(response);
                    if(CaptchaText==res.SessionCaptcha)
                    {
                         $('.InvalidCaptcha').css('display','none');

                         LoginForm.submit();
                    }
                    else
                    {

                        $('.InvalidCaptcha').css('display','block');
                        // alert(`In valid Captcha  ctxt=${CaptchaText} sescap=${res.SessionCaptcha}`)

                    }

                }
            });

        }
    </script>

</body>
</html>
