@extends('front-end.master')
@section('title')
   Real-Life Project
@endsection

@section('body')
    <!------------------------------------------------ main content section-------------------------------------------------------->

    <section class="jumbotron" style="height: 500px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body">
                            <h2 class="card-title text-center">My Real-Projects</h2>
                            <hr/>

                            <div>
                                <button type="button" class="btn btn btn-primary btn-lg" data-toggle="modal"  data-target="#Project1" >gpit</button>
                            </div>
                            <br/>
                            <div>
                                <button type="button" class="btn btn btn-primary btn-lg" data-toggle="modal"  data-target="#Project2" >Southtech</button>
                            </div>
                            <br/>
                            <div>
                                <button type="button" class="btn btn btn-primary btn-lg" data-toggle="modal"  data-target="#Project3" >Icebreakers</button>
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
                    <div class="modal fade " id="Project1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1>gpit</h1>
                                    <button class="" data-dismiss="modal">
                                        &cross;
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="card" >
                                                <img src="{{ asset('/') }}/front-end/image/slideshow/gpitlogo.jpg" style="height: 300px; width: 300px; margin:0 auto; display: block;" alt="" class="card-img-top img-thumbnail">
                                                <div class="card-body text-center">
                                                    <h2 class="card-title">Competence Development Web Portal for GPIT (5th semester, 2013)</h2>
                                                    <h4 class="card-sub-title">Tools & Technologies</h4>
                                                    <p class="card-text">HTML, CSS, JavaScript,Microsoft ASP.NET-4.0, Entity Framework-4.5, Microsoft SQL Server 2008, Visual
                                                        Studio 2012. </p>
                                                    <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#gpit1">Read Details</a>
                                                    <div class="collapse text-left" id="gpit1">
                                                        It is a web based application which is used to  automate the training program management process of Grameenphone IT.
                                                        Within many features, I would like to highlight only some features such as it also helps to get feedback from the trainees and the
                                                        supervisors,all the information will be automatically updated in the database, employees can view training schedule through training
                                                        calendar.It also helps to generate different kinds of graphical report such as pie chart, bar diagram etc.
                                                    </div>

                                                </div>
                                                <div class="card-footer text-center">
                                                    <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#gpit">Show Certificate</a>

                                                    <div id="gpit">
                                                        <img src="{{ asset('/') }}/front-end/image/slideshow/gpit.jpg" style="height: 600px; width: 600px; margin:0 auto; display: block;" alt="" class="card-img-top img-thumbnail"/>
                                                    </div>
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
                    <div class="modal fade " id="Project2">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1>SouthTech Limited</h1>
                                    <button class="" data-dismiss="modal">
                                        &cross;
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="card" >
                                                <img src="{{ asset('/') }}/front-end/image/slideshow/sothtechlogo.jpg" style="height: 300px; width: 300px; margin: 0 auto; display: block;" alt="" class="card-img-top img-thumbnail"/>
                                                <div class="card-body text-center">
                                                    <h2 class="card-title">Software Department(7th semester, 2014)</h2>
                                                    <h4 class="card-sub-title">Tools & Technologies</h4>
                                                    <p class="card-text">HTML, CSS, Bugzilla, JavaScript, MVC-Framework, Microsoft SQL Server 2008, Visual
                                                        Studio 2013. </p>
                                                    <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#southtech1">Read Details</a>
                                                    <div class="collapse text-left" id="southtech1">
                                                        Working as Developer,  Tester, SRS Reporter, and Bug ReporterIntern.
                                                    </div>

                                                </div>
                                                <div class="card-footer text-center">
                                                    <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#southtech">Show Certificate</a>

                                                    <div id="southtech">
                                                        <a href="{{ route('project1') }}"><img src="{{ asset('/') }}/front-end/image/slideshow/southtech.jpg" style="height: 600px; width: 600px;" alt="" class="card-img-top img-thumbnail"></a>
                                                    </div>
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
                    <div class="modal fade " id="Project3">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1>Icebreakers</h1>
                                    <button class="" data-dismiss="modal">
                                        &cross;
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="card" >
                                                <img src="{{ asset('/') }}/front-end/image/slideshow/ice.png" style="height: 300px; width: 300px; margin: 0 auto; display: block;" alt="" class="card-img-top img-thumbnail"/>
                                                <div class="card-body text-center">
                                                    <h2 class="card-title">Software Programmer and Senior IT Executive(2015-2017)</h2>
                                                    <h4 class="card-sub-title">Tools & Technologies</h4>
                                                    <p class="card-text">HTML, CSS3, Bootstrap, Jquery, PHP, JavaScript, MVC-Framework, My-SQL Server 2012, Visual
                                                        Studio 2013. </p>
                                                    <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#icebreakers">Read Details</a>
                                                    <div class="collapse text-left" id="icebreakers">
                                                        Working as web designer and senior IT executive.
                                                    </div>

                                                </div>
                                                <div class="card-footer text-center">
                                                    <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#icebreakers1">Show Certificate</a>

                                                    <div id="icebreakers1">
                                                        <a href="{{ route('project1') }}"><img src="{{ asset('/') }}/front-end/image/slideshow/icebreakers.jpg" style="height: 600px; width: 600px;" alt="" class="card-img-top img-thumbnail"></a>
                                                    </div>
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
@endsection