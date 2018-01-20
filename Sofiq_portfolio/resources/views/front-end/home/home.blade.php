@extends('front-end.master')
@section('title')
    Home
@endsection

@section('body')

    <!------------------------------------------------ slider section-------------------------------------------------------------->

    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div id="myslider" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <ol class="carousel-indicators">
                        <li class="active" data-target="#myslider" data-slide-to="0"></li>
                        <li class="" data-target="#myslider" data-slide-to="1"></li>
                        <li class="" data-target="#myslider" data-slide-to="2"></li>
                        <li class="" data-target="#myslider" data-slide-to="3"></li>
                        <li class="" data-target="#myslider" data-slide-to="4"></li>
                        <li class="" data-target="#myslider" data-slide-to="5"></li>
                        <li class="" data-target="#myslider" data-slide-to="6"></li>
                    </ol>


                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('/') }}/front-end/image/slideshow/IIT.jpg"  alt=""/>
                            <div class="carousel-caption ">
                                <h1>In-fornt-of IIT</h1>
                                <p>IIT-3rd-Batch.</p>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('/') }}/front-end/image/slideshow/rag-day.jpg"  alt=""/>
                            <div class="carousel-caption ">
                                <h1>Rag-Day.</h1>
                                <p>IIT-3rd-Batch.</p>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('/') }}/front-end/image/slideshow/picnic.jpg" alt=""/>
                            <div class="carousel-caption ">
                                <h1>Picnic.</h1>
                                <p>IIT-3rd-Batch.</p>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('/') }}/front-end/image/slideshow/gift.jpg" alt=""/>
                            <div class="carousel-caption ">
                                <h1>Curzon Hall.</h1>
                                <p>Me, Zahid and Sujon.</p>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('/') }}/front-end/image/slideshow/1.JPG" alt=""/>
                            <div class="carousel-caption ">
                                <h1>50th Convocation.</h1>
                                <p>Me.</p>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('/') }}/front-end/image/slideshow/kasmir4.jpg" alt=""/>
                            <div class="carousel-caption ">
                                <h1>Kasmir India.</h1>
                                <p>Tulip-Garden.</p>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('/') }}/front-end/image/slideshow/7.jpg" alt=""/>
                            <div class="carousel-caption ">
                                <h1>50th Convocation.</h1>
                                <p>IIT-3rd-Batch.</p>

                            </div>
                        </div>
                    </div>
                    <a href="#myslider" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a href="#myslider" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!------------------------------------------------ main content section-------------------------------------------------------->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card " >
                        <div class="card-body text-center">
                            <h2 class="card-title">My Objective</h2>


                            <div class="carousel slide" data-ride="carousel" data-interval="2000">
                                <div class="carousel-inner">
                                    <div class="carousel-item  active">
                                        <p style="color: #007bff">To obtain a position as a Software Engineer in a challenging environment where I can
                                            utilize my learning experience, programming development skills, adaption of new technologies,</p>

                                    </div>
                                    <div class="carousel-item ">
                                        <p style="color: red">To obtain a position as a Software Engineer in a challenging environment where I can
                                            utilize my learning experience, programming development skills, adaption of new technologies,</p>

                                    </div>
                                </div>
                            </div>



                            <div class="collapse text-left" id="objective">
                                communication and organizational skill to make me as a positive contributor and to be capable of working efficiently with people. I believe in an
                                environment full of competitiveness that will certainly help me to fulfill this objective.
                            </div>
                            <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#objective">Read More>>>></a>

                        </div>
                        <div class="card-footer text-center">
                            <a href="#" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white">My Objective</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br/>


    <section >
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-4">
                    <div class="card" >
                        <a href="{{ route('/') }}"><img src="{{ asset('/') }}/front-end/image/slideshow/01.jpg" alt="" class="card-img-top"></a>
                        <div class="card-body text-center">
                            <h2 class="card-title">My Mission</h2>
                            <p class="card-text">In this section, I will discuss about my current mission.</p>
                            <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#mission">Read More>>>></a>
                            <div class="collapse" id="mission">
                                To complete my <b>PHP</b> and <b>Graphic Design</b> course successfully.
                                And build my career as a web Application designer and developer.
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white"><b>Home</b></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" >
                        <a href="{{ route('/') }}"><img src="{{ asset('/') }}/front-end/image/slideshow/02.jpg" alt="" class="card-img-top"></a>
                        <div class="card-body text-center">
                            <h2 class="card-title">My Vision</h2>
                            <p class="card-text">In this section, I will discuss about my Vision.</p>
                            <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#vision">Read More>>>></a>
                            <div class="collapse" id="vision">
                                My vision is to build up my career as <strong>Software Engineer</strong> and be a part of software development sector in my country, so that i can help my country.
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white"><b>Home</b></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" >
                        <a href="{{ route('/') }}"><img src="{{ asset('/') }}/front-end/image/slideshow/03.jpg" alt="" class="card-img-top"></a>
                        <div class="card-body text-center">
                            <h2 class="card-title">My Goal</h2>
                            <p class="card-text">In this section, I will discuss about my Goal.</p>
                            <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#goal">Read More>>>></a>
                            <div class="collapse" id="goal">
                                Bulid a famous <b>Software</b> firm and to lead my country <strong>IT</strong> sector.
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white"><b>Home</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br/>

    <section >
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6">
                    <div class="card jumbotron mb-0" style="padding: 0px;" >
                        <a href="{{ route('about') }}"><img src="{{ asset('/') }}/front-end/image/my.jpg" style="height: 225px; width: 225px; margin: 0 auto; display: block;" alt="" class="card-img-top img-thumbnail"></a>
                        <div class="card-body text-center">
                            <h2 class="card-title">About Me</h2>
                            <p class="card-text">In this section, I will discuss about myself.</p>
                            <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#about">Read More>>>></a>
                            <div class="collapse" id="about">
                                <p>This is <b>S.M. Sofiqul Islam</b>. I am 26 years old. I have completed my <b>B.Sc</b> and <b>M.sc</b> from <b>Software Engineering</b> from University of Dhaka.
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('about') }}" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white"><b>About</b></a>
                            Visit About Page for more Information.
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card" >
                        <a href="{{ route('about') }}"><img src="{{ asset('/') }}/front-end/image/slideshow/04.jpg" alt="" class="card-img-top"></a>
                        <div class="card-body text-center">
                            <h2 class="card-title">My Family</h2>
                            <p class="card-text">In this section, I will discuss about my Family.</p>
                            <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#family">Read More>>>></a>
                            <div class="collapse" id="family">
                                My family consist of <b>six</b> members. I have one brother and two sisters. I am elder son of my parents. My father is a <b>businessman</b>. My mother is a <b>housewife</b>.
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('about') }}" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white"><b>About</b></a>
                            Visit About Page for more Information.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="add-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="carousel slide" data-ride="carousel" data-interval="1800">
                        <div class="carousel-inner">
                            <div class="carousel-item carousel-item-padding active">
                                <h3>My Portfolio</h3>
                                <h3>My Portfolio</h3>
                            </div>
                            <div class="carousel-item carousel-item-padding">
                                <h3>My Portfolio</h3>
                                <h3>My Portfolio</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <section >
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6">
                    <div class="card" >
                        <a href="{{ route('portfolio') }}"><img src="{{ asset('/') }}/front-end/image/slideshow/mypicjpg.jpg" style="height: 300px; width: 500px; margin: 0 auto; display: block;" alt="" class="card-img-top"></a>
                        <div class="card-body text-center">
                            <h2 class="card-title">My Portfolio</h2>
                            <p class="card-text">In this section, I will discuss about my <b>Portfolio</b>.</p>
                            <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#portfolio">Read More>>>></a>
                            <div class="collapse text-left" id="portfolio">
                                <p> Have completed MSSE from Institute of Information Technology, University of
                                    Dhaka with a CGPA of 3.50.</p>
                                <p> Have completed BSSE from Institute of Information Technology, University of
                                    Dhaka with a CGPA of 3.20.</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('portfolio') }}" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white"><b>My Portfolio</b></a>
                            Visit Portfolio Page for more Information.
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card" >
                        <a href="{{ route('research') }}"><img src="{{ asset('/') }}/front-end/image/slideshow/pexels-photo-148523.jpeg"  style="height: 300px; width: 500px; margin: 0 auto; display: block; "alt="" class="card-img-top"></a>
                        <div class="card-body text-center">
                            <h2 class="card-title">My Research</h2>
                            <p class="card-text">In this section, I will discuss about my Research.</p>
                            <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#research">Read More>>>></a>
                            <div class="collapse text-left" id="research">
                                <p><b>1. Title:</b> "Deep Learning in Computer Vision: A Comprehensive Study"(published).</p>
                                <p><b>2. Title:</b> "A CNN Based Approach for Garments Texture Design Classification” (published).</p>
                                <p><b>3. Title:</b> "Body Parts Dynamics and Geometry for Gender Classification" (pending).</p>
                                <p><b>4. Title:</b> "Human Gait Based Gender Recognition"(not complete) (8th semester, 2014).</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('research') }}" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white;"><b>My Research</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section >
        <div class="container-fluid">
            <div class="row">


                <div class="col-md-3">
                    <div class="card" >
                        <a href="{{ route('project1') }}"><img src="{{ asset('/') }}/front-end/image/slideshow/images.jpg" height="170" alt="" class="card-img-top"></a>
                        <div class="card-body text-center">
                            <h2 class="card-title">Project-1</h2>
                            <p class="card-text">In this section, I will discuss about My Project-1.</p>
                            <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#Project1">Read More>>>></a>
                            <div class="collapse text-left" id="Project1">
                                <p> Worked at a project of Grameenphone IT Ltd. as a system analyst, designer, database
                                    designer from January 1, 2013 to July 31, 2013.</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('project1') }}" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white"><b>My Project-1</b></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" >
                        <a href="{{ route('project1') }}"><img src="{{ asset('/') }}/front-end/image/slideshow/images.jpg" height="170" alt="" class="card-img-top"></a>
                        <div class="card-body text-center">
                            <h2 class="card-title">Project-2</h2>
                            <p class="card-text">In this section, I will discuss about My Project-2.</p>
                            <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#Project2">Read More>>>></a>
                            <div class="collapse text-left" id="Project2">
                                <p> Worked at ICEBREAKERS from 2015 to 2017 as Software Programmer and
                                    Senior IT Executive.</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('project1') }}" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white"><b>My Project-1</b></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" >
                        <a href="{{ route('project1') }}"><img src="{{ asset('/') }}/front-end/image/slideshow/images.jpg" height="170" alt="" class="card-img-top"></a>
                        <div class="card-body text-center">
                            <h2 class="card-title">Project-3</h2>
                            <p class="card-text">In this section, I will discuss about My Project-3.</p>
                            <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#Project3">Read More>>>></a>
                            <div class="collapse text-left" id="Project3">
                                <p> Worked at Sothtech Ltd. as an intern from 2014 to 2014 as Software Programmer.</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('project1') }}" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white"><b>My Project-1</b></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" >
                        <a href="{{ route('project2') }}"><img src="{{ asset('/') }}/front-end/image/slideshow/images.jpg" height="170" alt="" class="card-img-top"></a>
                        <div class="card-body text-center">
                            <h2 class="card-title">Others-Project</h2>
                            <p class="card-text">In this section, I will discuss about my Others-Project.</p>
                            <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#Others-Project">Read More>>>></a>
                            <div class="collapse text-left" id="Others-Project">
                                <p> Worked at Sothtech Ltd. as an intern from 2014 to 2014 as Software Programmer.</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('project2') }}" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white"><b>My Project-2</b></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>



@endsection





