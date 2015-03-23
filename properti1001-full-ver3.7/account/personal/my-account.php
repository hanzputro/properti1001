<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="../../assets/css/bootstrap.css"/>
        <!--<link type="text/css" rel="stylesheet" href="../../assets/css/bootstrap-responsive.css"/>-->
        <link type="text/css" rel="stylesheet" href="../../assets/css/font-awesome.min.css"/>
        <link type="text/css" rel="stylesheet" href="../../assets/css/style.css"/>
		
		<!-- JS -->		
		<script type="text/javascript" src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="../../assets/js/vendor/bootstrap.js"></script>
		
		<script type="text/javascript">
			var $ = jQuery.noConflict();

			$(document).ready(function() {
				$('#myCarousel1').carousel({
					interval: 5000,
					cycle: true
				});
			});
		</script>
    </head>
	
	
    <body>
		
		<div id="nav-body"><!---- Header ---->
			<div id="nav-login">
				<div id="top">
					<div class="navbar navbar-inverse navbar-static-top">
						<div class="navbar-inner">
							<div class="container-fluid">
								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</a> 
								<div class="nav-collapse collapse">							
									<ul class="nav pull-right">
										<li><p>WELCOME, HANZPUTRO</p></li>
										<li><a href="#">PROPERTI TERPILIH <span class="label label-warning" style="margin-left:2px;">3</span></a></li>
										<li><a href="#">PENCARIAN TERSIMPAN <span class="label label-warning" style="margin-left:2px;">0</span></a></li>
										<li><a href="#LoginModal" data-original-title="Help" data-toggle="modal">LOGOUT</a></li>                                      
									</ul>						
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>		
		<div id="logo-body">
			<div id="logo-wrap">
				<div class="row-fluid">
					<div class="span3">
						<div class="logo-properti1001"></div>
					</div>
					<div class="span7 offset2" >
						<div class="iklan"><p>SPACE IKLAN</p></div>
					</div>
				</div>			
			</div>	
		</div>
		<div id="line-orange"></div><!---- /Header ---->
		
		<!---- Content ---->
        <div id="wrap" style="">
			<p class="link-navigation-web"><a href="../../home.php">Home</a> / <a href="my-account.php">Dashboard</a></p>
			<!-- #menu -->
            <div id="main-menu">
				<div class="navbar navbar-inverse navbar-static-top">
					<div class="navbar-inner navbar-inner2">
						<div class="container-fluid">				
							<ul class="nav nav2">
								<li><a class="" href="../../home.php"><i class="icon-home"></i> Properti</a></li>
								<li><a href="../../list-agent.php"><i class="icon-group"></i> Agent Properti</a></li>                                
							</ul>
							<!--
							<ul class="nav nav3 pull-right">
								<li><a href="file.html"><i class="icon-thumbs-up"></i> Iklankan Propertimu</a></li>                                 
							</ul>
							-->
						</div>
					</div>
				</div>
			</div>
            <!-- /#menu -->
			
			<div class="row-fluid menu-account">
				<div class="span12">
					<div class="row-fluid">
						<div class="span12">
							<div id="main-account-menu">
								<div class="navbar navbar-inverse navbar-static-top">
									<!-- Menu Account -->
									<div class="navbar-inner">
										<div class="pull-left">				
											<ul class="nav nav5">
												<li>
													<a class="active5" href="javascript:void(0)"><i class="icon-briefcase"></i> PERSONAL ACCOUNT </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="my-account.php">Dashboard <i class="icon-coffee pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="change-pass.php">Change Password <i class="icon-exchange pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
												</li>
												<li>
													<a class="" href="javascript:void(0)"><i class="icon-user-md"></i> PROFILE </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="view-profile.php">View Profile <i class="icon-eye-open pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="edit-profile.php">Edit Profile <i class="icon-wrench pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
												</li>
												<li>
													<a class="" href="javascript:void(0)"><i class="icon-folder-open-alt"></i> LISTING </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="my-listing.php">My Listing <i class="icon-folder-open-alt pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="newpost-listing.php">Post New Listing <i class="icon-certificate pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="expired-listing.php">Expired Listing <i class="icon-ban-circle pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
												</li>
												<li>
													<a class="" href="javascript:void(0)"><i class="icon-magic"></i> TOOLS </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="properti-pilihan.php">favorite properties <i class="icon-heart-empty pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="inbox.php">Inbox <i class="icon-comment pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="inbox.php">CS &amp; Agent / Personal <i class="icon-comments pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
												</li>
											</ul>
											<div style="clear:both;"></div>
										</div>		
									</div>
									<!-- /Menu Account -->
								</div>
							</div>
						</div>
					</div>			
				</div>
			</div>
			<div class="row-fluid main-account jrk">
				<div class="span12">
					<div class="row-fluid">
						<div class="span12 tab-accountl tab-acc jrk">
							<h3>Selamat datang, hanzputro</h3><br>
							<p>Sekarang anda telah dapat menggunakan berbagai fitur-fitur agent yang terdapat pada properti1001.com.<br>
							 Sebelum itu, berikut langkah-langkah yang harus dilakukan :</p>
							<hr></hr>
							<div class="row-fluid jrk">
								<div class="span12 bg-ket-acc-dsb">
									<div class="span4 bg-ket-acc-dsb-img">
										<div class="circle4"><div class="circle5"><p>1</p></div></div>
										<img src="../../assets/img/penj-profile.jpg">
										<h3 class="h3--penj">Lengkapi Profile Anda</h3>
										<p class="p--penj">Lengkapilah profile anda untuk kemudahan dalam proses transaksi properti anda. silahkan lengkapi 
										<br><br><a href="#" class="btn btn-warning" style="margin:0px 0px 0px 0px;padding:2px 10px;"> Disini <i class="icon-circle-arrow-right"></i></a></p>
									</div>
									<div class="span4 bg-ket-acc-dsb-img">
										<div class="circle4"><div class="circle5"><p>2</p></div></div>
										<img src="../../assets/img/penj-posting.jpg">
										<h3 class="h3--penj">Posting Properti Anda</h3>
										<p class="p--penj">Anda dapat langsung melakukan posting properti. Silahkan posting properti 
										<br><br><a href="#" class="btn btn-warning" style="margin:0px 0px 0px 0px;padding:2px 10px;"> Disini <i class="icon-circle-arrow-right"></i></a></p>
									</div>
									<div class="span4 bg-ket-acc-dsb-img">
										<div class="circle4"><div class="circle5"><p>3</p></div></div>
										<img src="../../assets/img/penj-bayar.jpg">
										<h3 class="h3--penj">Lakukan Pembayaran Postingan Segera</h3>
										<p class="p--penj">Ketika anda sudah melakukan posting properti, maka secara otomatis postingan properti anda dalam masa pending. 
											Lakukan segera pembayaran tersebut agar postingan properti anda tampil pada halaman properti1001.com dan silahkan melakukan proses pembayaran 
										<br><br><a href="#" class="btn btn-warning" style="margin:0px 0px 0px 0px;padding:2px 10px;"> Disini <i class="icon-circle-arrow-right"></i></a></p>
									</div>							
								</div>
							</div>
							<br>
							<p>berbagai fitur-fitur agent yang terdapat pada properti1001.com sebagai berikut :</p>
							<hr></hr>
							<div class="row-fluid jrk">
								<div class="span12 bg-ket-acc-dsb">									
									<div class="span5 bg-ket-acc-dsb-text">
										<div class="circle2"><div class="circle3"><p>1</p></div></div>
										<h3>Pencarian Properti</h3>
										<p>Anda dapat melakukan pencarian dari berbagai properti yang anda inginkan.</p>
									</div>
									<div class="span7 bg-ket-acc-dsb-img">
										<img src="../../assets/img/acc-img/img4.jpg">
									</div>
								</div>
							</div>
							
							<div class="row-fluid jrk">
								<div class="span12 bg-ket-acc-dsb">									
									<div class="span5 bg-ket-acc-dsb-text">
										<div class="circle2"><div class="circle3"><p>2</p></div></div>
										<h3>Properti Pilihan</h3>
										<p>Anda dapat menyimpan properti yang anda cari sebagai perbandingan antara properti yang anda cari lainnya.</p>
									</div>
									<div class="span7 bg-ket-acc-dsb-img">
										<img src="../../assets/img/acc-img/img2.jpg">
									</div>
								</div>
							</div>
							
							<div class="row-fluid jrk">
								<div class="span12 bg-ket-acc-dsb">									
									<div class="span5 bg-ket-acc-dsb-text">
										<div class="circle2"><div class="circle3"><p>3</p></div></div>
										<h3>Pencarian Tersimpan</h3>
										<p>Anda dapat menyimpan pencarian dari berbagai properti yang anda inginkan.</p>
									</div>
									<div class="span7 bg-ket-acc-dsb-img">
										<img src="../../assets/img/acc-img/img3.jpg">
									</div>
								</div>
							</div>
							
							<div class="row-fluid jrk">
								<div class="span12 bg-ket-acc-dsb">									
									<div class="span5 bg-ket-acc-dsb-text">
										<div class="circle2"><div class="circle3"><p>4</p></div></div>
										<h3>Email Peringatan</h3>
										<p>Anda dapat menggunakan email peringatan sebagai permintaan pencarian otomatis dari berbagai properti yang anda inginkan.</p>
									</div>
									<div class="span7 bg-ket-acc-dsb-img">
										<img src="../../assets/img/acc-img/img1.jpg">
									</div>
								</div>
							</div>
							
						</div>
					</div>			
				</div>
			</div>
        </div>
		<!---- /Content ---->
        
		
		
        <!---- footer ---->
		<?php 
			include "../../component/footer.php";
		?>			
		<!---- /footer ---->			
		
		<!---- login-modal ---->
		<?php 
			include "../../component/login-modal.php";
		?>			
		<!---- /login-modal ---->			
		
    </body>
</html>