<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Admin</title>	
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>

			<style>
				.box
				{
					width:800px;
					margin:0 auto;
				}
				.active_tab1
				{
					background-color:#fff;
					color:#333;
					font-weight: 600;
				}
				.inactive_tab1
				{
					background-color: #f5f5f5;
					color: #333;
					/*cursor: not-allowed;*/
				}
				.has-error
				{
					border-color:#cc0000;
					background-color:#ffff99;
				}
				.navbar-brand
				{
					font-family: 'Lato', sans-serif;
					color:white;
					font-size: 2rem; !important;
					margin: 0px;
				}
					
			</style>
		</head>
		<body>
			@yield('content')
		</body>
		</html>