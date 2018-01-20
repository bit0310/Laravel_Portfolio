@extends('front-end.master')
@section('title')
    Portfolio
@endsection

@section('body')
    <br>
    <div class="container jumbotron">
        <div class="row">
            <div class="col-md-12">
                <div class="card" >
                    <div class="card-body">
                        <h2 class="card-title card-title-portfolio text-center">Summary</h2>
                        <p class="card-text text-right">
                        <ol>
                            <li>Have completed MSSE from Institute of Information Technology, University of Dhaka with a CGPA of 3.50.</li>
                            <li>Have completed BSSE from Institute of Information Technology, University of Dhaka with a CGPA of 3.20.</li>
                            <li>Have completed HSC from Cambrian College, Dhaka with a GPA 4.90.</li>
                            <li>Have completed SSC from S.M. Model Govt. High School, Gopalganj with a GPA 5.00.</li>
                            <div class="collapse" id="portfolio">
                                <li>Research interests involve deep learning, machine learning, pattern recognition, image processing,
                                    computer vision, image classification and software engineering.</li>
                                <li>Worked at a project of Grameenphone IT Ltd. as a system analyst, designer, database designer from January 1, 2013 to July 31, 2013.</li>
                                <li>Worked at ICEBREAKERS from 01/01/2015 to 31/05/2017 as Software Programmer and Senior IT Executive. </li>
                                <li>Have sound skills in web design, web application development, testing and deep learning. .</li>
                            </div>
                        </ol>
                        </p>
                        <div class="text-center">
                            <a href="" class="btn btn-success"   data-toggle="collapse" data-target="#portfolio">Read More>></a>
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="about.html" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white"><b>Portfolio</b></a>
                        Portfolio Summary.
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Skills & Interests</h2>
                        <p class="card-text text-right">
                        <ol>
                            <li><b>Languages:</b> C, PHP, JavaScript, HTML5, CSS3, jQuery, Ajax, Visual Basic</li>
                            <li><b>Framework:</b> Deep Learning, Bootstrap-4, Microsoft ASP.NET MVC3</li>
                            <li><b>Databases:</b> Microsoft SQL Server, MYSQL.</li>
                            <div class="collapse" id="Skills">
                                <li><b>Platform:</b> Windows, Linux. </li>
                                <li><b>Scripting Language:</b> Shell Scripting. </li>
                                <li><b>Tools:</b> Eclipse, Code Blocks, Microsoft Visual Studio 2015, PhpStrom, Matlab, etc.</li>
                                <li><b>Testing Tools:</b> Bugzilla, Mind Manager, and Mantis. </li>
                                <li><b>Played cricket in IIT team, University of Dhaka.</b></li>
                            </div>
                        </ol>
                        </p>
                        <div class="text-center">
                            <a href="" class="btn btn-success"   data-toggle="collapse" data-target="#Skills">Read More>></a>
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="about.html" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white"><b>Portfolio</b></a>
                        Skills & Interests.
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="row col-md-12">
            <div class="card col-md-6">
                <div class="card-body">
                    <h2 class="card-title text-center">Reference1</h2>
                    <p class="card-text text-right">
                    <ul>

                        <div class="collapse" id="reference1">
                            <li><b>Emon Kumar Dey</b></li>
                            <li><b>Assistant Professor</b></li>
                            <li>Institute of Information Technology</li>
                            <li>University of Dhaka</li>
                            <li><b>Mobile:</b>+880-1716004382</li>
                            <li><b>Email:</b>emonkd@iit.du.ac.bd</li>
                        </div>
                    </ul>
                    </p>
                    <div class="text-center">
                        <a href="" class="btn btn-success" data-toggle="collapse" data-target="#reference1">Show Reference1</a>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="about.html" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white"><b>Portfolio</b></a>
                    <b>Reference1.</b>
                </div>
            </div>
            <div class="card col-md-6">
                <div class="card-body">
                    <h2 class="card-title text-center">Reference2</h2>
                    <p class="card-text text-right">
                    <ul>
                        <div class="collapse" id="reference2">
                            <li><b>Dr. Kazi Muheymin-Us-Sakib</b></li>
                            <li><b>Ex-Director and Professor</b></li>
                            <li>Institute of Information Technology</li>
                            <li>University of Dhaka</li>
                            <li><b>Mobile:</b>+880-1716004382</li>
                            <li><b>Email:</b>emonkd@iit.du.ac.bd</li>
                        </div>
                    </ul>
                    </p>
                    <div class="text-center">
                        <a href="" class="btn btn-success" data-toggle="collapse" data-target="#reference2">Show Reference2</a>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="about.html" style="border-left: 10px solid black; padding: 5px; background-color: red; color: white"><b>Portfolio</b></a>
                    <b>Reference2.</b>
                </div>
            </div>
        </div>
        <br/>

        <div class="card col-md-12" >
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3" for="cv">Upload CV</label>
                        <div class="col-sm-9">
                            <input multiple type="file" name="image" id="cv"/>
                        </div>
                    </div>
                    <div class="form-group row" >
                        <div class="col-sm-12 text-center">
                            <button type="submit" name="submit" class="btn btn-success"/>Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection