@extends('front-end.master')
@section('title')
    Academic Project
@endsection

@section('body')
    <br/>
    <div class="container jumbotron">
        <div class="row">
            <div class="col-md-12">
                <div class="card" >
                    <div class="card-header text-center"><h1>Others Project</h1></div>
                    <hr/>
                    <div class="card-body text-center">
                        <h3 class="card-title card-title-portfolio">Snake Ludo game (2nd semester, 2011)</h3>
                        <h5 class="card-sub-title">Tools & Technologies: JAVA, Eclipse</h5>

                    </div>

                    <div class="card-footer">
                        <a href="{{ route('project2') }}" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white"><b>Snake Ludo</b></a>
                        Snake Ludo Project Summary.
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Digital Logic Circuit Designer & Simulator(3rd semester, 2012)</h3>
                        <h5 class="card-sub-title text-center">Tools & Technologies: JAVA GUI,Swing, Eclipse.</h5>
                        <p class="card-text text-right">
                        <ol>
                            <li>It is a desktop based application which is used to design different logic circuit and simulates those.</li>
                            <div class="collapse" id="Logic">
                                <li>User can drag and drop different logic gates and be able to draw complex circuit.
                                    This software has also option to convert between different numbering systems.  </li>

                            </div>
                        </ol>
                        </p>
                        <div class="text-center">
                            <a href="" class="btn btn-success"   data-toggle="collapse" data-target="#Logic">Read More>></a>
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('project2') }}" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white"><b>Digital Logic Circuit</b></a>
                        Digital Logic Circuit Designer & Simulator.
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Online Blood Management System (4th semester, 2012)</h3>
                        <h5 class="card-sub-title text-center">Tools & Technologies:PHP, HTML5, JavaScript, CSS, MySQL Server.</h5>
                        <li>
                            It is a web based application where two types of are available. One is admin and another is general user.
                        </li>
                        <div class="collapse" id="Blood">
                            <li>
                                Admin can insert essential blood information which is needed for searching blood, if any changes occur admin will update that information.
                            </li>
                        </div>

                        <div class="text-center">
                            <a href="" class="btn btn-success"   data-toggle="collapse" data-target="#Blood">Read More>></a>
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('project2') }}" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white"><b>Online Blood Management System</b></a>
                        Project details.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection