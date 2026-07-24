<?php 

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['your_name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $city = $_POST['city'];

    $dob_array = explode('-', $dob);

    if (checkdate($dob_array[1], $dob_array[2], $dob_array[0])){

        $conn = new mysqli('localhost', 'root', '', 'class_testing');

        $conn->query("INSERT INTO `users` (`name`, `DOB`, `email`, `city`)
        VALUES ('$name', '$dob', '$email', '$city') ");
        
    }

}


?> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form Handling </title>
</head>
<body>
    

<form action="" method="post">


Your Name <input type="text" name="your_name" id=""> <br> <br>
Email <input type="text" name="email" id=""> <br> <br>
DOB <input type="date" name="dob" id=""> <br> <br>
City <input type="text" name="city" id=""> <br> <br>
<input type="Submit">


</body>
</html>
