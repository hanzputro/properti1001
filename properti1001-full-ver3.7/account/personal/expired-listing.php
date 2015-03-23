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
			<p class="link-navigation-web"><a href="../../home.php">Home</a> / <a href="expired-listing.php">Expired Listing</a></p>
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
													<a class="active5" href="javascript:void(0)"><i class="icon-user-md"></i> PROFILE </a>
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
							<h3>Expired Listing</h3>
							<p><i>Listing anda yang sudah jatuh tempo akan tertampil pada halaman ini.</i></p>
							<hr style="margin:5px 0px 15px 0px">
							
							<!----- form expired listing----->
							<form id="" class="">
								<ul class="nav nav-tabs smpn-pcrn">											
									<div class="controls-search controls-search2">
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
									</div>
									<div class="controls-search">
										<font class="pull-left" style="margin:7px 0px 0px 5px; color:#03a0ef; font-size:16px; letter-spacing:0px;">
											Menampilkan<font style="color:#ffa200; font-weight:bold; letter-spacing:0px;"> 0</font> Expired Listing
										</font>
										<a class="pull-right" style="clear:both; margin:-20px 5px 7px 0px; padding:1px 15px; font-size:14px; border-radius:4px;">Search <i class="icon-search"></i></a>
									</div>
									<div class="" style="clear:both;"></div>
									<div id="" class="" style="margin:0px;">
										<table class="table table6 table-condensed table-bordered table-striped">
											<thead>
												<tr>
													<th class="title-table-credit">Your Expired Listing</th>
												</tr>
											</thead>
											<tbody>
												<!---- list-view ---->
												<!--
												<tr>
													<td class="">														
														<div class="row-fluid"> 												
															<div class="span12 view-list">
																<div class="row-fluid">
																	<div class="span12 view-list-in">
																		<div class="row-fluid">
																			<div class="span4">
																				<div class="row-fluid">
																					<div class="span12 bg-premium-list">
																						<font><i class="icon-tags" style="color:#ffd800;"></i> Apartemen</font>
																						<font><i class="icon-star" style="color:#ffd800;"></i> Listing Premium</font>
																					</div>
																				</div>
																				<div class="row-fluid">
																					<div class="span12 bg-img-list">
																						<a href="#"><img src="../../assets/img/slide1.jpg" alt="" style="height:120px;"/></a>
																					</div>
																				</div>
																				<div class="row-fluid">
																					<div class="span12 cmt-ahli">
																						<p class="p-cmt-ahli">
																							<i class="icon-quote-left" style="color:#0179b5;"></i> 
																								Lokasi strategis, 100m ada terminal busway, 50m ada taman bermain.
																							<i class="icon-quote-right" style="color:#0179b5;"></i>
																						</p>
																					</div>
																				</div>
																			</div>
																			
																			<div class="span8 bg-desc-agnt">
																				<div class="row-fluid">
																					<div class="span12 title-prop-list">
																						<a href="#" class=""><p>Rumah Tua Di Kebon Kacang Dijual...HITUNG TANAH SAJA...TERMURAH !!! PALING MURAH !!!</p></a>
																					</div>
																				</div>
																				<div class="row-fluid">
																					<div class="span12 price-prop-list">
																						<p class="">Rp 500.000.000 <font>(Nego)</font></p>
																					</div>
																				</div>	
																				<div class="row-fluid">
																					<div class="span12">
																						<table id="dataTable" class="table table-list table-bordered table-condensed">
																							<tbody>
																								<tr>
																									<td class="span2 attr">ID Listing :</td>
																									<td class="span4 isi-attr">AB04584</td>
																									<td class="span2 attr">Kondisi :</td>
																									<td class="span4 isi-attr">Fully Furnished</td>
																								</tr>
																								<tr>
																									<td class="span2 attr">Terdaftar :</td>
																									<td class="span4 isi-attr">31 Juli 2013</td>
																									<td class="span2 attr">Tanah :</td>
																									<td class="span4 isi-attr">300 m&sup2;</td>
																								</tr>
																								<tr>
																									<td class="span2 attr">Sertifikat :</td>
																									<td class="span4 isi-attr">-</td>
																									<td class="span2 attr">Bangunan :</td>
																									<td class="span4 isi-attr">400 m&sup2;</td>
																								</tr>
																								<tr>
																									<td class="span2 span2 attr">Alamat :</td>
																									<td class="span8 isi-attr" colspan="3">Duta Bumi, Bekasi, Jawa Barat</td>
																								</tr>
																							</tbody>
																						</table>				
																					</div>
																				</div>	
																				<div class="row-fluid">
																					<div class="span12 bg-icon-agn-desc">																					
																						<div class="row-fluid">
																							<div class="span8 all-desc">																					
																								<div class="row-fluid">
																									<div class="span12 desc-list">
																										<p>Fasilitas :</p>
																										<font class="desc-icon-list pull-left" style="">3<img src="../../assets/img/bed.png" Title="3 Tempat Tidur" style="width:40px;"/></font>
																										<font class="desc-icon-list pull-left" style="">1<img src="../../assets/img/shower.png" Title="1 Kamar Mandi" style="width:40px;"/></font>
																										<font class="desc-icon-list pull-left" style="">1<img src="../../assets/img/garage.png" Title="1 Garasi" style="width:40px;"/></font>
																										<font class="desc-icon-list pull-left" style="">300<img src="../../assets/img/m2.png" Title="Luas Tanah 300 m2" style="width:40px;"/></font>
																										<div class="" style="clear:both;"></div>
																									</div>
																								</div>
																							</div>
																							
																							<div class="span4 desc-agnt-list">
																								<a href="#"><img src="../../assets/img/agent-logo.png" alt="" style="width:110px; height:34px;"/></a>
																								<p class="" style="margin-bottom:5px;">Hanzputro</p>
																								<p class=""><i class="icon-phone-sign"></i> +62-087-567-345</p>
																								<p class=""><i class="icon-envelope-alt"></i> <a href="#">Hubungi Via Email</a></p>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row-fluid">
																		<div class="span12 bg-detail-list2">																			
																		<a href="register.html" class="apus btn pull-left" style="margin-left:6px;"><i class="icon-remove-sign" style="color:#fc3e3e;"></i> Hapus</a>
																		<a href="#PremiumListingModal" data-original-title="Help" data-toggle="modal" class="premium btn pull-right" style=""><i class="icon-star" style="color:#ffa200;"></i> Perpanjang Listing</a>
																		</div>
																	</div>
																</div>														
															</div>
														</div> 														
													</td>
												</tr>
												<!---- /list-view ---->
												
												<!---- list-view ---->
												<!--
												<tr>
													<td class="">
														<div class="row-fluid"> 												
															<div class="span12 view-list">
																<div class="row-fluid">
																	<div class="span12 view-list-in">
																		<div class="row-fluid">
																			<div class="span4">
																				<div class="row-fluid">
																					<div class="span12 bg-premium-list">
																						<font><i class="icon-tags" style="color:#ffd800;"></i> Apartemen</font>
																					</div>
																				</div>
																				<div class="row-fluid">
																					<div class="span12 bg-img-list">
																						<a href="#"><img src="../../assets/img/slide1.jpg" alt="" style="height:120px;"/></a>
																					</div>
																				</div>
																				<div class="row-fluid">
																					<div class="span12 cmt-ahli">
																						<p class="p-cmt-ahli">
																							<i class="icon-quote-left" style="color:#0179b5;"></i> 
																								Lokasi strategis, 100m ada terminal busway, 50m ada taman bermain.
																							<i class="icon-quote-right" style="color:#0179b5;"></i>
																						</p>
																					</div>
																				</div>
																			</div>
																			
																			<div class="span8 bg-desc-agnt">
																				<div class="row-fluid">
																					<div class="span12 title-prop-list">
																						<a href="#" class=""><p>Rumah Tua Di Kebon Kacang Dijual...HITUNG TANAH SAJA...TERMURAH !!! PALING MURAH !!!</p></a>
																					</div>
																				</div>
																				<div class="row-fluid">
																					<div class="span12 price-prop-list">
																						<p class="">Rp 500.000.000 <font>(Nego)</font></p>
																					</div>
																				</div>	
																				<div class="row-fluid">
																					<div class="span12">
																						<table id="dataTable" class="table table-list table-bordered table-condensed">
																							<tbody>
																								<tr>
																									<td class="span2 attr">ID Listing :</td>
																									<td class="span4 isi-attr">AB04584</td>
																									<td class="span2 attr">Kondisi :</td>
																									<td class="span4 isi-attr">Fully Furnished</td>
																								</tr>
																								<tr>
																									<td class="span2 attr">Terdaftar :</td>
																									<td class="span4 isi-attr">31 Juli 2013</td>
																									<td class="span2 attr">Tanah :</td>
																									<td class="span4 isi-attr">300 m&sup2;</td>
																								</tr>
																								<tr>
																									<td class="span2 attr">Sertifikat :</td>
																									<td class="span4 isi-attr">-</td>
																									<td class="span2 attr">Bangunan :</td>
																									<td class="span4 isi-attr">400 m&sup2;</td>
																								</tr>
																								<tr>
																									<td class="span2 span2 attr">Alamat :</td>
																									<td class="span8 isi-attr" colspan="3">Duta Bumi, Bekasi, Jawa Barat</td>
																								</tr>
																							</tbody>
																						</table>				
																					</div>
																				</div>	
																				<div class="row-fluid">
																					<div class="span12 bg-icon-agn-desc">																					
																						<div class="row-fluid">
																							<div class="span8 all-desc">																					
																								<div class="row-fluid">
																									<div class="span12 desc-list">
																										<p>Fasilitas :</p>
																										<font class="desc-icon-list pull-left" style="">3<img src="../../assets/img/bed.png" Title="3 Tempat Tidur" style="width:40px;"/></font>
																										<font class="desc-icon-list pull-left" style="">1<img src="../../assets/img/shower.png" Title="1 Kamar Mandi" style="width:40px;"/></font>
																										<font class="desc-icon-list pull-left" style="">1<img src="../../assets/img/garage.png" Title="1 Garasi" style="width:40px;"/></font>
																										<font class="desc-icon-list pull-left" style="">300<img src="../../assets/img/m2.png" Title="Luas Tanah 300 m2" style="width:40px;"/></font>
																										<div class="" style="clear:both;"></div>
																									</div>
																								</div>
																							</div>
																							
																							<div class="span4 desc-agnt-list">
																								<a href="#"><img src="../../assets/img/agent-logo.png" alt="" style="width:110px; height:34px;"/></a>
																								<p class="" style="margin-bottom:5px;">Hanzputro</p>
																								<p class=""><i class="icon-phone-sign"></i> +62-087-567-345</p>
																								<p class=""><i class="icon-envelope-alt"></i> <a href="#">Hubungi Via Email</a></p>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row-fluid">
																		<div class="span12 bg-detail-list2">																			
																		<a href="register.html" class="apus btn pull-left" style="margin-left:6px;"><i class="icon-remove-sign" style="color:#fc3e3e;"></i> Hapus</a>
																		<a href="#PremiumListingModal" data-original-title="Help" data-toggle="modal" class="premium btn pull-right" style=""><i class="icon-star" style="color:#ffa200;"></i> Perpanjang Listing</a>
																		</div>
																	</div>
																</div>														
															</div>
														</div> 		
													</td>												
												</tr>
												<!---- /list-view ---->
												
											</tbody>
										</table>
									</div>
									<div class="" style="clear:both;"></div>
								</ul>
							</form>
							<!----- /form expired listing ----->		
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