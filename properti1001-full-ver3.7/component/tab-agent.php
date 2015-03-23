				<!---- tab properti terbaru ---->
							<div class="row-fluid" style="background:#fff;border-top:4px solid #ffa200;margin:-15px 0px 0px 0px; padding:11px 0px 0px 0px;">	
								<div class="span9" style="margin: -45px 0px 5px 0px;"><!---- span12 in ---->
									<div class="tabbable tab-contprop3">
										<ul class="nav nav-tabs">
											<li class="active"><a href="#pane1" data-toggle="tab">Info Agent</a></li>
											<li><a href="#pane2" data-toggle="tab">Listing Dijual & Disewa</a></li>
										</ul>
										<div class="tab-content tab-content-bg">
										
											<!---- tab 1 ---->
											<div id="pane1" class="tab-pane tab-pane3 active">													
													<!---- detail-desc-properti ---->
													<?php 
														include "component/detail-desc-agent.php";
													?>			
													<!---- /detail-desc-properti ---->
													
													<!---- detail-desc-properti ---->
													<?php 
														include "component/hubungi-agent2.php";
													?>			
													<!---- /detail-desc-properti ---->
											</div>											
											<!---- /tab 1 ---->
											
											<!---- tab 2 ---->
											<div id="pane2" class="tab-pane" style="border:none;">
												<!---- listing dijual & disewa ---->
													<div class="row-fluid jrk">	
														<div class="span12" style="">
															<div class="row-fluid jrk">	
																<div class="span12" style="padding:7px 10px 0px 10px;">
																	<div class="tabbable tab-contprop2" >
																		<!----- Urut berdasarkan ----->
																		<ul class="nav nav-tabs smpn-pcrn drop-shadow curved curved-vt-2" style="margin-bottom:5px;border-top:none;">											
																			<div class="controls-search controls-search2">
																				<font class="pull-left" style="margin:5px 5px 0px 0px; color:#fff; font-size:14px;">Urut Berdasarkan: </font>
																				<select data-placeholder="" class="span3 select2" tabindex="9">
																					<option selected>Dijual & Disewa</option>
																					<option>Dijual</option>
																					<option>Disewa</option>
																				</select>
																				<select data-placeholder="" class="span3 select2" tabindex="9">
																					<option selected>Semua Properti</option>
																					<option>Rumah</option>
																					<option>Apartemen</option>
																					<option>Tanah</option>
																					<option>Kantor</option>
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
																				<font class="pull-left" style="margin:2px 0px 5px 5px; color:#03a0ef; font-size:16px; letter-spacing:0px;">
																					Menampilkan<font style="font-weight:bold; letter-spacing:0px;"> 1-10</font> 
																					dari<font style="font-weight:bold; letter-spacing:0px;"> 1430</font> Properti
																				</font>
																				<!--
																				<a class="pull-right">Simpan Pencarian <i class="icon-zoom-in" style="color:#ffd800;"></i></a>
																				<a href="#EmailAlertModal" data-original-title="Help" data-toggle="modal" class="pull-right">Email Alert <i class="icon-envelope-alt" style="color:#ffd800;"></i></a>
																				-->
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
																					<font><i class="icon-tags" style="color:#ffd800;"></i> Rumah</font>
																					<font><i class="icon-star" style="color:#ffd800;"></i> Listing Premium</font>
																				</div>
																			</div>
																			<div class="row-fluid">
																				<div class="span12 bg-img-list">
																					<a href="#"><img src="assets/img/slide1.jpg" alt="" style="height:120px;"/></a>
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
																					<p class="">Rp 500.000.000 <font></font></p>
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
																									<font class="desc-icon-list pull-left" style="">3<img src="assets/img/bed.png" Title="3 Tempat Tidur" style="width:40px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/shower.png" Title="1 Kamar Mandi" style="width:40px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/garage.png" Title="1 Garasi" style="width:40px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/maid.png" Title="1 Kamar Pembantu" style="width:25px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style=""><img src="assets/img/bu.png" Title="Butuh Uang" style="width:25px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/kitchen.png" Title="1 Dapur" style="width:40px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/dining2.png" Title="1 Ruang Makan" style="width:40px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/dining.png" Title="1 Ruang Makan" style="width:40px;height:27px;margin-right:-5px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/living.png" Title="1 Ruang Tamu" style="width:40px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/living2.png" Title="1 Ruang Tamu" style="width:40px;height:27px;"/></font>
																									<div class="" style="clear:both;"></div>
																								</div>
																							</div>
																						</div>
																						
																						<div class="span4 desc-agnt-list">
																							<a href="#"><img src="assets/img/agent-logo.png" alt="" style="width:110px; height:34px;"/></a>
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
																					<font><i class="icon-tags" style="color:#ffd800;"></i> Ruko</font>
																					<!--<font><i class="icon-star" style="color:#ffd800;"></i> Listing Premium</font>-->
																				</div>
																			</div>
																			<div class="row-fluid">
																				<div class="span12 bg-img-list">
																					<a href="#"><img src="assets/img/slide1.jpg" alt="" style="height:120px;"/></a>
																				</div>
																			</div>
																			<div class="row-fluid">
																				<div class="span12 cmt-ahli">
																					<p class="p-cmt-ahli">
																						<i class="icon-quote-left" style="color:#0179b5;"></i> 
																							Lokasi strategis.
																						<i class="icon-quote-right" style="color:#0179b5;"></i>
																					</p>
																				</div>
																			</div>
																		</div>
																		
																		<div class="span8 bg-desc-agnt">
																			<div class="row-fluid">
																				<div class="span12 title-prop-list">
																					<a href="#" class=""><p>Rumah Dijual Di Perumahan Elite</p></a>
																				</div>
																			</div>
																			<div class="row-fluid">
																				<div class="span12 price-prop-list">
																					<p class="">Rp 1.000.000.000 <font></font></p>
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
																									<font class="desc-icon-list pull-left" style="">3<img src="assets/img/bed.png" Title="3 Tempat Tidur" style="width:40px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/shower.png" Title="1 Kamar Mandi" style="width:40px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/garage.png" Title="1 Garasi" style="width:40px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/maid.png" Title="1 Kamar Pembantu" style="width:25px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style=""><img src="assets/img/bu.png" Title="Butuh Uang" style="width:25px;height:27px;"/></font>
																									<!--
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/kitchen.png" Title="1 Dapur" style="width:40px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/dining2.png" Title="1 Ruang Makan" style="width:40px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/dining.png" Title="1 Ruang Makan" style="width:40px;height:27px;margin-right:-5px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/living.png" Title="1 Ruang Tamu" style="width:40px;height:27px;"/></font>
																									-->
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/living2.png" Title="1 Ruang Tamu" style="width:40px;height:27px;"/></font>
																									<div class="" style="clear:both;"></div>
																								</div>
																							</div>
																						</div>
																						
																						<div class="span4 desc-agnt-list">
																							<a href="#"><img src="assets/img/agent-logo.png" alt="" style="width:110px; height:34px;"/></a>
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
																					<font><i class="icon-tags" style="color:#ffd800;"></i> Apartement</font>
																					<!--<font><i class="icon-star" style="color:#ffd800;"></i> Listing Premium</font>-->
																				</div>
																			</div>
																			<div class="row-fluid">
																				<div class="span12 bg-img-list">
																					<a href="#"><img src="assets/img/slide1.jpg" alt="" style="height:120px;"/></a>
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
																									<font class="desc-icon-list pull-left" style="">3<img src="assets/img/bed.png" Title="3 Tempat Tidur" style="width:40px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/shower.png" Title="1 Kamar Mandi" style="width:40px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/garage.png" Title="1 Garasi" style="width:40px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/maid.png" Title="1 Kamar Pembantu" style="width:25px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style=""><img src="assets/img/bu.png" Title="Butuh Uang" style="width:25px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/kitchen.png" Title="1 Dapur" style="width:40px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/dining2.png" Title="1 Ruang Makan" style="width:40px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/dining.png" Title="1 Ruang Makan" style="width:40px;height:27px;margin-right:-5px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/living.png" Title="1 Ruang Tamu" style="width:40px;height:27px;"/></font>
																									<font class="desc-icon-list pull-left" style="">1<img src="assets/img/living2.png" Title="1 Ruang Tamu" style="width:40px;height:27px;"/></font>
																									<div class="" style="clear:both;"></div>
																								</div>
																							</div>
																						</div>
																						
																						<div class="span4 desc-agnt-list">
																							<a href="#"><img src="assets/img/agent-logo.png" alt="" style="width:110px; height:34px;"/></a>
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
														</div>
													</div>
													<!---- /listing dijual & disewa ---->
											</div>
											<!---- /tab 2 ---->
										</div><!-- /.tab-content -->
									</div><!-- /.tabbable -->
								</div><!---- /span12 in ---->
								
								<!---- Sidebar ---->
								<?php 
									include "component/sidebar.php";
								?>			
								<!---- /Sidebar ---->
							</div>	
							<!---- /tab properti terbaru ---->