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
						<h1>Dues record</h1>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Brother</th>
                                    <th>Dues owed</th>
									<th>Dues paid</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="success">
                                    <td>Adam Beck</td>
                                    <td>$400</td>
									<td>$400</td>
                                </tr>
								<tr class="warning">
                                    <td>Rob Belles</td>
                                    <td>$420</td>
									<td>$320</td>
                                </tr>
								<tr class="danger">
                                    <td>Noah Boksansky</td>
                                    <td>$400</td>
									<td>$200</td>
                                </tr>
								<tr class="success">
                                    <td>Noah Burke</td>
                                    <td>$420</td>
									<td>$420</td>
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
