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
            <?php include 'navigation.html';?>
			
            <div class="container-fluid">
                <div class="row brandon">
                    <div class="col-xs-12 col-sm-8 col-md-6">
						<h1>Event attendance record</h1>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Event</th>
                                    <th>Date</th>
                                    <th>Present</th>
									<th>Absent</th>
                                    <th>Excused</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="info">
                                    <td>Chapter</td>
                                    <td>05/01/2016</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
									<td>N/A</td>
                                </tr>
                                <tr class="success">
                                    <td>Chapter</td>
                                    <td>04/24/2016</td>
                                    <td>40</td>
                                    <td>5</td>
									<td>N/A</td>
                                </tr>
                                <tr class="danger">
                                    <td>Chapter</td>
                                    <td>04/17/2016</td>
                                    <td>20</td>
                                    <td>15</td>
									<td>10</td>
                                </tr>
                                <tr class="warning">
                                    <td>Chapter</td>
                                    <td>04/10/2016</td>
                                    <td>25</td>
                                    <td>8</td>
									<td>12</td>
                                </tr>
                                <tr class="success">
                                    <td>Chapter</td>
                                    <td>04/03/2016</td>
                                    <td>27</td>
                                    <td>13</td>
									<td>5</td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary-outline button-colored" data-toggle="modal" data-target="#formModal">
						<span class="glyphicon glyphicon-plus"></span> Add new event</button>
                    </div>
				</div>
				<div class="modal fade brandon" role="dialog" id="formModal">
					<div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Event Attendance Form</h4>
                            </div> 
                            <div class="modal-body">
                                <form class="modal-form">
                                    <fieldset class="form-group">
                                        <label for="name">Event name</label>
                                        <input type="text" class="form-control" id="name">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="date">Date</label>
                                        <input type="text" class="form-control" id="date" placeholder="MM/DD/YYYY">
                                    </fieldset>
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Brother</th>
												<th>Present</th>
												<th>Absent</th>
												<th>Excused</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Adam Beck</td>
												<div class="radio">
													<td><input type="radio" name="1present" value="present"></td>
													<td><input type="radio" name="1present" value="absent"></td>
													<td><input type="radio" name="1present" value="excused"></td>
												</div>
											</tr>
											<tr>
												<td>Rob Belles</td>
												<div class="radio">
													<td><input type="radio" name="2present" value="present"></td>
													<td><input type="radio" name="2present" value="absent"></td>
													<td><input type="radio" name="2present" value="excused"></td>
												</div>
											</tr>
											<tr>
												<td>Noah Boksansky</td>
												<div class="radio">
													<td><input type="radio" name="3present" value="present"></td>
													<td><input type="radio" name="3present" value="absent"></td>
													<td><input type="radio" name="3present" value="excused"></td>
												</div>
											</tr>
											<tr>
												<td>Noah Burke</td>
												<div class="radio">
													<td><input type="radio" name="4present" value="present"></td>
													<td><input type="radio" name="4present" value="absent"></td>
													<td><input type="radio" name="4present" value="excused"></td>
												</div>
											</tr>
										</tbody>
									</table>
									
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
