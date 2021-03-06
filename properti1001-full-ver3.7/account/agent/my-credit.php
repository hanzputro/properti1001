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
					<div class="span7 offset2">
						<div class="iklan"><p>SPACE IKLAN</p></div>
					</div>
				</div>			
			</div>	
		</div>
		<div id="line-orange"></div><!---- /Header ---->
		
		<!---- Content ---->
        <div id="wrap" style="">
			<p class="link-navigation-web"><a href="../../home.php">Home</a> / <a href="my-credit.php">My Credits</a></p>
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
													<a class="active5" href="javascript:void(0)"><i class="icon-briefcase"></i> AGENT ACCOUNT </a>
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
													<a class="" href="packages-listing.php"><i class="icon-folder-open-alt"></i> PACKAGE </a>
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
													<ul class="nav nav-track" style="padding-left:10%;">
														<hr style="position:absolute; border:1px dotted #d5d5d5; margin:21px 0px 0px 130px; width:55%; z-index:1;">
														<li><a class="active-track" href="my-credit.php"><div class="circle-track"><p><i class="icon-money"></i></p></div><br>1. My Credits</a></li>
														<li><a class="" href="my-credits/payment-info.php"><div class="circle-untrack"><p><i class="icon-briefcase"></i></p></div><br>2. Payment Credits</a></li>
														<li><a class="" href="my-credits/payment-verify.php"><div class="circle-untrack"><p><i class="icon-time"></i></p></div><br>3. Payment Status</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<hr style="margin:3px 0px 15px 0px">
							<h3>My Credits</h3>
							<p><i>Credits system adalah sistem deposit untuk melakukan pembayaran layanan yang ditawarkan di website properti1001.com ini yang nantinya 
							akan digunakan dalam pembelian seperti iklan real estate, pembuatan listing, memposting iklan dll. 
							Oleh karena itu, Anda harus membeli credits dan kemudian menggunakannya untuk melakukan pembayaran layanan ini.</i></p>
							<hr style="margin:5px 0px 5px 0px">							
							
							<p class="info-credits">Saat ini anda memiliki <font>0 Credits</font></p>
							<div class="alert alert-success">
								Apakah anda ingin membeli Credits? Silahkan melakukan pembelian Credits
								<a href="my-credits/payment-info.php" class="btn btn-warning" style="margin:-8px 0px -4px 5px;padding:2px 50px;"> Beli Disini <i class="icon-circle-arrow-right"></i></a>
								<a class="close" data-dismiss="alert" href="#">&#215;</a>
							</div>
							
							<!----- form catatan transaksi pembayaran ----->
							<hr style="margin:5px 0px 5px 0px">
							<h3 style="margin:0px 0px 5px 0px;color:#ffa200;">Catatan Transaksi Pembayaran</h3>
							<form>
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
									<div class="" style="clear:both;"></div>
									<div class="controls-search">
										<font class="pull-left" style="margin:5px 0px 0px 5px; color:#03a0ef; font-size:16px; letter-spacing:0px;">
											Menampilkan<font style="color:#ffa200; font-weight:bold; letter-spacing:0px;"> 0</font> Transaksi Pembayaran
										</font>
										<a class="pull-right" style="padding:1px 15px; font-size:14px; border-radius:4px;">Search <i class="icon-search"></i></a>
									</div>
								</ul>							
								<!----- /Urut berdasarkan ----->
								<div id="defaultTable" class="">
									<table class="table table6 table-condensed table-bordered table-striped">
										<thead>
											<tr>
												<th class="title-table-credit">Tanggal</th>
												<th class="title-table-credit">Rincian Pembayaran</th>
												<th class="title-table-credit">Jalur Pembayaran</th>
												<th class="title-table-credit">Harga Credits</th>											
												<th class="title-table-credit">Jumlah Credits</th>
												<th class="title-table-credit">Status</th>
											</tr>
										</thead>
										<tbody>
											<!--
											<tr>
												<td class="isi-table-credit">12/10/2013</td>
												<td class="isi-table-credit">Invoice</td>
												<td class="isi-table-credit">Cheque</td>
												<td class="isi-table-credit">Rp 200.000</td>
												<td class="isi-table-credit">20</td>
												<td class="isi-table-credit">Verified</td>
											</tr>
											<tr>
												<td class="isi-table-credit">12/10/2013</td>
												<td class="isi-table-credit">Invoice</td>
												<td class="isi-table-credit">Cheque</td>
												<td class="isi-table-credit">Rp 200.000</td>
												<td class="isi-table-credit">20</td>
												<td class="isi-table-credit">Verified</td>
											</tr>
											<tr>
												<td class="isi-table-credit">12/10/2013</td>
												<td class="isi-table-credit">Invoice</td>
												<td class="isi-table-credit">Cheque</td>
												<td class="isi-table-credit">Rp 200.000</td>
												<td class="isi-table-credit">20</td>
												<td class="isi-table-credit">Verified</td>
											</tr>
											-->
										</tbody>
									</table>
								</div>
							</form>
							<!----- /form catatan transaksi pembayaran ----->
							
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