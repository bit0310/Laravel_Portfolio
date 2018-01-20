@extends('front-end.master')

@section('title')
    About
@endsection

@section('body')
<br/>
    <!------------------------------------------------ main content section-------------------------------------------------------->

    <!--<div class="jumbotron">-->
    <div class="container jumbotron">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <h2 class="card-title text-center">About Me</h2>
                        <hr/>

                        <div class="carousel slide" data-ride="carousel" data-interval="2000">
                            <div class="carousel-inner col-md-12">
                                <div class="carousel-item carousel-item-button active ">
                                    <button type="button" class="btn btn btn-success btn-lg" data-toggle="modal"  data-target="#myModalaboutme" >Myself</button>
                                </div>
                                <div class="carousel-item carousel-item-button ">
                                    <button type="button" class="btn btn btn-info btn-lg" data-toggle="modal"  data-target="#myModalfamily" >My Family</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--</div>-->





    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="modal fade " id="myModalaboutme">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>About Me</h3>
                                    <button class="" data-dismiss="modal">
                                        &cross;
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="card" >
                                                <a href="{{ route('about') }}"><img src="{{ asset('/') }}/front-end/image//my.jpg" style="height: 300px; width: 300px; margin:0 auto; display: block;" alt="" class="card-img-top img-thumbnail"></a>
                                                <div class="card-body text-center">
                                                    <h2 class="card-title">About Me</h2>
                                                    <p class="card-text">In this section, I will discuss about myself.</p>
                                                    <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#about">Read More>>>></a>
                                                    <div class="collapse" id="about">
                                                        <p>This is <b>S.M. Sofiqul Islam</b>. I am 26 years old. I have completed my <b>B.Sc</b> and <b>M.sc</b> from <b>Software Engineering</b> from University of Dhaka.
                                                            My working sector is <strong>Web Application</strong> design and development and I have few working experience in this field.
                                                            I am also good at <b>deep learning</b> and i already published one conference and one journal papers in this field.
                                                            I like to play cricket and like to lead a simple life.</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p style="border-left: 10px solid black; display: block; padding: 5px; background-color: red; text-align: center;">
                                                        <b>This is my Information</b></p>
                                                </div>
                                            </div>
                                        </div>
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
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="modal fade " id="myModalfamily">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>About Me</h3>
                                    <button class="" data-dismiss="modal">
                                        &cross;
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="card" >
                                                <a href="{{ route('about') }}"><img src="{{ asset('/') }}/front-end/image//slideshow/04.jpg" alt="" class="card-img-top"></a>
                                                <div class="card-body text-center">
                                                    <h2 class="card-title">My Family</h2>
                                                    <p class="card-text">In this section, I will discuss about my Family.</p>
                                                    <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#family">Read More>>>></a>
                                                    <div class="collapse" id="family">
                                                        My family consist of <b>six</b> members. I have one brother and two sisters. I am elder son of my parents. My father is a one of the
                                                        <strong>Union Chairman</strong> of <b>Kotalipara Thana</b>, <b>Gopalganj District</b> and he is also a successfull  <b>businessman</b>.
                                                        My mother is a <b>housewife</b>.
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p style="border-left: 10px solid black; display: block; padding: 5px; background-color: red; text-align: center;">
                                                        <b>This is my Family Information</b></p>
                                                </div>
                                            </div>
                                        </div>
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
        </div>
    </section>
    <!------------------------------------------------ skillbar section-------------------------------------------------------->



    <div class="card col-md-9 m-auto">
        <div class="card-body">
            <h2 class="card-title text-center">My Professional Skill</h2>
            <hr/>
            <div class="collapse" id="SkillBar">
                <div class="col-md-8 justify-content-center m-auto text-center ">

                    <div class="skillbar clearfix " data-percent="90%">
                        <div class="skillbar-title" style="background: #d35400;"><span>HTML5</span></div>
                        <div class="skillbar-bar" style="background: #e67e22;"></div>
                        <div class="skill-bar-percent">90%</div>
                    </div> <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="90%">
                        <div class="skillbar-title" style="background: #2980b9;"><span>CSS3</span></div>
                        <div class="skillbar-bar" style="background: #3498db;"></div>
                        <div class="skill-bar-percent">90%</div>
                    </div> <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="85%">
                        <div class="skillbar-title" style="background: #1c7430;"><span>Bootstrap-04</span></div>
                        <div class="skillbar-bar" style="background: #1c7530;"></div>
                        <div class="skill-bar-percent">85%</div>
                    </div> <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="60%">
                        <div class="skillbar-title" style="background: #2c3e50;"><span>jQuery</span></div>
                        <div class="skillbar-bar" style="background: #2c3e30;"></div>
                        <div class="skill-bar-percent">60%</div>
                    </div> <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="60%">
                        <div class="skillbar-title" style="background: #46465e;"><span>JScript</span></div>
                        <div class="skillbar-bar" style="background: #5a68a5;"></div>
                        <div class="skill-bar-percent">60%</div>
                    </div> <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="30%">
                        <div class="skillbar-title" style="background: #17a2b8;"><span>Deep Learning</span></div>
                        <div class="skillbar-bar" style="background: #00aced;"></div>
                        <div class="skill-bar-percent">30%</div>
                    </div> <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="80%">
                        <div class="skillbar-title" style="background: #333333;"><span>OOP</span></div>
                        <div class="skillbar-bar" style="background: #525252;"></div>
                        <div class="skill-bar-percent">80%</div>
                    </div> <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="60%">
                        <div class="skillbar-title" style="background: #1c7530;"><span>PHP</span></div>
                        <div class="skillbar-bar" style="background: #28a745;"></div>
                        <div class="skill-bar-percent">60%</div>
                    </div> <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="40%">
                        <div class="skillbar-title" style="background: #2980b9;"><span>Java</span></div>
                        <div class="skillbar-bar" style="background: #0069d9;"></div>
                        <div class="skill-bar-percent">40%</div>
                    </div> <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="90%">
                        <div class="skillbar-title" style="background: #27ae60;"><span>SQL</span></div>
                        <div class="skillbar-bar" style="background: #2ecc71;"></div>
                        <div class="skill-bar-percent">90%</div>
                    </div> <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="90%">
                        <div class="skillbar-title" style="background: #124e8c;"><span>C</span></div>
                        <div class="skillbar-bar" style="background: #4288d0;"></div>
                        <div class="skill-bar-percent">90%</div>
                    </div> <!-- End Skill Bar -->
                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="text-center">
        <a href="" class="btn btn-warning btn-lg" data-toggle="collapse" data-target="#SkillBar" id="showSkillBarBtn">Show/Hide Skill</a>


    </div>
    </div>

    <br/>
@endsection