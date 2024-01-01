<!doctype html>

<?php

$con = mysqli_connect('localhost' , 'root' , '' , 'php_crud');


if (isset($_GET['id'])) {


    $EmpId = $_GET['id'];

    $selectEmp= mysqli_query($con, "Select * from `user` WHERE id = $EmpId");
    $empInfo = mysqli_fetch_assoc($selectEmp);
}
    if (isset($_POST['register'])) {

        $f_name = $_POST['f_name'];
        $email = $_POST['email'];
        $l_name = $_POST['l_name'];
        $contact = $_POST['contact'];
        $question = $_POST['question'];
        $answer= $_POST['answer'];
        $gender= $_POST['gender'];
    
        $updateEmp = mysqli_query($con, "UPDATE `user` SET `f_name`='$f_name',`email`='$email',`l_name`='$l_name',`contact`='$contact',`question`='$question',`answer`='$answer',`gender`='$gender' WHERE id = $EmpId");
    
        if ($updateEmp) {
            header('Location: view_employee.php');
        } else {
            echo "Employee not updated";
        }
    
    }
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Here We Edit The Employee Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

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
                            <h2 class="register-heading">Update Employee</h2>
                             <form class="row register-form" method="POST" action="#">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="f_name" placeholder="First Name *" value="<?php echo $empInfo['f_name'] ?>">
                                  </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="l_name" placeholder="Last Name *" value="<?php echo $empInfo['l_name']?>">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="question" value="<?php echo $empInfo['question']?>">
                                            <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                            <option>What is your Birthdate?</option>
                                            <option>What is Your old Phone Number</option>
                                               <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="<?php echo $empInfo['gender'] ?>" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="<?php echo $empInfo['gender'] ?>">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email *" value="<?php echo $empInfo['email'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *" value="<?php echo $empInfo['contact'] ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="answer" placeholder="Enter Your Answer *" value="<?php echo $empInfo['answer'] ?>">
                                        </div>
                                        <input type="submit" class="btnRegister" name="register"  value="Save"/>
                                    </div>
                                    </form>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>

            </div>
</body>
</html>