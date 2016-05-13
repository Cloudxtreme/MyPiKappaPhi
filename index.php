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
                window.percent = function() {
                    $('#radial-service').attr('data-progress', Math.floor(16/16 * 100));
                    $('#radial-dues').attr('data-progress', Math.floor(320/420 * 100));
                    $('#radial-attendance').attr('data-progress', Math.floor(3/4 * 100));
                }
                setTimeout(window.percent, 200);

				$("#panel-service").click(function(e) {
					e.preventDefault();
					window.location.href = "service.php";
				});
                
                $("#panel-dues").click(function(e) {
					e.preventDefault();
					window.location.href = "dues.php";
				});
                
                $("#panel-attendance").click(function(e) {
					e.preventDefault();
					window.location.href = "attendance.php";
				});
            });
        </script>
	</head>

	<body>		
		<div>
            <?php 
            include 'checklogin.php';
            include 'navigation.html';
            ?>
            
            <div class="container-fluid" id="container-index">
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="panel panel-default" id="panel-service">
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
                                                <span>16</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="panel panel-default" id="panel-dues">
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
                                                <span>$320</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="panel panel-default" id="panel-attendance">
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
                                                <span>75%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
        <img class="logo" src="assets/pkplogo.png">
	</body>
</html>
