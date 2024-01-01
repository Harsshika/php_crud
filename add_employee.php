<?php

$con = mysqli_connect('localhost' , 'root' , '' , 'php_crud');

if(isset($_POST['register']))
{
    $f_name = $_POST['f_name'];
    $email = $_POST['email'];
    $l_name = $_POST['l_name'];
    $contact = $_POST['contact'];
    $question = $_POST['question'];
    $answer= $_POST['answer'];
    $gender= $_POST['gender'];

$insert = mysqli_query($con, "INSERT INTO `user`(`f_name`, `email`, `l_name`,  `contact`, `question`, `answer`, `gender` ) VALUES ('$f_name','$email','$l_name','$contact','$question','$answer','$gender')");

if($insert)
{
    echo '<script>alert("Form Submit successfully")</script>';
}else
{
    echo "error";
}
}
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="style.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="images/t-3.png" alt=""/>
                        <h3>Welcome To</h3>
                        <p>Think Digital</p>
                        <!-- <input type="submit" name="" value="Login"/><br/> -->
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="add_employee.php" role="tab" aria-controls="home" aria-selected="true">Add Emp</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="view_employee.php" role="tab" aria-controls="profile" aria-selected="false">View Emp</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h2 class="register-heading">Apply as a Employee</h2>
                                <form class="row register-form" method="POST" action="#">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="f_name" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="l_name" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="question">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="answer" placeholder="Enter Your Answer *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister" name="register"  value="Register"/>
                                    </div>
                                    </form>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>

            </div>