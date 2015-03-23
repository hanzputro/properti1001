<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="../../../assets/css/bootstrap.css"/>
        <!--<link type="text/css" rel="stylesheet" href="../../../assets/css/bootstrap-responsive.css"/>-->
        <link type="text/css" rel="stylesheet" href="../../../assets/css/font-awesome.min.css"/>
        <link type="text/css" rel="stylesheet" href="../../../assets/css/style.css"/>
		
		<!-- JS -->		
		<script type="text/javascript" src="../../../assets/js/vendor/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="../../../assets/js/vendor/bootstrap.js"></script>
		
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
										<li><a href="#">CREDITS <span class="label label-warning" style="margin-left:2px;">1000</span></a></li>
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
					<div class="span7 offset2" style="height:97px; background: #e1e1e1;">
						<div class="iklan"><p>SPACE IKLAN</p></div>
					</div>
				</div>			
			</div>	
		</div>
		<div id="line-orange"></div><!---- /Header ---->
		
		<!---- Content ---->
        <div id="wrap" style="">
			<p class="link-navigation-web"><a href="../../../home.php">Home</a> &raquo; <a href="../my-account.php">My Agent Account</a> &raquo; <a href="email-peringatan.php">Email Alerts</a></p>
			<!-- #menu -->
            <div id="main-menu">
				<div class="navbar navbar-inverse navbar-static-top">
					<div class="navbar-inner navbar-inner2">
						<div class="container-fluid">				
							<ul class="nav nav2">
								<li><a class="" href="../../../home.php"><i class="icon-home"></i>Properti</a></li>
								<li><a href="../../../list-agent.php"><i class="icon-group"></i>Agent Properti</a></li>                                
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
						<div class="span2">
							<div id="main-login-menu">
								<div class="navbar navbar-inverse navbar-static-top">
									<div class="navbar-inner navbar-inner2">
										<div class="container-fluid">				
											<ul class="nav nav4">
												<!--
												<li><a href="register.html"><i class="icon-home"></i> Register</a></li>
												<li><a href="login.html"><i class="icon-group"></i> Login</a></li> 
												-->
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="span9">
							<div id="main-account-menu">
								<div class="navbar navbar-inverse navbar-static-top">
									<div class="navbar-inner navbar-inner2">
										<div class="container-fluid">				
											<ul class="nav nav5">
												<li><a class="" href="../my-account.php"><i class="icon-briefcase"></i> AGENT ACCOUNT</a></li>
												<li><a class="" href="../my-profile/view-profile.php"><i class="icon-user-md"></i> PROFILE</a></li>
												<li><a class="" href="../my-listing/my-listing.php"><i class="icon-folder-open-alt"></i> LISTING</a></li>
												<li><a class="active5" href="properti-pilihan.php"><i class="icon-magic"></i> TOOLS</a></li>
											</ul>
										</div>
										<div class="div-mycredits">
											<!--<div class="bg-creagnt" style=""></div>	-->
											<p>My Credits</p>
											<p class="view-credits">1.000.000</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>			
				</div>
			</div>
			<div class="row-fluid main-account jrk">
				<div class="span12">
					<div class="row-fluid">
						<div class="span3 tab-accountk2 tab-acc">
							<div class="navbar-acc">
								<ul class="nav nav6">
									<li><a class="" href="properti-pilihan.php">favorite properties <i class="icon-heart-empty" style="float:right; font-size:16px;"></i></a></li>
									<li><a class="" href="pencarian-tersimpan.php">saved searches <i class="icon-zoom-in" style="float:right; font-size:16px;"></i></a></li>
									<li><a class="active-acc" href="email-peringatan.php">Email Alerts <i class="icon-bell" style="float:right; font-size:16px;"></i></a></li>
								</ul>
							</div>
						</div>
						
						<div class="span9 tab-accountl tab-acc jrk">
							<div class="row-fluid jrk">
								<div class="span12 bg-ket-acc-dsb">									
									<div class="span5 bg-ket-acc-dsb-text">
										<div class="circle2"><div class="circle3"><p><i class="icon-bell-alt"></i></p></div></div>
										<h3>Email Peringatan</h3>
										<p>Anda dapat menggunakan email peringatan sebagai permintaan pencarian otomatis dari berbagai properti yang nantinya akan selalu update pada email anda.</p>
									</div>
									<div class="span7 bg-ket-acc-dsb-img">
										<img src="../../../assets/img/acc-img/img1.jpg">
									</div>
								</div>
							</div>
							
							<!----- form expired listing----->
							<form id="" class="">
								<ul class="nav nav-tabs smpn-pcrn">									
									<div class="controls-search controls-search2" style="height:5px;">
									</div>									
									<div class="controls-search">
										<font class="pull-left" style="margin:7px 0px 7px 5px; color:#03a0ef; font-size:16px; letter-spacing:0px;">
											Menampilkan<!--<font style="font-weight:bold; letter-spacing:0px;"> 1-10</font> 
											dari--><font style="color:#ffa200; font-weight:bold; letter-spacing:0px;"> 2</font> Email Peringatan
										</font>
									</div>
									<div class="" style="clear:both;"></div>
									<div id="" class="" style="margin:0px;">
										<table class="table table6 table-condensed table-bordered">
											<thead>
												<tr>
													<th class="title-table-credit">Your Email Alerts</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="">
														<!---- list-view ---->
														<div class="row-fluid"> 												
															<div class="span12 view-list">
																<div class="row-fluid">
																	<div class="span12 view-list-in">
																		<div class="row-fluid">																			
																			<div class="span12 bg-desc-agnt">
																				<div class="row-fluid">
																					<div class="span12 title-prop-list">
																						<p class="pull-left" style="color:#555;font-weight:bold;font-size:12px;">Kriteria Pencarian</p>
																						<p class="pull-right" style="color:#555;font-size:12px;">3 september 2013</p>
																						<div style="clear:both;"></div>
																						<p style="font-size:22px;line-height:normal;color:#0179b5;">
																							Disewa Ruko 
																							<br>daerah Kalimalang, Jakarta Timur 
																							<br>kisaran Rp700.000.000 s/d Rp1.300.000.000
																						</p>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row-fluid">
																		<div class="span12 bg-detail-list bg-detail-list2">
																			<p class="pull-left" style="margin:10px 0px 0px 15px;">Alert ID: #23423</p>
																			<a href="register.html" class="apus btn pull-right" style="margin-left:6px;"><i class="icon-remove-sign" style="color:#fc3e3e;"></i> Hapus</a>
																		</div>
																	</div>
																</div>														
															</div>
														</div> 
														<!---- /list-view ---->				
													</td>
												</tr>
												<tr>
													<td class="">
														<!---- list-view ---->
														<div class="row-fluid"> 												
															<div class="span12 view-list">
																<div class="row-fluid">
																	<div class="span12 view-list-in">
																		<div class="row-fluid">																			
																			<div class="span12 bg-desc-agnt">
																				<div class="row-fluid">
																					<div class="span12 title-prop-list">
																						<p class="pull-left" style="color:#555;font-weight:bold;font-size:12px;">Kriteria Pencarian</p>
																						<p class="pull-right" style="color:#555;font-size:12px;">10 maret 2013</p>
																						<div style="clear:both;"></div>
																						<p style="font-size:22px;line-height:normal;color:#0179b5;">
																							Disewa Ruko 
																							<br>daerah Kalimalang, Jakarta Timur 
																							<br>kisaran Rp700.000.000 s/d Rp1.300.000.000
																						</p>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row-fluid">
																		<div class="span12 bg-detail-list bg-detail-list2">
																			<p class="pull-left" style="margin:10px 0px 0px 15px;">Alert ID: #23423</p>
																			<a href="register.html" class="apus btn pull-right" style="margin-left:6px;"><i class="icon-remove-sign" style="color:#fc3e3e;"></i> Hapus</a>
																		</div>
																	</div>
																</div>														
															</div>
														</div> 
														<!---- /list-view ---->			
													</td>												
												</tr>
											</tbody>
										</table>
									</div>
									<div class="" style="clear:both;"></div>
									
									<div class="control-credits" style="">																	
										<a href="#EmailAlertModal" data-original-title="Help" data-toggle="modal" class="btn btn-primary pull-right" style="padding:7px 22px; margin:-5px 0px 12px 0px; font-size:16px; font-weight:bold; clear:both;"><i class="icon-envelope-alt"></i> BUAT EMAIL ALERT</a>										
									</div>
								</ul>
							</form>
						</div>
						
					</div>			
				</div>
			</div>
        </div>
		<!---- /Content ---->
        
		
		
        <!---- footer ---->
		<?php 
			include "../../../component/footer.php";
		?>			
		<!---- /footer ---->			
		
		<!---- login-modal ---->
		<?php 
			include "../../../component/login-modal.php";
		?>			
		<!---- /login-modal ---->

		<!---- emailalert-modal ---->
		<?php 
			include "../../../component/emailalert-modal.php";
		?>			
		<!---- /emailalert-modal ---->
		
    </body>
</html>