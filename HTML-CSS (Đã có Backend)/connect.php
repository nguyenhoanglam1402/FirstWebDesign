<?php
    $db_host = 'localhost';
    $db_user ='root';
    $db_pass = '';
    $db_name = 'db_qiushop';
    $connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if(isset($_POST['submit'])){
        $username= $_POST['emailTextBox'];
        $password= $_POST['emailTextBox'];
        $password= md5($password);
        $sql = "INSERT INTO login (username, password) VALUES('$username','$password')";
        mysqli_query($connect, $sql);
    }

    if(isset($_POST['exampleCheck1']) == true){
        echo "<div class='alert alert-danger' role='alert'>  You didn't check or agree our laws </div>";
    }
?>