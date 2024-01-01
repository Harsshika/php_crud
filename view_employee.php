<html>
<?php
$con = mysqli_connect('localhost', 'root', '', 'php_crud');

$selectData = mysqli_query($con, "SELECT * from `user`");

?>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="style.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row col-md-12 col-md-offset-2 custyle">
        <table class="table table-striped custab">
        <thead>
            <!-- <a href="add_employee.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Employee</a><br>
            <a href="edit_employee.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Edit Employee</a> -->
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Email</th>
            <th scope="col">Last Name</th>
            <th scope="col">Conact Number</th>
            <th scope="col">Question</th>
            <th scope="col">Answer</th>
            <th scope="col">Gender</th>
        </tr>
        </thead>
    <tbody>
    <?php
        $emp_no = 1;
        while ($getData = mysqli_fetch_assoc($selectData)){
    ?>

    <tr>
        <th scope="row">
        <?php echo $emp_no ?>
    </th>
    <td>
        <?php echo $getData['f_name'] ?>
    </td>
    <td>
        <?php echo $getData['email'] ?>
    </td>
    <td>
        <?php echo $getData['l_name'] ?>
    </td>
    <td>
        <?php echo $getData['contact'] ?>
    </td>
    <td>
        <?php echo $getData['question'] ?>
    </td>
    <td>
        <?php echo $getData['answer'] ?>
    </td>
    <td>
        <?php echo $getData['gender'] ?>
    </td>
    <td>
         <a href="edit_employee.php?id=<?php echo $getData['id'] ?>" class="btn btn-primary">Edit </a>
        <a href="delete_employee.php?id=<?php echo $getData['id'] ?>" class="btn btn-danger">Delete </a>
    </td>
     <?php
     $emp_no++;
    } 
    ?>
    </tbody>
    </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    

</body>
</html>