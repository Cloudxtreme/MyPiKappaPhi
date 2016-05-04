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
                    $('#radial-attendance').attr('data-progress', Math.floor(320/420 * 100));
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
                                                <span>75%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row brandon">
                    <div class="col-xs-12 col-sm-8 col-md-4">
						<h1>Attendance record</h1>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Event</th>
                                    <th>Date</th>
                                    <th>Present</th>
                                    <th>Excused</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="info">
                                    <td>Chapter</td>
                                    <td>05/01/2016</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                                <tr class="success">
                                    <td>Chapter</td>
                                    <td>04/24/2016</td>
                                    <td>Yes</td>
                                    <td>N/A</td>
                                </tr>
                                <tr class="success">
                                    <td>Chapter</td>
                                    <td>04/17/2016</td>
                                    <td>Yes</td>
                                    <td>N/A</td>
                                </tr>
                                <tr class="danger">
                                    <td>Chapter</td>
                                    <td>04/10/2016</td>
                                    <td>No</td>
                                    <td>No</td>
                                </tr>
                                <tr class="warning">
                                    <td>Chapter</td>
                                    <td>04/03/2016</td>
                                    <td>No</td>
                                    <td>Yes</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
				</div>
			</div>
        </div>
		
        <img class="logo" src="assets/pkplogo.png">
	</body>
</html>
