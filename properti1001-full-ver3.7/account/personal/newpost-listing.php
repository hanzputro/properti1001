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
					<div class="span7 offset2">
						<div class="iklan"><p>SPACE IKLAN</p></div>
					</div>
				</div>			
			</div>	
		</div>
		<div id="line-orange"></div><!---- /Header ---->
		
		<!---- Content ---->
        <div id="wrap" style="">
			<p class="link-navigation-web"><a href="../../home.php">Home</a> / <a href="newpost-listing.php">Post New Listing</a></p>
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
													<a class="" href="javascript:void(0)"><i class="icon-briefcase"></i> PERSONAL ACCOUNT </a>
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
													<a class="active5" href="javascript:void(0)"><i class="icon-folder-open-alt"></i> LISTING </a>
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
							<div class="row-fluid">
								<div class="span12 main-account-menu-acc">
									<div id="">
										<div class="navbar navbar-inverse navbar-static-top">
											<div class="navbar-inner navbar-inner2">
												<div class="container-fluid">
													<ul class="nav nav-track" style="padding-left:50px;">														
														<hr style="position:absolute; border:1px dotted #d5d5d5; margin:21px 0px 0px 130px; width:65%; z-index:1;">
														<li><a class="active-track" href="newpost-listing.php"><div class="circle-track"><p><i class="icon-hdd"></i></p></div><br>1. Choose Packages</a></li>
														<li><a class="" href="javascript:void(0)" style="cursor:default; color:#aaa; background:#fff;"><div class="circle-untrack"><p><i class="icon-facetime-video"></i></p></div><br>2. Details Posting</a></li>
														<li><a class="" href="newpost/done-posting.php" style="color:#aaa; background:#fff;"><div class="circle-untrack"><p><i class="icon-ok"></i></p></div><br>3. Status Posting</a></li>														
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<hr style="margin:3px 0px 15px 0px">
							<h3>Pilihan Paket</h3>
							<p><i>Anda harus memiliki paket untuk membuat listing. Pilihlah paket sesuai keinginan anda.</i></p>
							<hr style="margin:5px 0px 15px 0px">
							
							
							<!---- form pilih packages ---->
							<form id="" class="" action="newpost/detail-posting.php">
								<ul class="nav nav-tabs smpn-pcrn">											
									<div class="controls-search controls-search2" style="height:20px;">
										<p style="color:#fff;"><i>Untuk membuat listing baru, silahkan pilih paket yang anda inginkan.</i></p>
									</div>
									<div id="" class="" style="margin:0px;">
										<table class="table table6 table-condensed table-bordered table-striped">
											<thead>
												<tr>
													<th class="title-table-credit">Pilihan</th>
													<th class="title-table-credit">Banyak Listing</th>
													<th class="title-table-credit">Masa Berlaku Penampilan Listing</th>													
													<th class="title-table-credit">Harga</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="isi-table-credit"><input class="uniform" name="optionsRadios" style="margin-top:-2px;" type="radio" value="option1"></td>
													<td class="isi-table-credit">5</td>
													<td class="isi-table-credit">30 Hari / listing</td>
													<td class="isi-table-credit fprice-personal">GRATIS MASA PROMO</td>
												</tr>
												<!--
												<tr>
													<td class="isi-table-credit"><input class="uniform" name="optionsRadios" style="margin-top:-2px;" type="radio" value="option1"></td>
													<td class="isi-table-credit">1</td>
													<td class="isi-table-credit">30 Hari</td>
													<td class="isi-table-credit fprice-personal">Rp 100.000</td>
												</tr>
												<tr>
													<td class="isi-table-credit"><input class="uniform" name="optionsRadios" style="margin-top:-2px;" type="radio" value="option2"></td>
													<td class="isi-table-credit">1</td>
													<td class="isi-table-credit">90 Hari</td>
													<td class="isi-table-credit fprice-personal">Rp 200.000</td>										
												</tr>
												<tr>
													<td class="isi-table-credit"><input class="uniform" name="optionsRadios" style="margin-top:-2px;" type="radio" value="option3"></td>
													<td class="isi-table-credit">1</td>
													<td class="isi-table-credit">120 Hari</td>
													<td class="isi-table-credit fprice-personal">Rp 300.000</td>
												</tr>
												-->
											</tbody>
										</table>
									</div>
									<div class="" style="clear:both;"></div>
									<div class="control-credits" style="">
										<p class="info-cre pull-left" style=""><i>*Masa paket promo berlaku hingga <font class="" style="">2 bulan dari masa launching website.</font></i></p>
										<input type="submit" value="LANJUTKAN" class="btn btn-primary pull-right" style="padding:7px 22px; margin:-18px 0px 12px 0px; font-size:16px; font-weight:bold; clear:both;">
									</div>									
								</ul>
							</form>
							<!---- /form pilih packages ---->
							
							<!----- form pembelian credits ----->
							<h3 style="margin:0px 0px 5px 0px;color:#ffa200;">Status Postingan Terverifikasi</h3>
							<form id="" class="">
								<ul class="nav nav-tabs smpn-pcrn">											
									<div class="controls-search controls-search2">
										<font class="pull-left" style="margin:5px 5px 0px 0px; color:#fff; font-size:14px;">Pencarian Pada: </font>
										<select data-placeholder="" class="span4 select2" tabindex="9">
											<option selected>Tanggal Terbaru</option>
											<option>Tanggal Terlama</option>
											<option>Credits Terbanyak</option>
											<option>Credits Terkecil</option>
											<option>Pembayaran Tertinggi</option>
											<option>Pembayaran Terendah</option>
										</select>
										<select data-placeholder="" class="span2 select2 pull-right" tabindex="10" style="width:55px;">
											<option selected>10</option>
											<option>20</option>
											<option>30</option>
										</select>
										<font class="pull-right" style="margin:5px 5px 0px 5px; color:#fff; font-size:14px;">Tampilan Per Halaman: </font>
									</div>
									<div class="controls-search">
										<font class="pull-left" style="margin:7px 0px 0px 5px; color:#03a0ef; font-size:16px; letter-spacing:0px;">
											Menampilkan<!--<font style="font-weight:bold; letter-spacing:0px;"> 1-10</font> 
											dari--><font style="color:#ffa200; font-weight:bold; letter-spacing:0px;"> 3</font> Postingan Terverifikasi
										</font>
										<a class="pull-right" style="clear:both; margin:-20px 5px 7px 0px; padding:1px 15px; font-size:14px; border-radius:4px;">Search <i class="icon-search"></i></a>
									</div>
									<div class="" style="clear:both;"></div>
									<div id="" class="" style="margin:0px;">
										<table class="table table6 table-condensed table-bordered table-striped">
											<thead>
												<tr>
													<th class="title-table-credit">Tanggal</th>
													<th class="title-table-credit">Harga</th>
													<th class="title-table-credit">Jalur Pembayaran</th>
													<th class="title-table-credit">Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="isi-table-credit">12/10/2013</td>
													<td class="isi-table-credit">GRATIS MASA PROMO</td>
													<td class="isi-table-credit">Cheque</td>
													<td class="isi-table-credit">Verified</td>
												</tr>
												<tr>
													<td class="isi-table-credit">12/10/2013</td>
													<td class="isi-table-credit">Rp 200.000</td>
													<td class="isi-table-credit">Cheque</td>
													<td class="isi-table-credit">Verified</td>													
												</tr>
												<tr>
													<td class="isi-table-credit">12/10/2013</td>
													<td class="isi-table-credit">Rp 100.000</td>
													<td class="isi-table-credit">Cheque</td>
													<td class="isi-table-credit">Verified</td>
												</tr>
											</tbody>
										</table>										
									</div>																
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
		
    </body>
</html>