<?php
include_once 'template/header.php';
?>

<main class="main" role="main">
	<section class="full car_search_section">
		<div class="container">
			<div class="row">
				<!---->
				<div class="col-md-12">
					<ul class="breadcrumbs">
			            <li>
			                <a href="#">Ana səhifə</a>
			            </li>
			            <li>
			                <a href="#">Auto</a>
			            </li>
			            <li>
			                <a href="#">Avtomobil axtarış</a>
			            </li>
			        </ul>
				</div>

				
				<!---->

				<div class="col-md-12 page_heading add_item_heading">
					<h2>Elan yerləşdir</h2>
				</div>

				<div class="col-md-12 ">
					<div class="search_panel add_item_panel">
						<!---->
						<div class="col-md-12 main_filters add_item_main_filters">
                            <div class="row">
                                <a href="#" class="">
                                	<svg xmlns="http://www.w3.org/2000/svg" width="13.5" height="12" viewBox="0 0 13.5 12">
									    <path id="prefix__car-back" d="M5.25 9.5l.75-3h7.5l.75 3m.69-3.75A1.125 1.125 0 0013.875 5h-8.25a1.125 1.125 0 00-1.065.75L3 10.25v6a.75.75 0 00.75.75h.75a.75.75 0 00.75-.75v-1.5h9v1.5A.75.75 0 0015 17h.75a.75.75 0 00.75-.75v-6l-1.56-4.5M6 13.25H4.5v-1.5H6v1.5m9 0h-1.5v-1.5H15v1.5m-3.75 0h-3v-1.5h3z" transform="translate(-3 -5)" style="fill:#999"/>
									</svg>Auto
                                </a>
                                <a href="#">
                                	<svg xmlns="http://www.w3.org/2000/svg" width="20" height="13" viewBox="0 0 20 13">
									    <path id="prefix__motorbike" d="M17.42 10l-4.01-4H9v2h3.59l2 2H6.5a4.5 4.5 0 104.42 5.27L13.04 14a2.111 2.111 0 00-.04.5 4.5 4.5 0 104.5-4.5m-8.66 5.26a2.505 2.505 0 110-1.51H6v1.5l2.84.01M17.47 17a2.5 2.5 0 112.5-2.5 2.5 2.5 0 01-2.5 2.5z" transform="translate(-2 -6)" style="fill:#999"/>
									</svg>Moto
                                </a>
                                <a href="#" class="">
                                	<svg xmlns="http://www.w3.org/2000/svg" width="19.067" height="13" viewBox="0 0 19.067 13">
									    <path id="prefix__dump-truck" d="M17.467 7.6h-4.334v5.2H1.867v2.6h.867a2.6 2.6 0 005.2 0h5.2a2.6 2.6 0 005.2 0h1.733v-4.333l-2.6-3.467M5.333 16.7a1.3 1.3 0 111.3-1.3 1.3 1.3 0 01-1.3 1.3m10.4 0a1.3 1.3 0 111.3-1.3 1.3 1.3 0 01-1.3 1.3m-.867-5.633V8.9h2.167l1.7 2.167h-3.866m.867-4.333h-3.467v5.2H2.733L1.494 7.6H1V5.867h10.4L12.267 5h3.467z" transform="translate(-1 -5)" style="fill:#999"/>
									</svg>Kommersiya
                                </a>
                                <a href="#" class="active">
                                	<svg xmlns="http://www.w3.org/2000/svg" width="13.722" height="13" viewBox="0 0 13.722 13">
									    <path id="prefix__car-door" d="M14.556 10.944h-2.167v1.444h2.167v-1.444M16.722 16H3V8.778L8.778 3H16a.722.722 0 01.722.722V16M9.377 4.444L5.044 8.778h10.234V4.444z" transform="translate(-3 -3)" style="fill:#999"/>
									</svg>Ehtiyyat hissələri
                                </a>
                                
                            </div>
                        </div>
						<!---->
						<!-- elan yerlesdir car types -->
						<div class="col-md-12 add_card_type_links">
							<div class="row">
								<div class="col-lg-3 col-md-4 active">
									<a href="#e_hisse" >Ehtiyyat hissələri</a>
								</div>
								<div class="col-lg-3 col-md-4">
									<a href="#aksesuar">Aksesuarlar</a>
								</div>
								<div class="col-lg-3 col-md-4 ">
									<a href="#diskler">Disklər və təkərlər</a>
								</div>
								<div class="col-md-4 col-lg-3 ">
									<a href="#yararsiz">Yararsız avtomobillər</a>
								</div>
								
								
							</div>
						</div>

						<!-- elan yerlesdir car types end-->
						<!-- yungul kommersiya-->
						<div id="e_hisse" class="elan_yerlesdir_forms active">
                        <form class="full">
						
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Kommersiya</option>
												<option value="2">Moto</option>
											</select>
											<label class="animate_label">Nəqliyyatın növü</label>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
                                            <input type="text" class="form-control floating-input" name="" placeholder=" ">
                                            <label  class="animate_label">Məhsulun adı</label>
										</div>
                                    </div>
                                    
                                    <div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">cat1</option>
												<option value="2">cat2</option>
											</select>
											<label  class="animate_label">Kateqoriya</label>
										</div>
									</div>

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Baki</option>
												<option value="2">Gence</option>
											</select>
											<label  class="animate_label">Şəhər</label>
										</div>
                                    </div>
                                    
                                    <div class="col-md-4">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Hyundai</option>
												<option value="2">BMW</option>
											</select>
											<label class="animate_label">Marka</label>
										</div>
									</div>

									<div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Sonata</option>
												<option value="2">Elantra</option>
											</select>
											<label  class="animate_label">Model</label>
										</div>
									</div>

	                        		<div class="col-md-4 pl-0">
	                        			<div class="form-group">
		                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
		                        				<option value=""></option>
		                        				<option value="1">1996</option>
		                        				<option value="2">1997</option>
											</select>
											<label  class="animate_label">Buraxılış ili</label>
	                        			</div>
	                        		</div>

	                        		<div class="col-md-4">
	                        			<div class="form-group small_select small_select_right">
											<input type="text" class="form-control floating-input" name="" placeholder=" ">
											<label class="animate_label">Qiymet</label>
		                        			<select class="form-control">
		                        				<option>AZN</option>
		                        				<option>USD</option>
		                        				<option>EUR</option>
		                        			</select>
		                        		</div>
	                        		</div>

	                        		


	                        	</div>
                        	</div>
                        	<!---->
                        	
                          <!----> 
                          <div class="col-md-12 search_ea_title">
                            <div class="row">
                              <span>Detallar</span>
                            </div>
                          </div>
                          <!----> 
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-3 pl-0">
                                <div class="form-group">
                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">Kohne</option>
                        				<option value="2">Yeni</option>
									</select>
									<label  class="animate_label">Vəziyyəti</label>
                        		</div>
                              </div>
                              

                              <div class="col-md-3 pr-0">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">VIN kodu</label>
                        		</div>
                              </div>


                            </div>
                          </div>

                          <!----> 
 
						  <!----> 
							<div class="col-md-12 search_more_and_sug">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<h4 class="ey_desc_title">Əlavə məlumat</h4>
										</div>
									</div>
									
									<div class="col-md-12">
										<div class="row">
											<div class="form-group full">
												<textarea class="form-control ey_desc_area"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						  <!---->
						  <div class="col-md-12">
						  	<div class="row">
						  		<div class="col-md-12">
						  			<div class="row">
						  				<h4 class="ey_bottom_title">Şəkil əlavə et</h4>
						  			</div>
						  		</div>
						  		<div class="col-md-12">
						  			<div class="row">
						  				<div class="col-md-12">
						  					<div class="row">
								  				<div class="file_upload_box">
								  					<input type="file" name="" class="ey_image_upload">
								  				</div>
							  				</div>
						  				</div>

						  				<div class="col-md-12 image_upload_rules">
						  					<div class="row">
						  						<p>-  Maksimum 6 şəkil yüklənməsinə icazə verilir</p>
						  						<p>-  png, jpg, jpeg sonluqlu faylların yüklənməsinə icazə verilir</p>
						  						<p>-  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
						  					</div>
						  				</div>
						  			</div>
						  		</div>
						  	</div>
						  </div>
						  <!---->
						  <div class="col-md-12">
						  	<div class="row">
						  		<div class="col-md-12">
						  			<div class="row">
						  				<h4 class="ey_bottom_title">Əlaqə məlumatları</h4>
						  			</div>
						  		</div>
						  		
						  		<div class="col-md-4 pl-0">
                        			<div class="form-group">
										<input type="text" class="form-control floating-input" name="" placeholder=" ">
										<label  class="animate_label">Ad, Soyad</label>
                        			</div>
                        		</div>

                        		<div class="col-md-4">
                        			<div class="form-group small_select small_select_left">
										<input type="tel" class="form-control floating-input" name="" placeholder=" ">
										<label  class="animate_label">xxx xx xx</label>
	                        			<select class="form-control ">
	                        				<option>051</option>
	                        				<option>050</option>
	                        				<option>055</option>
										</select>
										
	                        		</div>
                        		</div>

                        		<div class="col-md-4 pr-0">
                        			<div class="form-group">
										<input type="email" class="form-control floating-input" name="" placeholder=" ">
										<label  class="animate_label">Email</label>
                        			</div>
                        		</div>

						  	</div>
						  </div>
						  <!---->
						  <div class="col-md-12 elanin_novu">
						  	<div class="row">
						  		<div class="col-md-12">
						  			<div class="row">
						  				<h4 class="ey_bottom_title">Elanın növü</h4>
						  			</div>
						  		</div>
						  		<div class="col-md-12 en_container">
						  			<div class="row">
						  				<div class="en_box en_box_free">
						  					<div class="col-md-12 en_box_title">
						  						<div class="row">
						  							<img src="assets/images/flag.svg">
						  							<h3>Pulsuz</h3>
						  							<ul>
						  								<li>
						  									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed </p>
						  								</li>
						  								<li>
						  									<p>Lorem ipsum dolor sit amet</p>
						  								</li>
						  							</ul>

						  							<span class="en_price">0 AZN</span>
						  							<button type="submit">Yerləşdir</button>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="en_box en_box_premium">
						  					<div class="col-md-12 en_box_title">
						  						<div class="row">
						  							<img src="assets/images/premium1.svg">
						  							<h3>Premium</h3>
						  							<ul>
						  								<li>
						  									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed </p>
						  								</li>
						  								<li>
						  									<p>Lorem ipsum dolor sit amet</p>
						  								</li>
						  							</ul>
						  							<span class="en_price">25 AZN</span>
						  							<button type="submit">Yerləşdir</button>
						  						</div>
						  					</div>
						  				</div>
						  			</div>
						  		</div>
						  		
						  	</div>
						  </div>
						  <!---->
						</form>
						</div>
						<!-- yungul kommersiya end--> 
						
						<!-- yuk masinlari-->
						<div id="aksesuar" class="elan_yerlesdir_forms ">
						<form class="full">
						
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Kommersiya</option>
												<option value="2">Moto</option>
											</select>
											<label class="animate_label">Nəqliyyatın növü</label>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
                                            <input type="text" class="form-control floating-input" name="" placeholder=" ">
                                            <label  class="animate_label">Məhsulun adı</label>
										</div>
                                    </div>
                                    
                                    <div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">cat1</option>
												<option value="2">cat2</option>
											</select>
											<label  class="animate_label">Kateqoriya</label>
										</div>
									</div>

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Baki</option>
												<option value="2">Gence</option>
											</select>
											<label  class="animate_label">Şəhər</label>
										</div>
                                    </div>
                                    
                                    <div class="col-md-4">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Hyundai</option>
												<option value="2">BMW</option>
											</select>
											<label class="animate_label">Marka</label>
										</div>
									</div>

									<div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Sonata</option>
												<option value="2">Elantra</option>
											</select>
											<label  class="animate_label">Model</label>
										</div>
									</div>

	                        		<div class="col-md-4 pl-0">
	                        			<div class="form-group">
		                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
		                        				<option value=""></option>
		                        				<option value="1">1996</option>
		                        				<option value="2">1997</option>
											</select>
											<label  class="animate_label">Buraxılış ili</label>
	                        			</div>
	                        		</div>

	                        		<div class="col-md-4">
	                        			<div class="form-group small_select small_select_right">
											<input type="text" class="form-control floating-input" name="" placeholder=" ">
											<label class="animate_label">Qiymet</label>
		                        			<select class="form-control">
		                        				<option>AZN</option>
		                        				<option>USD</option>
		                        				<option>EUR</option>
		                        			</select>
		                        		</div>
	                        		</div>

	                        		


	                        	</div>
                        	</div>
                        	<!---->
                        	
                          <!----> 
                          <div class="col-md-12 search_ea_title">
                            <div class="row">
                              <span>Detallar</span>
                            </div>
                          </div>
                          <!----> 
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-3 pl-0">
                                <div class="form-group">
                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">Kohne</option>
                        				<option value="2">Yeni</option>
									</select>
									<label  class="animate_label">Vəziyyəti</label>
                        		</div>
                              </div>
                              

                              <div class="col-md-3 pr-0">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">VIN kodu</label>
                        		</div>
                              </div>


                            </div>
                          </div>

                          <!----> 
 
						  <!----> 
							<div class="col-md-12 search_more_and_sug">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<h4 class="ey_desc_title">Əlavə məlumat</h4>
										</div>
									</div>
									
									<div class="col-md-12">
										<div class="row">
											<div class="form-group full">
												<textarea class="form-control ey_desc_area"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						  <!---->
						  <div class="col-md-12">
						  	<div class="row">
						  		<div class="col-md-12">
						  			<div class="row">
						  				<h4 class="ey_bottom_title">Şəkil əlavə et</h4>
						  			</div>
						  		</div>
						  		<div class="col-md-12">
						  			<div class="row">
						  				<div class="col-md-12">
						  					<div class="row">
								  				<div class="file_upload_box">
								  					<input type="file" name="" class="ey_image_upload">
								  				</div>
							  				</div>
						  				</div>

						  				<div class="col-md-12 image_upload_rules">
						  					<div class="row">
						  						<p>-  Maksimum 6 şəkil yüklənməsinə icazə verilir</p>
						  						<p>-  png, jpg, jpeg sonluqlu faylların yüklənməsinə icazə verilir</p>
						  						<p>-  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
						  					</div>
						  				</div>
						  			</div>
						  		</div>
						  	</div>
						  </div>
						  <!---->
						  <div class="col-md-12">
						  	<div class="row">
						  		<div class="col-md-12">
						  			<div class="row">
						  				<h4 class="ey_bottom_title">Əlaqə məlumatları</h4>
						  			</div>
						  		</div>
						  		
						  		<div class="col-md-4 pl-0">
                        			<div class="form-group">
										<input type="text" class="form-control floating-input" name="" placeholder=" ">
										<label  class="animate_label">Ad, Soyad</label>
                        			</div>
                        		</div>

                        		<div class="col-md-4">
                        			<div class="form-group small_select small_select_left">
										<input type="tel" class="form-control floating-input" name="" placeholder=" ">
										<label  class="animate_label">xxx xx xx</label>
	                        			<select class="form-control ">
	                        				<option>051</option>
	                        				<option>050</option>
	                        				<option>055</option>
										</select>
										
	                        		</div>
                        		</div>

                        		<div class="col-md-4 pr-0">
                        			<div class="form-group">
										<input type="email" class="form-control floating-input" name="" placeholder=" ">
										<label  class="animate_label">Email</label>
                        			</div>
                        		</div>

						  	</div>
						  </div>
						  <!---->
						  <div class="col-md-12 elanin_novu">
						  	<div class="row">
						  		<div class="col-md-12">
						  			<div class="row">
						  				<h4 class="ey_bottom_title">Elanın növü</h4>
						  			</div>
						  		</div>
						  		<div class="col-md-12 en_container">
						  			<div class="row">
						  				<div class="en_box en_box_free">
						  					<div class="col-md-12 en_box_title">
						  						<div class="row">
						  							<img src="assets/images/flag.svg">
						  							<h3>Pulsuz</h3>
						  							<ul>
						  								<li>
						  									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed </p>
						  								</li>
						  								<li>
						  									<p>Lorem ipsum dolor sit amet</p>
						  								</li>
						  							</ul>

						  							<span class="en_price">0 AZN</span>
						  							<button type="submit">Yerləşdir</button>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="en_box en_box_premium">
						  					<div class="col-md-12 en_box_title">
						  						<div class="row">
						  							<img src="assets/images/premium1.svg">
						  							<h3>Premium</h3>
						  							<ul>
						  								<li>
						  									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed </p>
						  								</li>
						  								<li>
						  									<p>Lorem ipsum dolor sit amet</p>
						  								</li>
						  							</ul>
						  							<span class="en_price">25 AZN</span>
						  							<button type="submit">Yerləşdir</button>
						  						</div>
						  					</div>
						  				</div>
						  			</div>
						  		</div>
						  		
						  	</div>
						  </div>
						  <!---->
						</form>
						</div>
						<!-- yuk masinlari end-->


						<!-- avtobuslar-->
						<div id="diskler" class="elan_yerlesdir_forms ">
						<form class="full">
						
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Kommersiya</option>
												<option value="2">Moto</option>
											</select>
											<label class="animate_label">Nəqliyyatın növü</label>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
                                            <input type="text" class="form-control floating-input" name="" placeholder=" ">
                                            <label  class="animate_label">Məhsulun adı</label>
										</div>
                                    </div>
                                    
                                    <div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">cat1</option>
												<option value="2">cat2</option>
											</select>
											<label  class="animate_label">Kateqoriya</label>
										</div>
									</div>

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Baki</option>
												<option value="2">Gence</option>
											</select>
											<label  class="animate_label">Şəhər</label>
										</div>
                                    </div>
                                    
                                    <div class="col-md-4">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Hyundai</option>
												<option value="2">BMW</option>
											</select>
											<label class="animate_label">Marka</label>
										</div>
									</div>

									<div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Sonata</option>
												<option value="2">Elantra</option>
											</select>
											<label  class="animate_label">Model</label>
										</div>
									</div>

	                        		<div class="col-md-4 pl-0">
	                        			<div class="form-group">
		                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
		                        				<option value=""></option>
		                        				<option value="1">1996</option>
		                        				<option value="2">1997</option>
											</select>
											<label  class="animate_label">Buraxılış ili</label>
	                        			</div>
	                        		</div>

	                        		<div class="col-md-4">
	                        			<div class="form-group small_select small_select_right">
											<input type="text" class="form-control floating-input" name="" placeholder=" ">
											<label class="animate_label">Qiymet</label>
		                        			<select class="form-control">
		                        				<option>AZN</option>
		                        				<option>USD</option>
		                        				<option>EUR</option>
		                        			</select>
		                        		</div>
	                        		</div>

	                        		


	                        	</div>
                        	</div>
                        	<!---->
                        	
                          <!----> 
                          <div class="col-md-12 search_ea_title">
                            <div class="row">
                              <span>Detallar</span>
                            </div>
                          </div>
                          <!----> 
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-2 pl-0">
                                <div class="form-group">
                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">Kohne</option>
                        				<option value="2">Yeni</option>
									</select>
									<label  class="animate_label">En</label>
                        		</div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">Kohne</option>
                        				<option value="2">Yeni</option>
									</select>
									<label  class="animate_label">Hündürlük</label>
                        		</div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">Kohne</option>
                        				<option value="2">Yeni</option>
									</select>
									<label  class="animate_label">Diametri (R)</label>
                        		</div>
                              </div>
                              <div class="col-md-2 ">
                                <div class="form-group">
                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">Kohne</option>
                        				<option value="2">Yeni</option>
									</select>
									<label  class="animate_label">Fəsil</label>
                        		</div>
                              </div>
                              <div class="col-md-4 pr-0">
                                <div class="form-group">
                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">Kohne</option>
                        				<option value="2">Yeni</option>
									</select>
									<label  class="animate_label">Vəziyyəti</label>
                        		</div>
                              </div>
                              



                            </div>
                          </div>

                          <!----> 
 
						  <!----> 
							<div class="col-md-12 search_more_and_sug">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<h4 class="ey_desc_title">Əlavə məlumat</h4>
										</div>
									</div>
									
									<div class="col-md-12">
										<div class="row">
											<div class="form-group full">
												<textarea class="form-control ey_desc_area"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						  <!---->
						  <div class="col-md-12">
						  	<div class="row">
						  		<div class="col-md-12">
						  			<div class="row">
						  				<h4 class="ey_bottom_title">Şəkil əlavə et</h4>
						  			</div>
						  		</div>
						  		<div class="col-md-12">
						  			<div class="row">
						  				<div class="col-md-12">
						  					<div class="row">
								  				<div class="file_upload_box">
								  					<input type="file" name="" class="ey_image_upload">
								  				</div>
							  				</div>
						  				</div>

						  				<div class="col-md-12 image_upload_rules">
						  					<div class="row">
						  						<p>-  Maksimum 6 şəkil yüklənməsinə icazə verilir</p>
						  						<p>-  png, jpg, jpeg sonluqlu faylların yüklənməsinə icazə verilir</p>
						  						<p>-  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
						  					</div>
						  				</div>
						  			</div>
						  		</div>
						  	</div>
						  </div>
						  <!---->
						  <div class="col-md-12">
						  	<div class="row">
						  		<div class="col-md-12">
						  			<div class="row">
						  				<h4 class="ey_bottom_title">Əlaqə məlumatları</h4>
						  			</div>
						  		</div>
						  		
						  		<div class="col-md-4 pl-0">
                        			<div class="form-group">
										<input type="text" class="form-control floating-input" name="" placeholder=" ">
										<label  class="animate_label">Ad, Soyad</label>
                        			</div>
                        		</div>

                        		<div class="col-md-4">
                        			<div class="form-group small_select small_select_left">
										<input type="tel" class="form-control floating-input" name="" placeholder=" ">
										<label  class="animate_label">xxx xx xx</label>
	                        			<select class="form-control ">
	                        				<option>051</option>
	                        				<option>050</option>
	                        				<option>055</option>
										</select>
										
	                        		</div>
                        		</div>

                        		<div class="col-md-4 pr-0">
                        			<div class="form-group">
										<input type="email" class="form-control floating-input" name="" placeholder=" ">
										<label  class="animate_label">Email</label>
                        			</div>
                        		</div>

						  	</div>
						  </div>
						  <!---->
						  <div class="col-md-12 elanin_novu">
						  	<div class="row">
						  		<div class="col-md-12">
						  			<div class="row">
						  				<h4 class="ey_bottom_title">Elanın növü</h4>
						  			</div>
						  		</div>
						  		<div class="col-md-12 en_container">
						  			<div class="row">
						  				<div class="en_box en_box_free">
						  					<div class="col-md-12 en_box_title">
						  						<div class="row">
						  							<img src="assets/images/flag.svg">
						  							<h3>Pulsuz</h3>
						  							<ul>
						  								<li>
						  									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed </p>
						  								</li>
						  								<li>
						  									<p>Lorem ipsum dolor sit amet</p>
						  								</li>
						  							</ul>

						  							<span class="en_price">0 AZN</span>
						  							<button type="submit">Yerləşdir</button>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="en_box en_box_premium">
						  					<div class="col-md-12 en_box_title">
						  						<div class="row">
						  							<img src="assets/images/premium1.svg">
						  							<h3>Premium</h3>
						  							<ul>
						  								<li>
						  									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed </p>
						  								</li>
						  								<li>
						  									<p>Lorem ipsum dolor sit amet</p>
						  								</li>
						  							</ul>
						  							<span class="en_price">25 AZN</span>
						  							<button type="submit">Yerləşdir</button>
						  						</div>
						  					</div>
						  				</div>
						  			</div>
						  		</div>
						  		
						  	</div>
						  </div>
						  <!---->
						</form>
						</div>
						<!-- avtobuslar end-->


						<!-- tirlar -->
						<div id="yararsiz" class="elan_yerlesdir_forms ">
						<form class="full">
						
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Kommersiya</option>
												<option value="2">Moto</option>
											</select>
											<label class="animate_label">Nəqliyyatın növü</label>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
                                            <input type="text" class="form-control floating-input" name="" placeholder=" ">
                                            <label  class="animate_label">Məhsulun adı</label>
										</div>
                                    </div>
                                    
                                    <div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">cat1</option>
												<option value="2">cat2</option>
											</select>
											<label  class="animate_label">Kateqoriya</label>
										</div>
									</div>

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Baki</option>
												<option value="2">Gence</option>
											</select>
											<label  class="animate_label">Şəhər</label>
										</div>
                                    </div>
                                    
                                    <div class="col-md-4">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Hyundai</option>
												<option value="2">BMW</option>
											</select>
											<label class="animate_label">Marka</label>
										</div>
									</div>

									<div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Sonata</option>
												<option value="2">Elantra</option>
											</select>
											<label  class="animate_label">Model</label>
										</div>
									</div>

	                        		<div class="col-md-4 pl-0">
	                        			<div class="form-group">
		                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
		                        				<option value=""></option>
		                        				<option value="1">1996</option>
		                        				<option value="2">1997</option>
											</select>
											<label  class="animate_label">Buraxılış ili</label>
	                        			</div>
	                        		</div>

	                        		<div class="col-md-4">
	                        			<div class="form-group small_select small_select_right">
											<input type="text" class="form-control floating-input" name="" placeholder=" ">
											<label class="animate_label">Qiymet</label>
		                        			<select class="form-control">
		                        				<option>AZN</option>
		                        				<option>USD</option>
		                        				<option>EUR</option>
		                        			</select>
		                        		</div>
	                        		</div>

	                        		


	                        	</div>
                        	</div>
                        	<!---->
                        	
                          <!----> 
                          <div class="col-md-12 search_ea_title">
                            <div class="row">
                              <span>Detallar</span>
                            </div>
                          </div>
                          <!----> 
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-3 pl-0">
                                <div class="form-group">
                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">Kohne</option>
                        				<option value="2">Yeni</option>
									</select>
									<label  class="animate_label">Ban növü </label>
                        		</div>
                              </div>
                              

                              <div class="col-md-3 pr-0">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik</label>
                        		</div>
                              </div>


                            </div>
                          </div>

                          <!----> 
 
						  <!----> 
							<div class="col-md-12 search_more_and_sug">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<h4 class="ey_desc_title">Əlavə məlumat</h4>
										</div>
									</div>
									
									<div class="col-md-12">
										<div class="row">
											<div class="form-group full">
												<textarea class="form-control ey_desc_area"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						  <!---->
						  <div class="col-md-12">
						  	<div class="row">
						  		<div class="col-md-12">
						  			<div class="row">
						  				<h4 class="ey_bottom_title">Şəkil əlavə et</h4>
						  			</div>
						  		</div>
						  		<div class="col-md-12">
						  			<div class="row">
						  				<div class="col-md-12">
						  					<div class="row">
								  				<div class="file_upload_box">
								  					<input type="file" name="" class="ey_image_upload">
								  				</div>
							  				</div>
						  				</div>

						  				<div class="col-md-12 image_upload_rules">
						  					<div class="row">
						  						<p>-  Maksimum 6 şəkil yüklənməsinə icazə verilir</p>
						  						<p>-  png, jpg, jpeg sonluqlu faylların yüklənməsinə icazə verilir</p>
						  						<p>-  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
						  					</div>
						  				</div>
						  			</div>
						  		</div>
						  	</div>
						  </div>
						  <!---->
						  <div class="col-md-12">
						  	<div class="row">
						  		<div class="col-md-12">
						  			<div class="row">
						  				<h4 class="ey_bottom_title">Əlaqə məlumatları</h4>
						  			</div>
						  		</div>
						  		
						  		<div class="col-md-4 pl-0">
                        			<div class="form-group">
										<input type="text" class="form-control floating-input" name="" placeholder=" ">
										<label  class="animate_label">Ad, Soyad</label>
                        			</div>
                        		</div>

                        		<div class="col-md-4">
                        			<div class="form-group small_select small_select_left">
										<input type="tel" class="form-control floating-input" name="" placeholder=" ">
										<label  class="animate_label">xxx xx xx</label>
	                        			<select class="form-control ">
	                        				<option>051</option>
	                        				<option>050</option>
	                        				<option>055</option>
										</select>
										
	                        		</div>
                        		</div>

                        		<div class="col-md-4 pr-0">
                        			<div class="form-group">
										<input type="email" class="form-control floating-input" name="" placeholder=" ">
										<label  class="animate_label">Email</label>
                        			</div>
                        		</div>

						  	</div>
						  </div>
						  <!---->
						  <div class="col-md-12 elanin_novu">
						  	<div class="row">
						  		<div class="col-md-12">
						  			<div class="row">
						  				<h4 class="ey_bottom_title">Elanın növü</h4>
						  			</div>
						  		</div>
						  		<div class="col-md-12 en_container">
						  			<div class="row">
						  				<div class="en_box en_box_free">
						  					<div class="col-md-12 en_box_title">
						  						<div class="row">
						  							<img src="assets/images/flag.svg">
						  							<h3>Pulsuz</h3>
						  							<ul>
						  								<li>
						  									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed </p>
						  								</li>
						  								<li>
						  									<p>Lorem ipsum dolor sit amet</p>
						  								</li>
						  							</ul>

						  							<span class="en_price">0 AZN</span>
						  							<button type="submit">Yerləşdir</button>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="en_box en_box_premium">
						  					<div class="col-md-12 en_box_title">
						  						<div class="row">
						  							<img src="assets/images/premium1.svg">
						  							<h3>Premium</h3>
						  							<ul>
						  								<li>
						  									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed </p>
						  								</li>
						  								<li>
						  									<p>Lorem ipsum dolor sit amet</p>
						  								</li>
						  							</ul>
						  							<span class="en_price">25 AZN</span>
						  							<button type="submit">Yerləşdir</button>
						  						</div>
						  					</div>
						  				</div>
						  			</div>
						  		</div>
						  		
						  	</div>
						  </div>
						  <!---->
						</form>
						</div>
						<!-- tirlar end-->


						
					</div>
					
				</div>
			</div>
		</div>
		
	</section>
	
</main>

<?php
include_once 'template/footer.php';
?>