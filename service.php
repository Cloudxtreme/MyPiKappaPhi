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
                <?php include 'loadvars.php'?>
                
                window.percent = function() {
                    $('#radial-service').attr('data-progress', Math.floor(Math.min(hours/targethours, 1) * 100));
                    $('#servicespan').text(hours);
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
                                <h3 class="panel-title">Service hours</h3>
                            </div>
                            <div class="panel-body">
                                <div class="radial-progress" id="radial-service" data-progress="0">
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
                                                <span id="servicespan"></span>
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
						<h1>Service record</h1>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Activity</th>
                                    <th>Benefactor</th>
                                    <th>Date</th>
                                    <th>Hours</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = 'SELECT activity, benefactor, date, hours, status FROM '.$username.'service';
                                if($stmt = $conn->prepare($query)) {
                                    $stmt->execute();
                                    $stmt->store_result();
                                    $count = $stmt->num_rows;
                                    $stmt->bind_result($activity, $benefactor, $date, $hours, $status);
                                    while($stmt->fetch()) {
                                        echo '<tr';
                                        if (!strcmp($status, 'Accepted')) {
                                            echo ' class = "success">';
                                        } else if (!strcmp($status, 'Pending')) {
                                            echo ' class = "warning">';
                                        } else if (!strcmp($status, 'Rejected')) {
                                            echo ' class = "danger">';
                                        } else {
                                            echo '>';
                                        }
                                        echo '<td>'.$activity.'</td>';
                                        echo '<td>'.$benefactor.'</td>';
                                        echo '<td>'.$date.'</td>';
                                        echo '<td>'.$hours.'</td>';
                                        echo '<td>'.$status.'</td>';
                                        echo '</tr>';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary-outline button-colored" data-toggle="modal" data-target="#formModal"><span class="glyphicon glyphicon-plus"></span> Submit service hours</button>
                    </div>
				</div>
				<div class="modal fade brandon" role="dialog" id="formModal">
					<div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" id="modalformheader">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Service hours reporting form</h4>
                            </div> 
                            <div class="modal-body">
                                <form class="modal-form">
                                    <fieldset class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="date">Date</label>
                                        <input type="text" class="form-control" id="date" placeholder="MM/DD/YYYY">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="activity">Activity name</label>
                                        <input type="text" class="form-control" id="activity">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="benefactor">Benefactor</label>
                                        <input type="text" class="form-control" id="activity" placeholder="Who you served">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="servicedesc">Description of Service</label>
                                        <textarea class="form-control" id="servicedesc" rows="3"></textarea>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="hours">Hours served</label>
                                        <input type="text" class="form-control" id="hours" placeholder="Ex. 3.5">
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
</html>
