@extends('front-end.master')
@section('title')
    Register Page
@endsection

@section('body')
<br/>
    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="height:auto; border: 1px solid">
                <h1>Registration Form</h1>
            </div>
            <div class="col-sm-12" style="height:auto; border: 1px solid">
                <br/>
                <form action="" method="post" id="myForm">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2" for="firstName">First Name</label>
                        <div class="col-sm-5">
                            <input type="text" name="first_name" id="firstName" required="1"  class="form-control" placeholder="Enter FirstName"/>
                        </div>
                        <div class="col-sm-5">
                            <span class="error_form" id="firstName_error_msg"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2" for="lastName">Last Name</label>
                        <div class="col-sm-5">
                            <input type="text" name="first_name" id="lastName" required="1"  class="form-control" placeholder="Enter LastName"/>
                        </div>
                        <div class="col-sm-5">
                            <span class="error_form" id="lastName_error_msg"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2" for="email1">Email Address</label>
                        <div class="col-sm-5">
                            <input type="email" name="email" id="email1" required="1"  class="form-control" placeholder="Enter Email"/>
                        </div>
                        <div class="col-sm-5">
                            <span class="error_form" id="email1_error_msg"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2" for="password1">Password</label>
                        <div class="col-sm-5">
                            <input type="password" name="password" id="password1" required="1"  class="form-control" placeholder="Enter Password"/>
                            <input type="checkbox"  id="showRegPassword"/> Show Password

                        </div>
                        <div class="col-sm-5">
                            <span class="error_form" id="password1_error_msg"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2" for="againPassword">Re-Enter Password</label>
                        <div class="col-sm-5">
                            <input type="password" name="password" required="1" id="againPassword"  class="form-control" placeholder="Re-Enter Password"/>
                        </div>
                        <div class="col-sm-5">
                            <span class="error_form" id="again_password_error_msg"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2" for="phone">Phone Number</label>
                        <div class="col-sm-5">
                            <input type="number" name="phone_number" id="phone" required="1"  class="form-control" placeholder="Enter phone number"/>
                        </div>
                        <div class="col-sm-5">
                            <span class="error_form" id="phone_error_msg"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2" for="date_of_birth">Date of Birth</label>
                        <div class="col-sm-5">
                            <input type="date" name="date_of_birth" required="1"   id="date_of_birth" class="form-control"/>
                        </div>
                        <div class="col-sm-5">
                            <span class="error_form" id="date_of_birth_error_msg"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2">Gander</label>
                        <div class="col-sm-5">
                            <label><input type="radio"  required="1" name="gender" value="male">Male</label>
                            <label><input type="radio"  required="1" name="gender" value="female">FeMale</label>
                        </div>
                        <div class="col-sm-5">
                            <span class="error_form" id="gender_error_msg"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2" for="address">Address</label>
                        <div class="col-sm-5">
                            <textarea name="address" id="address" required="1" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="col-sm-5">
                            <span class="error_form" id="address_error_msg"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2" for="district">District Name </label>
                        <div class="col-sm-5">
                            <select required="1" name="district_name"   id="district"  class="form-control">
                                <option value=" ">Select District Name</option>
                                <option value="dhaka">Dhaka</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Borisal">Borisal</option>
                                <option value="Gopalganj">Gopalganj</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <span class="error_form" id="district_error_msg"></span>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-form-label col-sm-2" for="image">Image</label>
                        <div class="col-sm-5">
                            <input multiple type="file" required="1" name="image" id="image" accept="image/*"/>
                            <img src="" id="profile-image" width="200px" />
                        </div>
                        <div class="col-sm-5">
                            <span class="error_form" id="image_error_msg"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-2"></label>
                        <div class="col-sm-5">
                            <label class="form-check-label">
                                <input  type="checkbox" required="1"  name="agree" value="agree" class="form-check-input"/>
                                I Agree with All Terms and Conditions.
                                <span class="error_form" id="checkbox_error_msg"></span>
                            </label>

                        </div>

                    </div>


                    <div class="form-group row" >
                        <div class="col-sm-6 m-auto">
                            <button type="submit" name="submit" class="btn btn-success btn-block"/>Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    </body>
    <br/>
@endsection
