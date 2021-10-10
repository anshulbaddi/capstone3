<?php
    $con = mysqli_connect('localhost','root','','facebookclone');
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];


    $check_data = mysqli_query($con,"SELECT * FROM userdata WHERE email = '$email'");
    $check = mysqli_num_rows($check_data);

    if($check > 0){
        header("Location:http://localhost/facebookclone");
    }else{
        $input = mysqli_query($con,"INSERT INTO userdata (username,email,password, birthday)VALUES('$username,'$email','$password','$birthday')");
        if($input){
            header("Location:http://localhost/facebookclone/mainpage.html");
        }
    }

?>