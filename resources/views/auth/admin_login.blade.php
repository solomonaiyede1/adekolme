<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Adekolme Nigeria Ltd | Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

	<style>
		*{ 
			box-sizing: border-box; 
			margin: 0; 
			padding:0; 
		}

		input[type="email"]{
			border-radius: 0px;
		}
		input[type="password"]{
			border-radius: 0px;
		}
	</style>
</head>
<body class="bg bg-transparent bg-gradient">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-4 mx-auto" style="padding-top: 20vh">
				<div class="card bg-white">
					<div class="card-header bg-white">
						<div class="card-tile text-primary">
							<center style="font-weight: 900; font-size: 14px; font-family: calibri">
								Adekolme Nigeria Limited
							</center>
						</div>
					</div>
					<div class="card-body" style="box-shadow: 5px 5px 5px grey">
						<center style="font-weight: 900; font-size: 20px; font-family: calibri">Admin Login</center><br>
						<form method="post" action="/admin/login">
							@csrf
							<div class="email">
								<input type="email" name="email" class="form-control" placeholder="Email" required>
							</div><br>

							<div class="password">
								<input type="password" name="password" class="form-control" placeholder="password" required>
							</div><br>

					<div class="card-footer">
							<div class="submit">
										<button class="btn btn-sm btn-primary mx-auto form-control"; style="border-radius: 0px">Login</button>
									</div>	
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>