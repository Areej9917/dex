<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Login - ArchitectUI HTML Bootstrap 4 Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">
    
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    
    <link href="{{asset('css/main.8d288f825d8dffbbe55e.css')}}" rel="stylesheet"></head>
<style>
       
* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;	
	font-family: Raleway, sans-serif;
   
}
body {
	background: linear-gradient(90deg, #363636, #b50000);	
    overflow:hidden;	
}

.container {
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
}
</style> 
    <body>
    <div class="container">
        
	<div class="screen">
        
		<div class="screen__content">
		
            <form method="POST" class="login" action="{{ route('login') }}">
             @csrf 
            <img src="{{asset('images/logo-dex.png')}}" style="width: 190px;height: 190px;margin-bottom: -40px;margin-top: -50px;">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="email" class="login__input" name="email" id="exampleEmail" placeholder="User name / Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" name="password" id="exampleEmail" placeholder="Password">
				</div>
				<button class="button login__submit">
                    <span class="button__text">Log In</span>
					<input type="button" class="button__text"></span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
		
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
       

<!-- <div class="app-container app-theme-white body-tabs-shadow">
            <div class="app-container">
                <div class="h-100">
                    <div class="h-100 no-gutters row">
                        <div class="d-none d-lg-block col-lg-4">
                            <div class="slider-light">
                                <div class="slick-slider">
                                    <div>
                                        <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                            <div class="slide-img-bg" style="background-image: url('assets/images/originals/city.jpg');"></div>
                                            <div class="slider-content"><h3>Perfect Balance</h3>
                                                <p>ArchitectUI is like a dream. Some think it's too good to be true! Extensive collection of unified React Boostrap Components and Elements.</p></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                                <div class="slide-img-bg" style="background-image: url('assets/images/originals/citynights.jpg');"></div>
                                                <div class="slider-content"><h3>Scalable, Modular, Consistent</h3>
                                                    <p>Easily exclude the components you don't require. Lightweight, consistent Bootstrap based styles across all elements and components</p></div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning" tabindex="-1">
                                                    <div class="slide-img-bg" style="background-image: url('assets/images/originals/citydark.jpg');"></div>
                                                    <div class="slider-content"><h3>Complex, but lightweight</h3>
                                                        <p>We've included a lot of components that cover almost all use cases for any type of application.</p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                                            {{-- <div class="app-logo"></div> --}}
                                            <img src="{{asset('images/dex.gif')}}" style="width:150px;margin:20px 0px">
                                            <h4 class="mb-0">
                                                <span class="d-block">Welcome back,</span>
                                                <span>Please sign in to your account.</span></h4>
                                                {{-- <h6 class="mt-3">No account? <a href="javascript:void(0);" class="text-primary">Sign up now</a></h6> --}}
                                                <div class="divider row"></div>
                                                <div>
                                                    <form method="POST" action="{{ route('login') }}">
                                                        @csrf                                
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group"><label for="exampleEmail" class="">Email</label><input name="email" id="exampleEmail" placeholder="Email here..." type="text" class="form-control"></div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group"><label for="examplePassword" class="">Password</label><input name="password" id="examplePassword" placeholder="Password here..." type="password"
                                                                    class="form-control"></div>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Keep me logged in</label></div> --}}
                                                            <div class="divider row"></div>
                                                            <div class="d-flex align-items-center">
                                                                {{-- <div class="ml-auto"><a href="javascript:void(0);" class="btn-lg btn btn-link">Recover Password</a> --}}
                                                                    <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript" src="{{asset('js/main.8d288f825d8dffbbe55e.js')}}"></script></body>
                            </html>
                             -->