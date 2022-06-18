<!DOCTYPE html>
<html lang="en">
	<head>

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

             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <link href="{{asset('css/main.8d288f825d8dffbbe55e.css')}}" rel="stylesheet">






        </head>

        @yield('head')
	</head>
	<body>

    @yield('main-content')



    <script type="text/javascript" src="{{asset('js/main.8d288f825d8dffbbe55e.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#show_hide_password .input-group-prepend span a").on('click', function(event) {
                event.preventDefault();
                if($('#show_hide_password input').attr("type") == "text"){
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password .input-group-prepend span a i').addClass( "fa-eye-slash" );
                    $('#show_hide_password .input-group-prepend span a i').removeClass( "fa-eye" );
                }else if($('#show_hide_password input').attr("type") == "password"){
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password .input-group-prepend span a i').removeClass( "fa-eye-slash" );
                    $('#show_hide_password .input-group-prepend span a i').addClass( "fa-eye" );
                }
            });
        });
    </script>--}}
</body>
</html>
