
<html>
	<head>
        <title>Maintainance Mode</title>
		<!-- favicon -->
		<link rel="shortcut icon" href="{{asset('assets/front/img/'.$setting->favicon)}}" type="image/x-icon">
		<link href='https://fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
		<!-- bootstrap css -->
		<link rel="stylesheet" media="screen" href="{{asset('assets/front/css/plugins.min.css')}}">
		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100vh;
				color: #B0BEC5;
				display: table;
				font-weight: 400;
				font-family: 'Lato';
				overflow: hidden;
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
				padding: 0;
			}

			.content {
				text-align: center;
				display: block;
			}

			.title {
				font-size: 72px;
				margin-bottom: 40px;
			}

			h3.maintain-txt {
				line-height: 40px;
			}
			.maintain-img-wrapper img {
				width: 100%;
				height: 100vh;
			}
			/* image button style */




.container .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.btn{
	margin-top: 14rem;
	padding: 6px 4rem 8px 4rem;
	background: #ff0000 !important;
	color: #000 !important;
	font-weight: 600;
}
button:hover{
	background-color: #d10505 !important;
}
</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-lg-12">
						<div class="maintain-img-wrapper">
							 <img src="{{asset('assets/images/'.$setting->maintainance_image)}}" alt="">
							 <a href="{{route('user.login')}}"> <button class="btn">REGISTER</button></a>
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-lg-8 offset-lg-2">
						<h3 class="maintain-txt">
							{!! nl2br($setting->maintainance_text) !!}
						</h3>
					</div>
				</div> -->
			</div>
		</div>
	</body>
</html>


