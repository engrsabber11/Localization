<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand" href="#">@lang('home.site_name')</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">@lang('home.home_menu')</a></li>
                        <li><a href="#">@lang('home.about_menu')</a></li>
                        <li><a href="#">@lang('home.contact_menu')</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{url('locale/en')}}"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png" height="15"> English</a></li>
                        <li><a href="{{url('locale/bn')}}"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Flag_of_Bangladesh_%281971%29.svg/1200px-Flag_of_Bangladesh_%281971%29.svg.png" height="15"> বাংলা</a></li>
                    </ul>
              </div>
            </nav>
            <div class="jumbotron">
                <h3 align="center">@lang('home.message')</h3>
            </div>
        </div>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </body>
</html>
