<!DOCTYPE html>
<html lang="en">
<head>
	<title>en proceso</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate1/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	
	<div class="size1 bg0 where1-parent">
		<!-- Coutdown -->
		<div class="flex-c-m bg-img1 size2 where1 overlay1 where2 respon2" style="background-image: url('images/bg01.jpg');">
			<div class="wsize2 flex-w flex-c-m cd100 js-tilt">
				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 days">35</span>
					<span class="s2-txt4">Days</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 hours">17</span>
					<span class="s2-txt4">Hours</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 minutes">50</span>
					<span class="s2-txt4">Minutes</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 seconds">39</span>
					<span class="s2-txt4">Seconds</span>
				</div>
			</div>
		</div>
		
		<!-- Form -->
		<div class="size3 flex-col-sb flex-w p-l-75 p-r-75 p-t-45 p-b-45 respon1">
			<div class="wrap-pic1">
				<img src="images/icons/logo.png" alt="LOGO">
			</div>

			<div class="p-t-50 p-b-60">
				<p class="m1-txt1 p-b-36">
					Lo sentimos pero todavia esta parte anda en desarrollo <span class="m1-txt2">sentimos las molestias</span>, Siguenos para estar al dia con las actualizaciones,
				</p>

				<form class="contact100-form validate-form">
					<div class="wrap-input100 m-b-10 validate-input" data-validate = "Name is required">
						<input class="s2-txt1 placeholder0 input100" type="text" name="name" placeholder="Introduce tu nombre">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 m-b-20 validate-input" data-validate = "Email is required: ex@abc.xyz">
						<input class="s2-txt1 placeholder0 input100" type="text" name="email" placeholder="Introduce tu correo">
						<span class="focus-input100"></span>
					</div>

					<div class="w-full">
						<button class="flex-c-m s2-txt2 size4 bg1 bor1 hov1 trans-04">
							Subscribe
						</button>
					</div>
				</form>

				<p class="s2-txt3 p-t-18">
					tranquilo solo enviaremos un mensaje cuando este terminado.
				</p>
			</div>

			<div class="flex-w">
				<a href="#" class="flex-c-m size5 bg3 how1 trans-04 m-r-5">
					<i class="fa fa-facebook"></i>
				</a>

				<a href="#" class="flex-c-m size5 bg4 how1 trans-04 m-r-5">
					<i class="fa fa-twitter"></i>
				</a>

				<a href="#" class="flex-c-m size5 bg5 how1 trans-04 m-r-5">
					<i class="fa fa-youtube-play"></i>
				</a>
			</div>
		</div>
	</div>	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/countdowntime1/moment.min.js"></script>
	<script src="vendor/countdowntime1/moment-timezone.min.js"></script>
	<script src="vendor/countdowntime1/moment-timezone-with-data.min.js"></script>
	<script src="vendor/countdowntime1/countdowntime.js"></script>
	<script>
		$('.cd100').countdown100({
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 15,
			endtimeHours: 18,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "" 
		});
	</script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main2.js"></script>

</body>
</html>