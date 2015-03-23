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
			<p class="link-navigation-web"><a href="../../home.php">Home</a> &raquo; <a href="../my-account.php">My Agent Account</a> &raquo; <a href="pencarian-tersimpan.php">Saved Searches</a></p>
			<!-- #menu -->
            <div id="main-menu">
				<div class="navbar navbar-inverse navbar-static-top">
					<div class="navbar-inner navbar-inner2">
						<div class="container-fluid">				
							<ul class="nav nav2">
								<li><a class="" href="../../home.php"><i class="icon-home"></i>Properti</a></li>
								<li><a href="../../list-agent.php"><i class="icon-group"></i>Agent Properti</a></li>                                
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
						<div class="span9">
							<div id="main-account-menu">
								<div class="navbar navbar-inverse navbar-static-top">
									<!-- Menu Account -->
									<div class="navbar-inner">
										<div class="pull-left">				
											<ul class="nav nav5">
												<li>
													<a class="" href="javascript:void(0)"><i class="icon-briefcase"></i> AGENT ACCOUNT </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="my-account.php">Dashboard <i class="icon-coffee pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="my-credit.php">My Credits <i class="icon-money pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
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
														<li><a class="pull-left" href="packages-listing.php">Packages <i class="icon-hdd pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="newpost-listing.php">Post New Listing <i class="icon-certificate pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="expired-listing.php">Expired Listing <i class="icon-ban-circle pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
												</li>
												<li>
													<a class="active5" href="javascript:void(0)"><i class="icon-magic"></i> TOOLS </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="properti-pilihan.php">favorite properties <i class="icon-heart-empty pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="message.php">Message <i class="icon-comment pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="message.php">CS &amp; Agent / Personal <i class="icon-comments pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
												</li>
											</ul>
											<div style="clear:both;"></div>
										</div>										
										<div class="div-mycredits pull-right">
											<p>Saldo Credits : <font class="view-credits"> 100.000.000.000</font></p>											
											<p>Saldo Premium : <font class="view-credits"> 199.999.999.999</font></p>
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
							<div class="row-fluid jrk">
								<div class="span12 bg-ket-acc-dsb">									
									<div class="span5 bg-ket-acc-dsb-text">
										<div class="circle2"><div class="circle3"><p><i class="icon-zoom-in"></i></p></div></div>
										<h3>Pencarian Tersimpan</h3>
										<p>Anda dapat menyimpan pencarian dari berbagai properti yang anda inginkan.</p>
									</div>
									<div class="span7 bg-ket-acc-dsb-img">
										<img src="../../assets/img/acc-img/img3.jpg">
									</div>
								</div>
							</div>
							
							<!----- form expired listing----->
							<form id="" class="">
								<ul class="nav nav-tabs smpn-pcrn">									
									<div class="controls-search controls-search2" style="height:5px;">
										<!--
										<font class="pull-left" style="margin:5px 5px 0px 0px; color:#fff; font-size:14px;">Pencarian Pada: </font>
										<select data-placeholder="" class="span3 select2" tabindex="9">
											<option selected>Semua Properti</option>
											<option>Rumah</option>
											<option>Ruko</option>
											<option>Apartemen</option>
											<option>Tanah</option>
											<option>Gudang</option>
											<option>Kantor</option>
											<option>Gedung</option>
										</select>
										<select data-placeholder="" class="span3 select2" tabindex="9">
											<option selected>Tanggal Terbaru</option>
											<option>Tanggal Terlama</option>
										</select>
										<select data-placeholder="" class="span2 select2 pull-right" tabindex="10" style="width:55px;">
											<option selected>10</option>
											<option>20</option>
											<option>30</option>
										</select>
										<font class="pull-right" style="margin:5px 5px 0px 5px; color:#fff; font-size:14px;">Tampilan Per Halaman: </font>
										-->
									</div>									
									<div class="controls-search">
										<font class="pull-left" style="margin:7px 0px 7px 5px; color:#03a0ef; font-size:16px; letter-spacing:0px;">
											Menampilkan<!--<font style="font-weight:bold; letter-spacing:0px;"> 1-10</font> 
											dari--><font style="color:#ffa200; font-weight:bold; letter-spacing:0px;"> 2</font> Pencarian Tersimpan
										</font>
										<!--
										<a class="pull-right" style="clear:both; margin:-20px 5px 7px 0px; padding:1px 15px; font-size:14px; border-radius:4px;">Search <i class="icon-search"></i></a>
										-->
									</div>
									<div class="" style="clear:both;"></div>
									<div id="" class="" style="margin:0px;">
										<table class="table table6 table-condensed table-bordered">
											<thead>
												<tr>
													<th class="title-table-credit">Your saved searches</th>
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
																						<p class="pull-right" style="color:#555;font-size:12px;">10 maret 2013</p>
																						<div style="clear:both;"></div>
																						<a href="#" class=""><p style="font-size:22px;line-height:normal;">Disewa Ruko <br>daerah Kalimalang, Jakarta Timur <br>kisaran Rp700.000.000 s/d Rp1.300.000.000</p></a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row-fluid">
																		<div class="span12 bg-detail-list2">																			
																		<a href="register.html" class="detail btn btn-i pull-right" style=""><i class="icon-credit-card" style="color:#03a0ef;"></i> Lihat Detail</a>
																		<a href="register.html" class="apus btn pull-left" style="margin-left:6px;"><i class="icon-remove-sign" style="color:#fc3e3e;"></i> Hapus</a>
																		<a href="#EmailAlertModal" data-original-title="Help" data-toggle="modal" class="edit btn pull-left" style=""><i class="icon-envelope-alt" style="color:#ffa200;"></i> Buat Email Alert</a>
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
																						<a href="#" class=""><p style="font-size:22px;line-height:normal;">Disewa Ruko <br>daerah Kalimalang, Jakarta Timur <br>kisaran Rp700.000.000 s/d Rp1.300.000.000</p></a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row-fluid">
																		<div class="span12 bg-detail-list2">																			
																		<a href="register.html" class="detail btn btn-i pull-right" style=""><i class="icon-credit-card" style="color:#03a0ef;"></i> Lihat Detail</a>
																		<a href="register.html" class="apus btn pull-left" style="margin-left:6px;"><i class="icon-remove-sign" style="color:#fc3e3e;"></i> Hapus</a>
																		<a href="#EmailAlertModal" data-original-title="Help" data-toggle="modal" class="edit btn pull-left" style=""><i class="icon-envelope-alt" style="color:#ffa200;"></i> Buat Email Alert</a>
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
									<!--
									<div class="control-credits" style="">										
										<p class="info-cre pull-left" style=""><i>*Harga untuk 1 Credits: <font class="" style="color:#ffa200;">Rp 10.000</font></i></p>
										<p class="info-cre pull-left" style=""><i>*Minimum Credits yang bisa dibeli: <font class="" style="color:#ffa200;">1</font></i></p>
										<p class="info-cre pull-left" style=""><i>*Maksimum Credits yang bisa dibeli: <font class="" style="color:#ffa200;">1000</font></i></p>										
										<input type="submit" value="BATAL" class="btn btn-danger pull-right" style="padding:7px 22px; margin:-5px 0px 12px 0px; font-size:16px; font-weight:bold; clear:both;">										
									</div>
									-->
								</ul>
							</form>
							<!----- /form pembelian credits ----->		
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
		
		<!---- emailalert-modal ---->
		<?php 
			include "../../component/emailalert-modal.php";
		?>			
		<!---- /emailalert-modal ---->
    </body>
</html>