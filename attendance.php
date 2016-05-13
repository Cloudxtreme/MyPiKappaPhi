<?php 
session_start();
include 'checklogin.php';
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
                <?php include 'loadvars.php';?>
                
                window.percent = function() {
                    $('#radial-attendance').attr('data-progress', percentattendance);
                    $('#attendancespan').text(percentattendance + '%');
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
                                <h3 class="panel-title">Attendance</h3>
                            </div>
                            <div class="panel-body">
                                <div class="radial-progress" id="radial-attendance" data-progress="0">
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
                                                <span id="attendancespan"></span>
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
						<h1>Attendance record</h1>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Event</th>
                                    <th>Date</th>
                                    <th>Marked</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = 'SELECT event, date, marked FROM '.$username.'attendance';
                                if($stmt = $conn->prepare($query)) {
                                    $stmt->execute();
                                    $stmt->store_result();
                                    $count = $stmt->num_rows;
                                    $stmt->bind_result($event, $date, $marked);
                                    while($stmt->fetch()) {
                                        echo '<tr';
                                        if (!strcmp($marked, 'Present')) {
                                            echo ' class = "success">';
                                        } else if (!strcmp($marked, 'Excused')) {
                                            echo ' class = "warning">';
                                        } else if (!strcmp($marked, 'Absent')) {
                                            echo ' class = "danger">';
                                        } else {
                                            echo ' class = "info">';
                                        }
                                        
                                        echo '<td>'.$event.'</td>';
                                        echo '<td>'.$date.'</td>';
                                        echo '<td>'.$marked.'</td>';
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
