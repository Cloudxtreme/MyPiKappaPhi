<?php 
session_start();
include 'checklogin.php';
include 'config.php';
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
        
        <script>
            $(function() {
                <?php include 'loadvars.php';?>;
                
                window.percent = function() {
                    $('#radial-dues').attr('data-progress', Math.floor(Math.min(dues/targetdues, 1) * 100));
                    $('#duesspan').text('$' + dues);
                }
                setTimeout(window.percent, 200);
            });
        </script>
	</head>

	<body>
		<div>
            <?php include 'navigation.html';?>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Dues</h3>
                            </div>
                            <div class="panel-body">
                                <div class="radial-progress" id="radial-dues" data-progress="0">
                                    <div class="circle">
                                        <div class="mask full">
                                            <div class="fill"></div>
                                        </div>
                                        <div class="mask half">
                                            <div class="fill"></div>
                                            <div class="fill fix"></div>
                                        </div>
                                        <div class="shadow"></div>
                                    </div>
                                    <div class="inset">
                                        <div class="percentage">
                                            <div class="numbers">
                                                <span id="duesspan"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row brandon">
                    <div class="col-xs-12 col-sm-8 col-md-6">
						<h1>Dues record</h1>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Payment amount</th>
                                    <th>Due date</th>
                                    <th>Recieved date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = 'SELECT amount, date, recieved FROM '.$username.'dues';
                                if($stmt = $conn->prepare($query)) {
                                    $stmt->execute();
                                    $stmt->store_result();
                                    $count = $stmt->num_rows;
                                    $stmt->bind_result($amount, $date, $recieved);
                                    while($stmt->fetch()) {
                                        echo '<tr';
                                        if (strcmp($recieved, 'N/A')) {
                                            if (strtotime($date) >= strtotime($recieved)) {
                                                echo ' class = "success">';
                                            } else {
                                                echo ' class = "warning">';
                                            }
                                        } else {
                                            echo ' class = "danger">';
                                        }
                                        
                                        echo '<td>$'.$amount.'</td>';
                                        echo '<td>'.$date.'</td>';
                                        echo '<td>'.$recieved.'</td>';
                                        echo '</tr>';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
				</div>
			</div>
        </div>
		
        <img class="logo" src="assets/pkplogo.png">
	</body>
</html>
