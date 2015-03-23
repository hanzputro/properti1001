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
			<p class="link-navigation-web"><a href="../../../home.php">Home</a> / <a href="../packages-listing.php">Packages</a> / <a href="purchase-package.php">Purchase Packages</a></p>
			<!-- #menu -->
            <div id="main-menu">
				<div class="navbar navbar-inverse navbar-static-top">
					<div class="navbar-inner navbar-inner2">
						<div class="container-fluid">				
							<ul class="nav nav2">
								<li><a class="" href="../../../home.php"><i class="icon-home"></i> Properti</a></li>
								<li><a href="../../../list-agent.php"><i class="icon-group"></i> Agent Properti</a></li>                                
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
													<a class="" href="javascript:void(0)"><i class="icon-briefcase"></i> AGENT ACCOUNT </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="../my-account.php">Dashboard <i class="icon-coffee pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="../my-credit.php">My Credits <i class="icon-money pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="../change-pass.php">Change Password <i class="icon-exchange pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
												</li>
												<li>
													<a class="" href="javascript:void(0)"><i class="icon-user-md"></i> PROFILE </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="../view-profile.php">View Profile <i class="icon-eye-open pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="../edit-profile.php">Edit Profile <i class="icon-wrench pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
												</li>
												<li>
													<a class="active5" href="../packages-listing.php"><i class="icon-folder-open-alt"></i> PACKAGE </a>
													<!--
													<ul class="dropdown-nav5">
														<li><a class="pull-left" href="packages-listing.php">Packages <i class="icon-hdd pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="expired-listing.php">Expired Listing <i class="icon-ban-circle pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
													-->
												</li>
												<li>
													<a class="" href="javascript:void(0)"><i class="icon-folder-open-alt"></i> LISTING </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="../my-listing.php">My Listing <i class="icon-folder-open-alt pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="../newpost-listing.php">Post New Listing <i class="icon-certificate pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="../expired-listing.php">Expired Listing <i class="icon-ban-circle pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
												</li>
												<li>
													<a class="" href="javascript:void(0)"><i class="icon-magic"></i> TOOLS </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="../properti-pilihan.php">favorite properties <i class="icon-heart-empty pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="../inbox.php">Inbox <i class="icon-comment pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="../inbox.php">CS &amp; Agent / Personal <i class="icon-comments pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
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
							<div class="row-fluid">
								<div class="span12 main-account-menu-acc">
									<div id="">
										<div class="navbar navbar-inverse navbar-static-top">
											<div class="navbar-inner navbar-inner2">
												<div class="container-fluid">
													<ul class="nav nav-track" style="padding-left:50px;">														
														<hr style="position:absolute; border:1px dotted #d5d5d5; margin:21px 0px 0px 80px; width:65%; z-index:1;">
														<li><a class="" href="../packages-listing.php"><div class="circle-untrack"><p><i class="icon-hdd"></i></p></div><br>1. My Packages</a></li>
														<li><a class="active-track" href="purchase-package.php"><div class="circle-track"><p><i class="icon-tasks"></i></p></div><br>2. Purchase Packages</a></li>
														<li><a class="" href="javascript:void(0)" style="cursor:default; color:#d5d5d5; background:#fff;"><div class="circle-untrack"><p><i class="icon-ok"></i></p></div><br>3. Done</a></li>														
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<hr style="margin:3px 0px 15px 0px">
							<h3>Paket</h3>
							<p><i>Anda harus memilik paket untuk membuat listing, premium listing, dll. Pilih paket sesuai kebutuhan anda dan apabila anda memiliki banyak paket, seluruh paket anda akan dijumlahkan.</i></p>
							<hr style="margin:5px 0px 15px 0px">							
							<p class="info-credits">Saat ini anda memiliki <font>1000 Credits</font></p>
							<p style="font-size:13px; color:#777;"><i>Apakah anda ingin <b>membeli Credits? <a href="../../my-account/my-credits/payment-info.php">Ya, Lanjutkan <i class="icon-double-angle-right"></i></a></i></b></p>
							<hr style="margin:5px 0px 15px 0px">
							<!----- form Paket yang tersedia ----->
							<h3 style="margin:0px 0px 5px 0px;">Paket Yang Tersedia</h3>
							<form id="" class="">
								<ul class="nav nav-tabs smpn-pcrn">											
									<div class="controls-search controls-search2" style="height:2px;">
									</div>
									<div id="" class="" style="margin:0px;">
										<table class="table table6 table-condensed table-bordered table-striped">
											<thead>
												<tr>
													<th class="title-table-credit">Pilihan</th>
													<th class="title-table-credit">Banyak Listing</th>
													<th class="title-table-credit">Banyak Premium Listing</th>
													<th class="title-table-credit">Masa Berlaku Penampilan Listing</th>													
													<th class="title-table-credit">Harga Paket</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="isi-table-credit"><input class="uniform" name="optionsRadios" style="margin-top:-2px;" type="radio" value="option1"></td>
													<td class="isi-table-credit">50</td>
													<td class="isi-table-credit">7</td>
													<td class="isi-table-credit">90 Hari</td>
													<td class="isi-table-credit">100 Credits</td>
												</tr>
												<tr>
													<td class="isi-table-credit"><input class="uniform" name="optionsRadios" style="margin-top:-2px;" type="radio" value="option2"></td>
													<td class="isi-table-credit">50</td>
													<td class="isi-table-credit">7</td>
													<td class="isi-table-credit">90 Hari</td>
													<td class="isi-table-credit">100 Credits</td>										
												</tr>
												<tr>
													<td class="isi-table-credit"><input class="uniform" name="optionsRadios" style="margin-top:-2px;" type="radio" value="option3"></td>
													<td class="isi-table-credit">50</td>
													<td class="isi-table-credit">7</td>
													<td class="isi-table-credit">90 Hari</td>
													<td class="isi-table-credit">100 Credits</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="" style="clear:both;"></div>
									<div class="control-credits" style="">
										<!--
										<p class="info-cre pull-left" style=""><i>*Harga untuk 1 Credits: <font class="" style="color:#ffa200;">Rp 10.000</font></i></p>
										<p class="info-cre pull-left" style=""><i>*Minimum Credits yang bisa dibeli: <font class="" style="color:#ffa200;">1</font></i></p>
										<p class="info-cre pull-left" style=""><i>*Maksimum Credits yang bisa dibeli: <font class="" style="color:#ffa200;">1000</font></i></p>
										-->
										<input type="submit" value="BELI" class="btn btn-primary pull-right" style="padding:7px 22px; margin:-5px 0px 12px 0px; font-size:16px; font-weight:bold; clear:both;">										
									</div>									
								</ul>
							</form>
							<!----- /form paket yang tersedia ----->								
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
		
    </body>
</html>