@extends('front-end.master')
@section('title')
    Contact Page
@endsection

@section('body')
    <br/>

    <!------------------------------------------------ table section-------------------------------------------------------->

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="height: 500px;" >
                <table class="table table-bordered bg-light table-hover table-responsive-xl">
                    <thead class="table-info">
                    <tr>
                        <th>Full Name</th>
                        <th>Email Address</th>
                        <th>phone Number</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Country</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td rowspan="2">S.M. SOFIQUL ISLAM</td>
                        <td >bit0310@iit.du.ac.bd
                            smsofiqulislam310@gmail.com</td>
                        <td rowspan="2">+880-1521409419</td>
                        <td rowspan="2">11,New Market Roal, BDR gate no:03.</td>
                        <td rowspan="2">dhaka</td>
                        <td rowspan="2">bangladesh</td>
                    </tr>


                    </tbody>
                </table>

                <div id="myslider" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <div class="carousel-inner bg-light text-center" style="color: red; font-size:25px;text-shadow: 1px 1px  black; border: 5px solid black;">
                        <div class="carousel-item active">
                            <h1>Name</h1>
                            <p>S.M. SOFIQUL ISLAM</p>
                        </div>
                        <div class="carousel-item ">
                            <h1>Mobile Number</h1>
                            <p>+880-1521409419.</p>
                        </div>
                        <div class="carousel-item ">
                            <h1>Address</h1>
                            <p>11,New Market Roal, BDR gate no:03.</p>
                        </div>

                        <div class="carousel-item ">
                            <h1>Email</h1>
                            <p>bit0310@iit.du.ac.bd</p>
                            <p>smsofiqulislam310@gmail.com</p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection