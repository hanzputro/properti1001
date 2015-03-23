<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.css"/>
        <!--<link type="text/css" rel="stylesheet" href="../assets/css/bootstrap-responsive.css"/>-->
        <link type="text/css" rel="stylesheet" href="../assets/css/font-awesome.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/style.css"/>
		
		<!-- JS -->		
		<script type="text/javascript" src="../assets/js/vendor/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="../assets/js/vendor/bootstrap.js"></script>
		<script type="text/javascript" src="../assets/js/bootstrap-paginator.js"></script>
		
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
										<li><p>WELCOME, GUEST</p></li>
										<li><a href="#">PROPERTI TERPILIH <span class="label label-warning" style="margin-left:2px;">3</span></a></li>
										<li><a href="#">PENCARIAN TERSIMPAN <span class="label label-warning" style="margin-left:2px;">0</span></a></li>
										<li><a href="#LoginModal" data-original-title="Help" data-toggle="modal">LOGIN</a></li>                                         
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
						<a href="../home.php"><div class="logo-properti1001"></div></a>
					</div>
					<div class="span7 offset2">
						<div class="iklan"><p>SPACE IKLAN</p></div>
					</div>
				</div>			
			</div>	
		</div>
		<div id="line-orange"></div><!---- /Header ---->
		
		
        <div id="wrap"><!---- Content ---->
			<p class="link-navigation-web"><a href="../home.php">Home</a> / <a href="kantor.php">Jual Kantor</a></p>
			<!-- #menu -->
            <div id="main-menu">
				<div class="navbar navbar-inverse navbar-static-top">
					<div class="navbar-inner navbar-inner2">
						<div class="container-fluid">				
							<ul class="nav nav2">
								<li><a class="active2" href="../home.php"><i class="icon-home"></i> Properti</a></li>
								<li><a href="#"><i class="icon-group"></i> Agent Properti</a></li> 
								<li><a href="#"><i class="icon-hospital"></i> Perumahan Terbaru</a></li>                                
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
			
			<div class="row-fluid">
				<div class="span12">
					<div class="row-fluid">				
						<div class="span9">
							<div class="row-fluid jrk">
								<div class="span12 img-srcbox">
									<div class="row-fluid">
										<!----- image ----->
										<div class="span6 img-bg-list">
											<p class="p-title-img-list">PENJUALAN <font class="" style="margin-left:130px;">KANTOR</font></p>
											<p class="p2-desc-img-list">Properti1001 menjual berbagai macam properti di semua rentang harga.</p>
											<img src="../assets/img/bg-prop/kantor.jpg" alt="" style="height:170px; width:100%; border-radius:4px 0px 0px 4px;"/>
										</div>
										<!----- /image ----->
										
										<!----- Searchbox ----->
										<div class="span6 searchbox-list">
														<form class=""><!----- form ----->
															<div class="control-group">
																<div class="controls">
																	<input class="span12" type="text" id="text2" placeholder="Cari Kota, Jalan, atau Nama Properti"/>
																</div>
																<div class="row-fluid">
																	<div class="span5">
																		<div class="controls">
																			<select data-placeholder="" class="span12 select-mini select2" tabindex="2">
																				<option selected>Semua Provinsi</option>
																				<option>Jawa Barat</option>
																				<option>Jawa Timur</option>
																				<option disabled>Sumatra</option>
																				<option disabled>Sulawesi</option>
																			</select>
																		</div>
																	</div>
																	<div class="span4">
																		<div class="controls">
																			<select data-placeholder="" class="span12 select-mini select2" tabindex="3">
																				<option selected>Semua Kota</option>
																				<option>Jakarta</option>
																				<option>Bekasi</option>
																				<option disabled>Bogor</option>
																				<option disabled>Depok</option>
																			</select>
																		</div>
																	</div>																
																	<div class="span3">
																		<div class="controls">
																			<select data-placeholder="" class="span12 select-mini select2" tabindex="4">
																				<option selected>Rumah</option>
																				<option>Apartement</option>
																				<option>Toko</option>
																				<option disabled>Tanah</option>
																			</select>
																		</div>
																	</div>
																</div>
																<div class="row-fluid">
																	<div class="span4">
																		<div class="controls">
																			<select data-placeholder="" class="span12 select-mini select2" tabindex="5">
																				<option selected>Harga Min</option>
																				<option>Rp 500.000.000,-</option>
																				<option>Rp 1.000.000.000,-</option>
																				<option disabled>Rp 1.500.000.000,-</option>
																			</select>
																		</div>
																	</div>
																	<div class="span1">
																		<p style="color:#fff; margin-top:5px; text-shadow: 0 1px 0px #000;">s/d</p>
																	</div>
																	<div class="span4">
																		<div class="controls">
																			<select data-placeholder="" class="span12 select-mini select2" tabindex="6">
																				<option selected>Harga Maks</option>
																				<option>Rp 500.000.000,-</option>
																				<option>Rp 1.000.000.000,-</option>
																				<option disabled>Rp 1.500.000.000,-</option>
																			</select>
																		</div>
																	</div>																	
																</div>
																<div class="row-fluid">
																	<div class="span12">
																		<div class="controls">
																			<button class="btn btn-warning btn-warning-large2" type="button" style="font-size:14px;"><i class="icon-search"></i> Cari Properti</button>
																		</div>
																	</div>
																</div>
															</div>
														</form><!----- /form ----->														
										</div>
										<!----- /Searchbox ----->									
									</div>  
								</div>
							</div>
							
							<div class="row-fluid jrk">	
								<div class="span12">
									<div class="tabbable tab-contprop2">
										<!----- Urut berdasarkan ----->
										<ul class="nav nav-tabs smpn-pcrn">											
											<div class="controls-search controls-search2">
												<font class="pull-left" style="margin:5px 5px 0px 0px; color:#fff; font-size:14px;">Urut Berdasarkan: </font>
												<select data-placeholder="" class="span4 select2" tabindex="9">
													<option selected>Properti Terbaru</option>
													<option>Harga Terendah</option>
													<option>Harga Tertinggi</option>
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
													Menampilkan<font style="font-weight:bold; letter-spacing:0px;"> 1-10</font> 
													dari<font style="font-weight:bold; letter-spacing:0px;"> 1430</font> Properti
												</font>
												<a class="pull-right">Simpan Pencarian <i class="icon-plus-sign"></i></a>
											</div>											
										</ul>
										<!----- /Urut berdasarkan ----->
										
										<div class="tab-content tab-content-bg">												
											<div class="row-fluid"> 
													
													<!---- list-view ---->
													<div class="row-fluid"> 												
														<div class="span12 view-list">
															<div class="row-fluid">
																<div class="span12 view-list-in">
																	<div class="row-fluid">
																		<div class="span4">
																			<div class="row-fluid">
																				<div class="span12 bg-premium-list">
																					<font><i class="icon-tags" style="color:#ffd800;"></i> Kantor</font>
																					<font><i class="icon-star" style="color:#ffd800;"></i> Listing Premium</font>
																				</div>
																			</div>
																			<div class="row-fluid">
																				<div class="span12 bg-img-list">
																					<a href="#"><img src="../assets/img/slide1.jpg" alt="" style="height:120px;"/></a>
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
																									<font class="desc-icon-list pull-left" style="">3<img src="../assets/img/bed.png" Title="3 Tempat Tidur" style="width:40px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="../assets/img/shower.png" Title="1 Kamar Mandi" style="width:40px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="../assets/img/garage.png" Title="1 Garasi" style="width:40px;"/></font>
																									<font class="desc-icon-list pull-left" style="">300<img src="../assets/img/m2.png" Title="Luas Tanah 300 m2" style="width:40px;"/></font>
																									<div class="" style="clear:both;"></div>
																								</div>
																							</div>
																						</div>
																						
																						<div class="span4 desc-agnt-list">
																							<a href="#"><img src="../assets/img/agent-logo.png" alt="" style="width:110px; height:34px;"/></a>
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
																	<div class="span12 bg-detail-list">																			
																	<a href="register.html" class="pull-right"><i class="icon-credit-card"></i> Lihat Detail</a>
																	<a href="register.html" class="pull-right"><i class="icon-save"></i> Simpan Properti</a>
																	</div>
																</div>
															</div>														
														</div>
													</div> 
													<!---- /list-view ---->			
													
													<!---- list-view ---->
													<div class="row-fluid"> 												
														<div class="span12 view-list">
															<div class="row-fluid">
																<div class="span12 view-list-in">
																	<div class="row-fluid">
																		<div class="span4">
																			<div class="row-fluid">
																				<div class="span12 bg-premium-list">
																					<font><i class="icon-tags" style="color:#ffd800;"></i> Kantor</font>
																					<!--<font><i class="icon-star" style="color:#ffd800;"></i> Listing Premium</font>-->
																				</div>
																			</div>
																			<div class="row-fluid">
																				<div class="span12 bg-img-list">
																					<a href="#"><img src="../assets/img/slide1.jpg" alt="" style="height:120px;"/></a>
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
																					<p class="">Rp 999.000.000 <font>(Nett)</font></p>
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
																								<td class="span4 isi-attr">Half Furnished</td>
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
																									<font class="desc-icon-list pull-left" style="">3<img src="../assets/img/bed.png" Title="3 Tempat Tidur" style="width:40px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="../assets/img/shower.png" Title="1 Kamar Mandi" style="width:40px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="../assets/img/garage.png" Title="1 Garasi" style="width:40px;"/></font>
																									<div class="" style="clear:both;"></div>
																								</div>
																							</div>
																						</div>
																						
																						<div class="span4 desc-agnt-list">
																							<a href="#"><img src="../assets/img/agent-logo.png" alt="" style="width:110px; height:34px;"/></a>
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
																	<div class="span12 bg-detail-list">																			
																	<a href="register.html" class="pull-right"><i class="icon-credit-card"></i> Lihat Detail</a>
																	<a href="register.html" class="pull-right"><i class="icon-save"></i> Simpan Properti</a>
																	</div>
																</div>
															</div>														
														</div>
													</div> 
													<!---- /list-view ---->			
											</div> 
										</div>
										<div class="pagination-1001-out">
											<div id="pagination-1001" class="pagination-1001"></div> <!---- pagination ---->
											<script type='text/javascript'>
												var options = {
													currentPage: 3,
													totalPages: 10,
													size:'small',
													alignment:'right',
													tooltipTitles: function (type, page, current) {
														switch (type) {
														case "first":
															return "Terawal";
														case "prev":
															return "Sebelumnya";
														case "next":
															return "Selanjutnya";
														case "last":
															return "Terakhir";
														case "page":
															return "Halaman " + page;
														}
													}
												}
												$('#pagination-1001').bootstrapPaginator(options);
											</script> <!---- /pagination ---->
										</div>
									</div>								
								</div>
							</div>
							
							<div class="row-fluid">				
								<div class="span12 jrk" >
									<div class="iklan"><p>SPACE IKLAN</p></div>
								</div>
							</div>
						</div>
						
						<!---- Sidebar ---->
						<?php 
							include "../component/sidebar.php";
						?>			
						<!---- /Sidebar ---->
					</div>  
				</div>
			</div>
        </div><!---- /Content ---->
        
		
		<!---- footer ---->
		<?php 
			include "../component/footer.php";
		?>			
		<!---- /footer ---->			
		
		<!---- login-modal ---->
		<?php 
			include "../component/login-modal.php";
		?>			
		<!---- /login-modal ---->			
		
    </body>
</html>