<!Doctype html>
<html>
<head>
<title>Search</title>
<link rel="stylesheet" href="s.css">
</head>
<body>
	<div class="container">
		<header>
			<nav>
				<ul>
					<li>
						<a href="companyhome.php">Back</a>
					</li>
				</ul>
			</nav>
		</header>
	<div class="cover">
		<h1>Enter the ID for the service you want to delete</h1>
		<form method="post" action="deletequery.php" class="flex-form">
			<label for="from">
				<i class="ion-location"></i>
			</label>
			<input name="name" type="search" placeholder="Search for the Service ID...">
			<input name="submit" type="submit" value="Delete">
		</form>
	</div>
	</div>
</body>
</html>