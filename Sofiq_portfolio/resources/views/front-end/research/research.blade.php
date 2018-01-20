@extends('front-end.master')
@section('title')
    Research Work
@endsection

@section('body')
    <section class="jumbotron" style="height: 500px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title text-center">Research</h2>
                            <hr/>

                            <div>
                                <button type="button" class="btn btn btn-success btn-lg" data-toggle="modal"  data-target="#research1" >Research1</button>
                            </div>
                            <br/>
                            <div>
                                <button type="button" class="btn btn btn-success btn-lg" data-toggle="modal"  data-target="#research2" >Research2</button>
                            </div>
                            <br/>
                            <div>
                                <button type="button" class="btn btn btn-warning btn-lg" data-toggle="modal"  data-target="#research3" >Research3</button>
                            </div>
                            <br/>
                            <div>
                                <button type="button" class="btn btn btn-danger btn-lg" data-toggle="modal"  data-target="#research4" >Research4</button>
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
                    <div class="modal fade " id="research1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>Research-01</h3>
                                    <button class="" data-dismiss="modal">
                                        &cross;
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="card" >
                                                <img src="{{ asset('/') }}/front-end/image/my.jpg" style="height: 300px; width: 300px; margin:0 auto; display: block;" alt="" class="card-img-top img-thumbnail">
                                                <div class="card-body text-center">
                                                    <h2 class="card-title">Title</h2>
                                                    <a href="http://ieeexplore.ieee.org/abstract/document/7760071/?reload=true" target="_blank">
                                                        <p class="card-text">"Deep Learning in Computer Vision: A Comprehensive Study."</p></a>
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
                    <div class="modal fade " id="research2">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>Research-02</h3>
                                    <button class="" data-dismiss="modal">
                                        &cross;
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="card" >
                                                <img src="{{ asset('/') }}/front-end/image/my.jpg" style="height: 300px; width: 300px; margin:0 auto; display: block;" alt="" class="card-img-top img-thumbnail">
                                                <div class="card-body text-center">
                                                    <h2 class="card-title">Title</h2>
                                                    <a href="https://scholar.google.com/scholar?hl=en&as_sdt=0%2C5&q=s.+m.+sofiqul+islam&btnG=" target="_blank">
                                                        <p class="card-text">"A CNN Based Approach for Garments Texture Design Classification."</p></a>
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
                    <div class="modal fade " id="research3">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>Research-01</h3>
                                    <button class="" data-dismiss="modal">
                                        &cross;
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="card" >
                                                <img src="{{ asset('/') }}/front-end/image/my.jpg" style="height: 300px; width: 300px; margin:0 auto; display: block;" alt="" class="card-img-top img-thumbnail">
                                                <div class="card-body text-center">
                                                    <h2 class="card-title">Title</h2>
                                                    <p class="card-text">Body Parts Dynamics and Geometry for Gender Classification.(pending)"</p>
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
                    <div class="modal fade " id="research4">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>Research-04</h3>
                                    <button class="" data-dismiss="modal">
                                        &cross;
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="card" >
                                                <img src="{{ asset('/') }}/front-end/image/my.jpg" style="height: 300px; width: 300px; margin:0 auto; display: block;" alt="" class="card-img-top img-thumbnail">
                                                <div class="card-body text-center">
                                                    <h2 class="card-title">Title</h2>
                                                    <p class="card-text">"Human Gait Based Gender Recognition.(not complete)"</p>
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