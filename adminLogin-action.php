<?php
    include "admin-controller.php";
    $admin = new admin();

    if(isset($_POST['adminLoginSubmit'])){
        $username = $_POST['adminUsername'];
        $password = $_POST['adminPassword'];

        $admin->setAdminUsername($username);
        $admin->setAdminPassword($password);


        // echo $username . "<br>";
        // echo $password . "<br>";
        // exit;

        if($admin->adminLogin()){
            header('Location: admin-dashboard.php');
        }else{
            echo "Something went wrong!";
        }
    }
?>