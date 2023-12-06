@extends('layout.admin')
@section('content')
 
                        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                                <form action="{{route('employee.create')}}" method="post" id="employee_form">
                                       @csrf
                                <h3 class="register-heading">Apply as a Employee</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="first_name" placeholder="First Name *" value="" />
                                             @if($errors->has('first_name'))
                                        <span class="validation_error" style="color:red">{{ $errors->first('first_name') }}</span>
                                    @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" name="last_name" />
                                             @if($errors->has('last_name'))
                                        <span class="validation_error" style="color:red">{{ $errors->first('last_name') }}</span>
                                    @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="password" />
                                             @if($errors->has('password'))
                                        <span class="validation_error" style="color:red">{{ $errors->first('password') }}</span>
                                    @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" name="confirm_password"/>
                                             @if($errors->has('confirm_password'))
                                        <span class="validation_error" style="color:red">{{ $errors->first('confirm_password') }}</span>
                                    @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" name="gender" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" name="email"/>
                                               @if($errors->has('email'))
                                        <span class="validation_error" style="color:red">{{ $errors->first('email') }}</span>
                                    @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="number" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value="" />
                                               @if($errors->has('phone'))
                                        <span class="validation_error" style="color:red">{{ $errors->first('phone') }}</span>
                                    @endif
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="security_question">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" name="your_answer"/>
                                             @if($errors->has('your_answer'))
                                        <span class="validation_error" style="color:red">{{ $errors->first('your_answer') }}</span>
                                    @endif
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
</form>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="{{route('hirer.create')}}" method="post" id="employee_form">
                                    @csrf
                                <h3  class="register-heading">Apply as a Hirer</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" name="first_name"/>
                                             @if($errors->has('first_name'))
                                        <span class="validation_error" style="color:red">{{ $errors->first('first_name') }}</span>
                                    @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value=""  name="last_name"/> 
                                            @if($errors->has('last_name'))
                                        <span class="validation_error" style="color:red">{{ $errors->first('last_name') }}</span>
                                    @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" name="email"/>
                                             @if($errors->has('email'))
                                        <span class="validation_error" style="color:red">{{ $errors->first('email') }}</span>
                                    @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="number" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" name="phone"/>
                                             @if($errors->has('phone'))
                                        <span class="validation_error" style="color:red">{{ $errors->first('phone') }}</span>
                                    @endif
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="password"/>
                                             @if($errors->has('password'))
                                        <span class="validation_error" style="color:red">{{ $errors->first('password') }}</span>
                                    @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" value=""  name="confirm_password"/>
                                             @if($errors->has('confirm_password'))
                                        <span class="validation_error" style="color:red">{{ $errors->first('confirm_password') }}</span>
                                    @endif
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="security_question">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="`Answer *" value="" name="your_answer"/>
                                             @if($errors->has('your_answer'))
                                        <span class="validation_error" style="color:red">{{ $errors->first('your_answer') }}</span>
                                    @endif
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<form>
            </div>
@endsection

@section('script')
<script>
   $(document).ready(function () {
    $('#employee_form').validate({
     rules: {
       first_name: {
          required: true
       },
        last_name: {
          required: true
       },
       phone: {
          required: true
       },
       security_question: {
          required: true
       },
       your_answer: {
          required: true
       },
       gender: {
          required: true
       },
       email: {
          required: true
       },
       password: {
          required: true
       },
       confirm_password: {
          required: true
       },
    },
    messages: {
       first_name: {
          required: "first_name is required"
       },
       last_name: {
          required: "last_name is required"
       },
       phone: {
          required: "phone is required"
       },
       security_question: {
          required: "security_question is required"
       },
       your_answer: {
          required: "your_answer is required"
       },
       gender: {
          required: "gender is required"
       },
       email: {
          required: "email is required"
       },
       password: {
          required: "password is required"
       },
       confirm_password: {
          required: "Rconfirm_password is required"
       },
    },
   });
   });
</script>
@endsection