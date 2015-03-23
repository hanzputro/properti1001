			<div class="row-fluid">
				<div class="span12 properti-box jrk"><!----- span12 propertibox ----->
					<div class="row-fluid">
					
						<div class="span9 body-tab-left"><!---- span9 ---->
							<div class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
								<ul class="nav nav-tabs">
									<li class="active"><a href="#tab1" data-toggle="tab">Cari properti<br><p class="tab-fbig">Di Jual</p></a></li>
									<li><a href="#tab2" data-toggle="tab">Cari properti<br><p class="tab-fbig">Di Sewa</p></a></li>
									<li><a href="#tab3" data-toggle="tab">Cari properti<br><p class="tab-fbig">Komersial</p></a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="tab1">
										<form class="form-jual" action="list-jual.html"><!----- form ----->
											<div class="control-group">
												<div class="controls">
													<input class="span12 input-large" type="text" id="text2" placeholder="Cari Kota, Jalan, atau Nama Properti"/>
												</div>
												<div class="row-fluid">
													<div class="span4">
														<label for="text2" class="control-label jrklabel">Provinsi</label>
														<div class="controls">
															<select data-placeholder="" class="span12 select2" tabindex="2">
																<option selected>Semua Provinsi</option>
																<option>Jawa Barat</option>
																<option>Jawa Timur</option>
																<option disabled>Sumatra</option>
																<option disabled>Sulawesi</option>
															</select>
														</div>
													</div>
													<div class="span4">
														<label for="text2" class="control-label jrklabel">Kota</label>
														<div class="controls">
															<select data-placeholder="" class="span12 select2" tabindex="3">
																<option selected>Semua Kota</option>
																<option>Jakarta</option>
																<option>Bekasi</option>
																<option disabled>Bogor</option>
																<option disabled>Depok</option>
															</select>
														</div>
													</div>
													<div class="span4">
														<label for="text2" class="control-label jrklabel">Tipe Properti</label>
														<div class="controls">
															<select data-placeholder="" class="span12 select2" tabindex="4">
																<option selected>Rumah</option>
																<option>Apartement</option>
																<option>Toko</option>
																<option disabled>Tanah</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span3">
														<label for="text2" class="control-label jrklabel">Harga</label>
														<div class="controls">
															<select data-placeholder="" class="span12 select2" tabindex="5">
																<option selected>Harga Min</option>
																<option>Rp 500.000.000,-</option>
																<option>Rp 1.000.000.000,-</option>
																<option disabled>Rp 1.500.000.000,-</option>
															</select>
														</div>
													</div>
													<div class="span3">
														<label for="text2" class="control-label jrklabel" style="height:20px;"></label>
														<div class="controls">
															<select data-placeholder="" class="span12 select2" tabindex="6">
																<option selected>Harga Maks</option>
																<option>Rp 500.000.000,-</option>
																<option>Rp 1.000.000.000,-</option>
																<option disabled>Rp 1.500.000.000,-</option>
															</select>
														</div>
													</div>
													<div class="span6">
														<div class="controls">
															<button type="submit" value="Submit Form" name="submit" class="btn btn-large btn-warning btn-warning-large2 pull-right" type="button" style="margin-top:5px;"><i class="icon-search"></i> Cari Properti</button>
														</div>
													</div>
												</div>
											</div>
										</form><!----- /form ----->
									</div>
									<div class="tab-pane" id="tab2">
										<form class="form-sewa" action="list-sewa.html"><!----- form ----->
											<div class="control-group">
												<div class="controls">
													<input class="span12 input-large" type="text" id="text2" placeholder="Cari Kota, Jalan, atau Nama Properti"/>
												</div>
												<div class="row-fluid">
													<div class="span4">
														<label for="text2" class="control-label jrklabel">Provinsi</label>
														<div class="controls">
															<select data-placeholder="" class="span12 select2" tabindex="2">
																<option selected>Semua Provinsi</option>
																<option>Jawa Barat</option>
																<option>Jawa Timur</option>
																<option disabled>Sumatra</option>
																<option disabled>Sulawesi</option>
															</select>
														</div>
													</div>
													<div class="span4">
														<label for="text2" class="control-label jrklabel">Kota</label>
														<div class="controls">
															<select data-placeholder="" class="span12 select2" tabindex="3">
																<option selected>Semua Kota</option>
																<option>Jakarta</option>
																<option>Bekasi</option>
																<option disabled>Bogor</option>
																<option disabled>Depok</option>
															</select>
														</div>
													</div>
													<div class="span4">
														<label for="text2" class="control-label jrklabel">Tipe Properti</label>
														<div class="controls">
															<select data-placeholder="" class="span12 select2" tabindex="4">
																<option selected>Rumah</option>
																<option>Apartement</option>
																<option>Toko</option>
																<option disabled>Tanah</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span3">
														<label for="text2" class="control-label jrklabel">Harga</label>
														<div class="controls">
															<select data-placeholder="" class="span12 select2" tabindex="5">
																<option selected>Harga Min</option>
																<option>Rp 500.000.000,-</option>
																<option>Rp 1.000.000.000,-</option>
																<option disabled>Rp 1.500.000.000,-</option>
															</select>
														</div>
													</div>
													<div class="span3">
														<label for="text2" class="control-label jrklabel" style="height:20px;"></label>
														<div class="controls">
															<select data-placeholder="" class="span12 select2" tabindex="6">
																<option selected>Harga Maks</option>
																<option>Rp 500.000.000,-</option>
																<option>Rp 1.000.000.000,-</option>
																<option disabled>Rp 1.500.000.000,-</option>
															</select>
														</div>
													</div>
													<div class="span6">
														<div class="controls">
															<button type="submit" value="Submit Form" name="submit" class="btn btn-large btn-warning btn-warning-large2 pull-right" type="button" style="margin-top:5px;"><i class="icon-search"></i> Cari Properti</button>
														</div>
													</div>
												</div>
											</div>
										</form><!----- /form ----->
									</div>
									<div class="tab-pane" id="tab3">
										<form class="form-komersial" action="list-komersial.html"><!----- form ----->
											<div class="control-group">
												<div class="controls">
													<input class="span12 input-large" type="text" id="text2" placeholder="Cari Kota, Jalan, atau Nama Properti"/>
												</div>
												<div class="row-fluid">
													<div class="span4">
														<label for="text2" class="control-label jrklabel">Provinsi</label>
														<div class="controls">
															<select data-placeholder="" class="span12 select2" tabindex="2">
																<option selected>Semua Provinsi</option>
																<option>Jawa Barat</option>
																<option>Jawa Timur</option>
																<option disabled>Sumatra</option>
																<option disabled>Sulawesi</option>
															</select>
														</div>
													</div>
													<div class="span4">
														<label for="text2" class="control-label jrklabel">Kota</label>
														<div class="controls">
															<select data-placeholder="" class="span12 select2" tabindex="3">
																<option selected>Semua Kota</option>
																<option>Jakarta</option>
																<option>Bekasi</option>
																<option disabled>Bogor</option>
																<option disabled>Depok</option>
															</select>
														</div>
													</div>
													<div class="span4">
														<label for="text2" class="control-label jrklabel">Tipe Properti</label>
														<div class="controls">
															<select data-placeholder="" class="span12 select2" tabindex="4">
																<option selected>Rumah</option>
																<option>Apartement</option>
																<option>Toko</option>
																<option disabled>Tanah</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span3">
														<label for="text2" class="control-label jrklabel">Harga</label>
														<div class="controls">
															<select data-placeholder="" class="span12 select2" tabindex="5">
																<option selected>Harga Min</option>
																<option>Rp 500.000.000,-</option>
																<option>Rp 1.000.000.000,-</option>
																<option disabled>Rp 1.500.000.000,-</option>
															</select>
														</div>
													</div>
													<div class="span3">
														<label for="text2" class="control-label jrklabel" style="height:20px;"></label>
														<div class="controls">
															<select data-placeholder="" class="span12 select2" tabindex="6">
																<option selected>Harga Maks</option>
																<option>Rp 500.000.000,-</option>
																<option>Rp 1.000.000.000,-</option>
																<option disabled>Rp 1.500.000.000,-</option>
															</select>
														</div>
													</div>
													<div class="span6">
														<div class="controls">
															<button type="submit" value="Submit Form" name="submit" class="btn btn-large btn-warning btn-warning-large2 pull-right" type="button" style="margin-top:5px;"><i class="icon-search"></i> Cari Properti</button>
														</div>
													</div>
												</div>
											</div>
										</form><!----- /form ----->
									</div>
								</div>
							</div>
						</div><!---- /span9 ---->
						
						<div class="span3 table-propview"><!---- span3 ---->
							<table class="table table2 table-bordered table-bordered2 responsive">
								<tbody>
									<tr>
										<td class="td1">Total Properti<br><p class="view">178.098</p></td>
									</tr>
									<tr>
										<td class="td1">Properti Terbaru /Bln<br><p class="view">183</p></td>
									</tr>
									<tr>
										<td class="td1">Properti Terjual /Bln<br><p class="view">69</p></td>
									</tr>
								</tbody>
							</table>
						</div><!---- /span3 ---->
					</div>  
				</div><!------- /span12 propertibox ------->
			</div>