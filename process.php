<?php
    include "conn.php";
    session_start();

    //This code is for create account

    if(isset($_POST['create_account'])){
      

        $fn = $_POST['firstname'];
        $ln = $_POST['lastname'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        //validate
        $val = mysqli_query($conn, "SELECT * FROM profile WHERE email='$email'");
        $val_num = mysqli_num_rows($val);
        if($val_num <= 0){

            $insert = mysqli_query($conn, "INSERT INTO profile VALUES ('0','$fn','$ln','$age','$email','$pass')");
            if($insert == true){    

                ?>
                    <script>
                        alert("Data is inserted");
                       window.location.href="index.php";
                    </script>
                <?php
            
            }else{
                ?>
                    <script>
                        alert("Error in Registration!");
                        window.location.href="index.php";
                    </script>
                <?php
            }
        }else{
            ?>
                <script>
                    alert("Email is already in use!");
                    window.location.href="index.php";
                </script>
            <?php
        }
    }

    //This code is for member login
    if(isset($_POST['member_login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $check = mysqli_query($conn, "SELECT * FROM profile WHERE email='$email' AND password='$pass '");

        $check_num = mysqli_num_rows($check);

            if($check_num >= 1){
                $_SESSION['email'] = $email;
                ?>
                <script>
                    alert("Login Successfully");
                    window.location.href="index.php";
                </script>
                <?php

            }else{
                ?>
                <script>
                    alert("Wrong Email or Password");
                    window.location.href="login.php";
                </script>
                <?php


            }
    }

    //This code is for admin login
    if(isset($_POST['admin_login'])){

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $check = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' AND password='$pass'");

        $check_num = mysqli_num_rows($check);

        if($check_num >= 1){
            $_SESSION['email'] = $email;
            ?>
            <script>
                alert("Login Successfully");
                window.location.href="admin/index.php";
            </script>
            <?php

        }else{
            ?>
            <script>
                alert("Wrong email or password");
                window.location.href="student/index.php";
            </script>
            <?php

        }

    }

?>