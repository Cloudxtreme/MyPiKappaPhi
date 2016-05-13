<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <title>MyPiKappaPhi</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/radial.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="nav-script.js"></script>
	</head>

	<body>		
		<div>
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand center" href="#">Pi Kappa Phi: Kappa Alpha</a>
                    </div>
                </div>
            </nav>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-10 col-sm-8 col-md-8 col-lg-6" id="loginpanel">
                        <div class="panel panel-default" id="panel-service">
                            <div class="panel-heading" id="loginheading">
                                <h3 class="panel-title">Log in to MyPiKappaPhi</h3>
                            </div>
                            <div class="panel-body">
                                <form class="modal-form" method="post">
                                    <fieldset class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" required>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" pattern=".{6,}"   required title="Password must be at least 6 characters long">
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary button-colored">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
        <img class="logo" src="assets/pkplogo.png">
	</body>
    
    <?php 
    unset($_SESSION['username']);
    
    include 'config.php';
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        
        /*
        $options = [
            'cost' => 11,
            'salt' => uniqid(mt_rand(), true),
        ];
        
        echo password_hash($password, PASSWORD_DEFAULT, $options)
        */
        
        $query = 'SELECT password FROM members WHERE username = ?';
        if($stmt = $conn->prepare($query)) {
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->store_result();
            $count = $stmt->num_rows;
            $stmt->bind_result($result);
            $stmt->fetch();
        }
        
        if ($count > 0) {
            if (password_verify($password, $result)) {
                $_SESSION['username'] = $username;
                
                header("Location:index.php");
            } else {
                echo "<center class='brandon' style='color:red'>Invalid username or password</center>";
            }
        } else {
            echo "<center class='brandon' style='color:red'>Invalid username or password</center>";
        }
    }
    ?>
</html>
