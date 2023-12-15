<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<!-- <link rel="icon" href="https://upload.wikimedia.org/wikipedia/id/4/48/Logo_Sman_1_Bangkalan.png"> -->
	<title>Halaman Login - Sistem Pelanggaran Siswa</title>

	<meta name="description" content="User login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" /> -->

	<!-- text fonts -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.min.css" />

	<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-rtl.min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
		<style>
			*{
			font-family: 'Poppins', sans-serif;
			
			}
			/* .light-login{
				
				background-image: url("assets/images/1.jpeg");
				background-position: 50% 50%;
				background-size: cover;
				background-repeat: no-repeat;
			} */
		</style>

</head>
<body class="login-layout light-login">
	<div class="main-container">
		<div class="main-content">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="login-container" style="margin-top:100px;">
						<div class="position-relative">
							<div id="login-box" class="login-box visible widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
									<div class="center">
									<table>
								<tr>
									<!-- <td>
								<img src="https://upload.wikimedia.org/wikipedia/id/4/48/Logo_Sman_1_Bangkalan.png" style="width: 70px"></td> -->
								<td style="padding:10px">
								<b><h4 style="font-weight:bold">SISTEM INFORMASI PELANGGARAN SISWA</h4></b>
								<!-- <small class="black italic" id="id-company-text"> unggul, berprestasi, luhur budi pekerti</small> -->
							<!-- <td>
</td> -->
							</tr>
							</table>
								<hr>
						</div>

										<!-- <div class="space-6"></div> -->
										<h5 style="font-weight:bold;text-align:center">LOGIN</h5>
										<!-- <div class="space-6"></div> -->

										<form action="<?php echo base_urL('index.php/c_auth/login'); ?>" role="form" method="post">
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="number" name="username" class="form-control" placeholder="NIS/NIP" required />
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" name="password" class="form-control" placeholder="Password" required />
														<i class="ace-icon fa fa-lock"></i>
													</span>
												</label>

												<div>
													<select class="form-control" id="form-field-select-1" name="tahun_ajaran">
														<?php foreach ($tahun as $t) { ?>
															<option value="<?php echo $t['id_tahun']; ?>"><?php echo $t['tahun_ajaran']; ?></option>
														<?php } ?>
													</select>
												</div>

												<div class="space"></div>

												<div class="clearfix">
													<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
														<i class="ace-icon fa fa-key"></i>
														<span class="bigger-110">Login</span>
													</button>
												</div>

												<div class="space-4">
												</div>
											</fieldset>
										</form>

										

									</div><!-- /.widget-main -->
								</div><!-- /.widget-body -->
							</div><!-- /.login-box -->
							<div class="social-auth-links text-left">
								<?php if ($this->session->flashdata('alert')) : ?>
									<?php echo '<div class="social-auth-links text-center"> <div class="alert alert-danger"> <b>' . $this->session->flashdata('alert') . '</b> </div> </div>' ?>
								<?php endif; ?>
							</div>
							<div id="forgot-box" class="forgot-box widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header red lighter bigger">
											<i class="ace-icon fa fa-key"></i>
											Retrieve Password
										</h4>

										<div class="space-6"></div>
										<p>
											Enter your email and to receive instructions
										</p>

										<form>
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="email" class="form-control" placeholder="Email" />
														<i class="ace-icon fa fa-envelope"></i>
													</span>
												</label>

												<div class="clearfix">
													<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
														<i class="ace-icon fa fa-lightbulb-o"></i>
														<span class="bigger-110">Send Me!</span>
													</button>
												</div>
											</fieldset>
										</form>
									</div><!-- /.widget-main -->

									<div class="toolbar center">
										<a href="#" data-target="#login-box" class="back-to-login-link">
											Back to login
											<i class="ace-icon fa fa-arrow-right"></i>
										</a>
									</div>
								</div><!-- /.widget-body -->
							</div><!-- /.forgot-box -->

						</div><!-- /.position-relative -->

						<!-- <div class="navbar-fixed-top align-right">
							<br />
							&nbsp;
							<a id="btn-login-dark" href="#">Dark</a>
							&nbsp;
							<span class="blue">/</span>
							&nbsp;
							<a id="btn-login-blur" href="#">Blur</a>
							&nbsp;
							<span class="blue">/</span>
							&nbsp;
							<a id="btn-login-light" href="#">Light</a>
							&nbsp; &nbsp; &nbsp;
						</div> -->
					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.main-content -->
	</div><!-- /.main-container -->

	<!-- basic scripts -->

	<!--[if !IE]> -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.min.js"></script>

	<!-- <![endif]-->

	<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
	<script type="text/javascript">
		if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
	</script>

	<!-- inline scripts related to this page -->
	<script type="text/javascript">
		jQuery(function($) {
			$(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible'); //hide others
				$(target).addClass('visible'); //show target
			});
		});



		//you don't need this, just used for changing background
		jQuery(function($) {
			$('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');

				e.preventDefault();
			});
			$('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');

				e.preventDefault();
			});
			$('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');

				e.preventDefault();
			});

		});
	</script>
</body>

</html>
