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
                    $('#radial-dues').attr('data-progress', Math.floor(320/420 * 100));
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
                                                <span>$320</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row brandon">
                    <div class="col-xs-10 col-sm-8 col-md-4">
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
                                <tr class="danger">
                                    <td>$100</td>
                                    <td>04/10/2016</td>
                                    <td>N/A</td>
                                </tr>
                                <tr class="warning">
                                    <td>$100</td>
                                    <td>03/15/2016</td>
                                    <td>03/18/2016</td>
                                </tr>
                                <tr class="success">
                                    <td>$100</td>
                                    <td>02/14/2016</td>
                                    <td>02/05/2016</td>
                                </tr>
                                <tr class="success">
                                    <td>$120</td>
                                    <td>01/17/2016</td>
                                    <td>01/10/2016</td>
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
