<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/localization.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
        <!--Main Navigation-->
        <header>

<!--Navbar-->
<!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar"> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">@lang('home.home_menu')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">@lang('home.about_menu')</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="#">@lang('home.contact_menu')</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link image" href="locale/en"><img src="{{asset('img/american.png')}}" alt=""> English</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link image" href="locale/ar"><img src="{{asset('img/eg.png')}}" alt="">Arabic</a>
                    </li>
                
                    
                </ul>
            </div>
        </div>
    </div>
</nav>
  
<!--/.Navbar-->

<!--Mask-->
<div id="intro" class="view">

    <div class="mask rgba-black-strong">

        <div class="container-fluid d-flex align-items-center justify-content-center h-100">

            <div class="row d-flex justify-content-center text-center">

                <div class="col-md-10">

                    <!-- Heading -->
                    <h2 class="display-4 font-weight-bold white-text pt-5 mb-2" style="color:#fff">@lang('home.message')</h2>

                    <!-- Divider -->
                    <hr class="hr-light" style="color:#fff !important; padding:5px;">

                    <!-- Description -->
                    <h4 class="white-text my-4" style="color:#fff">@lang('home.paragraph')</h4>
                

                </div>

            </div>

        </div>

    </div>

</div>
<!--/.Mask-->

</header>
<!--Main Navigation-->



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<script src="{{asset('js/localization.js')}}"></script>
</body>
</html>