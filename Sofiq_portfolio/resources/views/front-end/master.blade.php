<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/css/style.css">
    <!----------------light-box-gallery-------->
    <link href="{{ asset('/') }}/front-end/css/lightgallery.css" rel="stylesheet">
    <link href="{{ asset('/') }}/front-end/css/gallery.css" rel="stylesheet" >


</head>
<body>
<!------------------------------------------------ header section-------------------------------------------------------->
<header class="header sticky-top">
    <section class="header-section">
        <div class="container">
            <div class=" row">
                <div class="col-md-4 col-sm-12 m-auto">
                    <ul class="pagination mb-0">
                        <li class="page-item "><a class="page-link" href="{{route('/')}}">1</a></li>
                        <li class="page-item"><a class="page-link" href="{{ route('about') }}">2</a></li>
                        <li class="page-item"><a class="page-link" href="{{ route('portfolio') }}">3</a></li>
                        <li class="page-item"><a class="page-link" href="{{ route('research') }}">4</a></li>
                        <li class="page-item"><a class="page-link" href="{{ route('project1') }}">5</a></li>
                        <li class="page-item"><a class="page-link" href="{{ route('project2') }}">6</a></li>
                        <li class="page-item"><a class="page-link" href="{{ route('contact') }}">7</a></li>
                        <li class="page-item"><a class="page-link" href="{{ route('gallery') }}">8</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="top-left  col-md-9">
                    <i class="fa fa-phone"> +880-1521409419</i>
                    <i class="fa fa-envelope-o"><a href="http://www.gmail.com">bit0310@iit.du.ac.bd</a> </i>
                    <i class="fa fa-envelope-o"><a href="http://www.gmail.com">smsofiqulislam310@gmail.com</a> </i>
                </div>

                <div class="top-right col-md-3">
                    <div class="social">
                        <a href="https://www.facebook.com/smsofiqul.islam" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/sofiqul_310" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.google.com" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/in/smsofiqul-islam-310/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="https://www.behance.net/smsofiqul_islam" target="_blank"><i class="fa fa-behance" aria-hidden="true"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!------------------------------------------------ navbar section-------------------------------------------------------->

    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container ">
            <a href="{{ route('/') }}" class="navbar-brand"><img class="rounded-circle md" src="{{ asset('/') }}/front-end/image/my.jpg" style="height: 50px; width: 50px;" alt=""></a>
            <button type="button"  class="navbar-toggler" style=" border: 1px solid black;" data-toggle="collapse" data-target="#myMenu">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="myMenu" >
                <Ul class="navbar-nav mr-auto" id="menu">
                    <li class="nav-item"><a href="{{route('/')}}" class="nav-link">Home</a></li>
                    <li class="nav-item" ><a href="{{ route('about') }}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{ route('portfolio') }}" class="nav-link">Portfolio</a></li>


                    <li class="nav-item dropdown" id="dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" >MY Work</a>
                        <ul class="dropdown-menu bg-dark" id="dropdown-menu">
                            <li><a href="{{ route('research') }}" class="nav-link">Research Work</a></li>

                            <li><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="sub-dropdown">Project</a>

                                <ul class="dropdown-menu bg-dark" id="sub-dropdown-menu">
                                    <li> <a class="dropdown-item" href="{{ route('project1') }}">Project 1-2-3</a></li>
                                    <li><a class="dropdown-item" href="{{ route('project2') }}" >Others-Project</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
                </Ul>
                <form class="form-inline ">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <ul class="navbar-nav navbar-right ml-auto">
                    <li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#myModallogin" >Login</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>

                </ul>
            </div>
        </div>
    </nav>


</header>

@yield('body')



<!------------------------------------------------ modal login form  section-------------------------------------------------------->
<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <div class="modal fade " id="myModallogin">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3>Login Form</h3>
                            <button class="" data-dismiss="modal">
                                &times;
                            </button>
                        </div>

                        <div class="modal-body">
                            <form action="{{ route('/') }}" method="post">
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2" for="email1">Email Address</label>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" id="email1" required="1"  class="form-control" placeholder="Enter Email"/>
                                    </div>
                                    <div class="col-sm-4">
                                        <span class="error_form" id="email1_error_msg"></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2" for="password1">Password</label>
                                    <div class="col-sm-6">
                                        <input type="password" name="password" id="password1" required="1"  class="form-control" placeholder="Enter Password"/>
                                        <input type="checkbox"  id="showRegPassword"/> Show Password

                                    </div>
                                    <div class="col-sm-4">
                                        <span class="error_form" id="password1_error_msg"></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button type="submit" name="submit" class="btn btn-success btn-block"/>Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="gotoup"></div>


<!------------------------------------------------ footer section-------------------------------------------------------->
<section class="footer">
    <div class="container">
        <div class="row ">
            <div class="bottom-left col-md-3">
                <div class="footer_menu">
                    <h4>Website</h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="bottom-left col-md-3">
                <div class="footer_menu">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
            </div>

            <div class="bottom-left col-md-3">
                <div class="footer_menu">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
            </div>

            <div class="bottom-left col-md-3">
                <div class="footer_menu">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="bottom-center col-md-6 text-center m-auto">
                <div class="footer-social">
                    <a href="https://www.facebook.com/smsofiqul.islam" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/sofiqul_310" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://www.google.com" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/in/smsofiqul-islam-310/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a href="https://www.behance.net/smsofiqul_islam" target="_blank"><i class="fa fa-behance" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</section>

<section class="lower-footer">
    <div class="container">
        <div class="row">
            <div class="bottom col-md-6 m-auto text-center">
                <div>&copy; 2017 All Rights Reserved to S.M. Sofiqul Islam</div>
            </div>
        </div>
    </div>
</section>


<!--All js plugins-->
<script src="{{ asset('/') }}/front-end/js/jquery-3.2.1.js"></script>
<script src="{{ asset('/') }}/front-end/js/Proper.js"></script>
<script src="{{ asset('/') }}/front-end/js/bootstrap.js"></script>
<script src="{{ asset('/') }}/front-end/js/my_javascript.js"></script>
<!----------------light-box-gallery-------->
<script src="{{ asset('/') }}/front-end/js/lightgallery-all.min.js"></script>
<script src="{{ asset('/') }}/front-end/js/my_javascript.js"></script>

</body>
</html>