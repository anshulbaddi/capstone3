<?php
    $con = mysqli_connect('localhost','root','','facebookclone');
    $email = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check_data = mysqli_query($con,"SELECT * FROM userdata WHERE email = '$email' and password = '$password'");
    $check = mysqli_num_rows($check_data);

    if($check > 0){
        header("Location:http://localhost/facebookclone/mainpage.html");
    }else{
        header("Location:http://localhost/facebookclone");
    }

?>