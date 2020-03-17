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
                                <a href="#" class="active">
                                	<svg xmlns="http://www.w3.org/2000/svg" width="19.067" height="13" viewBox="0 0 19.067 13">
									    <path id="prefix__dump-truck" d="M17.467 7.6h-4.334v5.2H1.867v2.6h.867a2.6 2.6 0 005.2 0h5.2a2.6 2.6 0 005.2 0h1.733v-4.333l-2.6-3.467M5.333 16.7a1.3 1.3 0 111.3-1.3 1.3 1.3 0 01-1.3 1.3m10.4 0a1.3 1.3 0 111.3-1.3 1.3 1.3 0 01-1.3 1.3m-.867-5.633V8.9h2.167l1.7 2.167h-3.866m.867-4.333h-3.467v5.2H2.733L1.494 7.6H1V5.867h10.4L12.267 5h3.467z" transform="translate(-1 -5)" style="fill:#999"/>
									</svg>Kommersiya
                                </a>
                                <a href="#">
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
									<a href="#yungul_kommersiya" >Yüngül kommersiya</a>
								</div>
								<div class="col-lg-3 col-md-4">
									<a href="#yük_masinlari">Yük maşınları</a>
								</div>
								<div class="col-lg-3 col-md-4 ">
									<a href="#avtobus">Avtobuslar</a>
								</div>
								<div class="col-md-4 col-lg-3 ">
									<a href="#tir">Tırlar</a>
								</div>
								<div class="col-md-4 col-lg-3 ">
									<a href="#qosqular">Qoşqular</a>
								</div>
								<div class="col-md-4 col-lg-3 ">
									<a href="#kend_teserrufati">Kənd təsərrüfatı</a>
								</div>
								<div class="col-md-4 col-lg-3">
									<a href="#tikinti">Tikinti və yol</a>
								</div>
								<div class="col-md-4 col-lg-3">
									<a href="#yukleyici">Yükləyicilər</a>
								</div>
								<div class="col-md-4 col-lg-3 ">
									<a href="#kranlar">Yük kranları</a>
								</div>
								<div class="col-md-4 col-lg-3">
									<a href="#ekskavator">Ekskavatorlar</a>
								</div>
								<div class="col-md-4 col-lg-3">
									<a href="#buldozer">Buldozerlər</a>
								</div>
								<div class="col-md-4 col-lg-3">
									<a href="#kommunal">Kommunal</a>
								</div>
								
							</div>
						</div>

						<!-- elan yerlesdir car types end-->
						<!-- yungul kommersiya-->
						<div id="yungul_kommersiya" class="elan_yerlesdir_forms active">
                        <form class="full">
						
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Hyundai</option>
												<option value="2">BMW</option>
											</select>
											<label class="animate_label">Marka</label>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Sonata</option>
												<option value="2">Elantra</option>
											</select>
											<label  class="animate_label">Model</label>
										</div>
									</div>

									<div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Baki</option>
												<option value="2">Gence</option>
											</select>
											<label  class="animate_label">Şəhər</label>
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

	                        		<div class="col-md-4 pr-0 checkbox_inputs">
	                        			<div class="row">
	                        				<div >
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Kredit</p>
	                        						</label>
	                        					</div>
	                        				</div>
	                        				<div>
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Barter</p>
	                        						</label>
	                        					</div>
	                        				</div>
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
                        				<option value="1">Avtobus</option>
                        				<option value="2">Furqon</option>
									</select>
									<label  class="animate_label">Ban növü</label>
                        		</div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">On</option>
                        				<option value="2">Arxa</option>
                        				<option value="3">Tam</option>
									</select>
									<label  class="animate_label">Ötürücü</label>
                        		</div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">Mexanika</option>
                        				<option value="2">Avtomat</option>
									</select>
									<label  class="animate_label">Sürətlər qutusu</label>
                        		</div>
                              </div>

                              <div class="col-md-3 pr-0">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik</label>
                        		</div>
                              </div>

                              <div class="col-md-3 from_to pl-0">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Yürüş (km)</label>		
		                        </div>
                              </div>

                              <div class="col-md-3  from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik (a.g)</label>	
		                        </div>
							  </div>
							  
							  <div class="col-md-3 ">
                                <div class="form-group">
                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">1</option>
                        				<option value="2">2</option>
									</select>
									<label  class="animate_label">Oturacaq sayı</label>
                        		</div>
                              </div>

                              <div class="col-md-3 from_to pr-0">
                               <div class="color_box">
							   <label class="colorbox_label">Rəng</label>
                                  <div class="scl_cats cat_colors full"> 
                                    <input type="checkbox" name="" data-color="#fff" class="white_color" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#000" class="black_color" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                  </div>
                                  <button class="colorbox_open" type="button"></button>
                                  
                                </div>
                              </div>
                            </div>
                          </div>

                          <!----> 
                          <!---->
                          
                          <!---->
                          <div class="col-md-12">
                            <div class="row">

                              <div class="col-md-12">
                                <div class="row">
                                  <h3 class="search_mid_title">Digər</h3>
                                </div>
                              </div>
                              
                              <div class="col-md-12 specs_checkbox">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Yan güzgülərin qızdırıcısı</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Kondisioner</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>ABS</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Park radar</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Arxa görüntülü kamera</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Oturacaqların isidilməsi</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Multimedia</p>
                                    </label>
								  </div>
								  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Mərkəzi qapanma</p>
                                    </label>
								  </div>
								  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Siqnalizasiya</p>
                                    </label>
                                  </div>
                                 

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
						<div id="yük_masinlari" class="elan_yerlesdir_forms ">
						<form class="full">
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Hyundai</option>
												<option value="2">BMW</option>
											</select>
											<label class="animate_label">Marka</label>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Sonata</option>
												<option value="2">Elantra</option>
											</select>
											<label  class="animate_label">Model</label>
										</div>
									</div>

									<div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Baki</option>
												<option value="2">Gence</option>
											</select>
											<label  class="animate_label">Şəhər</label>
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
		                        			<select class="form-control  ">
		                        				<option>AZN</option>
		                        				<option>USD</option>
		                        				<option>EUR</option>
		                        			</select>
		                        		</div>
	                        		</div>

	                        		<div class="col-md-4 pr-0 checkbox_inputs">
	                        			<div class="row">
	                        				<div >
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Kredit</p>
	                        						</label>
	                        					</div>
	                        				</div>
	                        				<div>
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Barter</p>
	                        						</label>
	                        					</div>
	                        				</div>
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
                        				<option value="1">Avtobus</option>
                        				<option value="2">Furqon</option>
									</select>
									<label  class="animate_label">Ban növü</label>
                        		</div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Yükləmə (kq)</label>
                        		</div>
							  </div>
							  <div class="col-md-3">
                                <div class="form-group">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Təkər formulu</label>
                        		</div>
							  </div>
                              <div class="col-md-3 pr-0">
                                <div class="form-group">
                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">Mexanika</option>
                        				<option value="2">Avtomat</option>
									</select>
									<label  class="animate_label">Sürətlər qutusu</label>
                        		</div>
                              </div>
                              <div class="col-md-3 pl-0">
                                <div class="form-group">
                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">Benzin</option>
                        				<option value="2">Dizel</option>
									</select>
									<label  class="animate_label">Yanacaq növü</label>
                        		</div>
                              </div>

                              <div class="col-md-3 from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik</label>
                        		</div>
                              </div>

                              <div class="col-md-3  from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik (a.g)</label>	
		                        </div>
                              </div>

                              <div class="col-md-3 from_to pr-0">
                               <div class="color_box">
							   <label class="colorbox_label">Rəng</label>
                                  <div class="scl_cats cat_colors full"> 
                                    <input type="checkbox" name="" data-color="#fff" class="white_color" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#000" class="black_color" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                  </div>
                                  <button class="colorbox_open" type="button"></button>
                                  
                                </div>
                              </div>
                            </div>
                          </div>

                          <!----> 

                          <!---->
                          <div class="col-md-12">
                            <div class="row">

                              <div class="col-md-12">
                                <div class="row">
                                  <h3 class="search_mid_title">Digər</h3>
                                </div>
                              </div>
                              
                              <div class="col-md-12 specs_checkbox">
                                <div class="row">
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Yan güzgülərin qızdırıcısı</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>ABS</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>EBS</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Təhlükəsizlik yastıqları</p>
                                    </label>
								  </div>
								  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Oturacaqların isidilməsi</p>
                                    </label>
								  </div>
								  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Multimedia</p>
                                    </label>
                                  </div>
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
	                        			<select class="form-control  ">
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
						<div id="avtobus" class="elan_yerlesdir_forms ">
						<form class="full">
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Hyundai</option>
												<option value="2">BMW</option>
											</select>
											<label class="animate_label">Marka</label>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Sonata</option>
												<option value="2">Elantra</option>
											</select>
											<label  class="animate_label">Model</label>
										</div>
									</div>

									<div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Baki</option>
												<option value="2">Gence</option>
											</select>
											<label  class="animate_label">Şəhər</label>
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
		                        			<select class="form-control  ">
		                        				<option>AZN</option>
		                        				<option>USD</option>
		                        				<option>EUR</option>
		                        			</select>
		                        		</div>
	                        		</div>

	                        		<div class="col-md-4 pr-0 checkbox_inputs">
	                        			<div class="row">
	                        				<div >
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Kredit</p>
	                        						</label>
	                        					</div>
	                        				</div>
	                        				<div>
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Barter</p>
	                        						</label>
	                        					</div>
	                        				</div>
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
                        				<option value="1">Avtobus</option>
                        				<option value="2">Furqon</option>
									</select>
									<label  class="animate_label">Ban növü</label>
                        		</div>
                              </div>
                              <div class="col-md-3 from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Təkər formulu</label>		
		                        </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">Mexanika</option>
                        				<option value="2">Avtomat</option>
									</select>
									<label  class="animate_label">Sürətlər qutusu</label>
                        		</div>
                              </div>
                              <div class="col-md-3 pr-0">
                                <div class="form-group">
                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">Benzin</option>
                        				<option value="2">Dizel</option>
									</select>
									<label  class="animate_label">Yanacaq növü</label>
                        		</div>
                              </div>

                              <div class="col-md-3 pl-0 from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Yürüş (km)</label>
                        		</div>
                              </div>

                              <div class="col-md-3 from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik</label>		
		                        </div>
                              </div>

                              <div class="col-md-3  from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik (a.g)</label>	
		                        </div>
							  </div>
							  
							  <div class="col-md-3 pr-0">
                                <div class="form-group">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Oturacaq sayı</label>
                        		</div>
							  </div>
							  

                              <div class="col-md-3 from_to pl-0">
                               <div class="color_box">
							   <label class="colorbox_label">Rəng</label>
                                  <div class="scl_cats cat_colors full"> 
                                    <input type="checkbox" name="" data-color="#fff" class="white_color" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#000" class="black_color" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                  </div>
                                  <button class="colorbox_open" type="button"></button>
                                  
                                </div>
                              </div>
                            </div>
                          </div>

                          <!----> 

                          <!---->
                          <div class="col-md-12">
                            <div class="row">

                              <div class="col-md-12">
                                <div class="row">
                                  <h3 class="search_mid_title">Digər</h3>
                                </div>
                              </div>
                              
                              <div class="col-md-12 specs_checkbox">
                                <div class="row">
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Yan güzgülərin qızdırıcısı</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>ABS</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Kondisioner</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Multimedia</p>
                                    </label>
								  </div>
								  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Oturacaqların isidilməsi</p>
                                    </label>
                                  </div>
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
	                        			<select class="form-control  ">
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
						<div id="tir" class="elan_yerlesdir_forms ">
						<form class="full">
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Hyundai</option>
												<option value="2">BMW</option>
											</select>
											<label class="animate_label">Marka</label>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Sonata</option>
												<option value="2">Elantra</option>
											</select>
											<label  class="animate_label">Model</label>
										</div>
									</div>

									<div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Baki</option>
												<option value="2">Gence</option>
											</select>
											<label  class="animate_label">Şəhər</label>
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
		                        			<select class="form-control  ">
		                        				<option>AZN</option>
		                        				<option>USD</option>
		                        				<option>EUR</option>
		                        			</select>
		                        		</div>
	                        		</div>

	                        		<div class="col-md-4 pr-0 checkbox_inputs">
	                        			<div class="row">
	                        				<div >
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Kredit</p>
	                        						</label>
	                        					</div>
	                        				</div>
	                        				<div>
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Barter</p>
	                        						</label>
	                        					</div>
	                        				</div>
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
                        				<option value="1">Avtobus</option>
                        				<option value="2">Furqon</option>
									</select>
									<label  class="animate_label">Kabin növü</label>
                        		</div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Təkər formulu</label>
                        		</div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">Mexanika</option>
                        				<option value="2">Avtomat</option>
									</select>
									<label  class="animate_label">Sürətlər qutusu</label>
                        		</div>
                              </div>
                              <div class="col-md-3 pr-0">
                                <div class="form-group">
                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">Benzin</option>
                        				<option value="2">Dizel</option>
									</select>
									<label  class="animate_label">Yanacaq növü</label>
                        		</div>
                              </div>

                              <div class="col-md-3 pl-0 from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Yürüş (km)</label>
                        		</div>
                              </div>

                              <div class="col-md-3 from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik</label>		
		                        </div>
                              </div>

                              <div class="col-md-3  from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik (a.g)</label>	
		                        </div>
                              </div>

                              <div class="col-md-3 from_to pr-0">
                               <div class="color_box">
							   <label class="colorbox_label">Rəng</label>
                                  <div class="scl_cats cat_colors full"> 
                                    <input type="checkbox" name="" data-color="#fff" class="white_color" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#000" class="black_color" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                  </div>
                                  <button class="colorbox_open" type="button"></button>
                                  
                                </div>
                              </div>
                            </div>
                          </div>

                          <!----> 

                          <!---->
                          <div class="col-md-12">
                            <div class="row">

                              <div class="col-md-12">
                                <div class="row">
                                  <h3 class="search_mid_title">Digər</h3>
                                </div>
                              </div>
                              
                              <div class="col-md-12 specs_checkbox">
                                <div class="row">
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Yan güzgülərin qızdırıcısı</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>ABS</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Kondisioner</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>EBS</p>
                                    </label>
								  </div>
								  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Oturacaqların isidilməsi</p>
                                    </label>
								  </div>
								  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Multimedia</p>
                                    </label>
                                  </div>
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
	                        			<select class="form-control  ">
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


						<!-- qosqular-->
						<div id="qosqular" class="elan_yerlesdir_forms ">
						<form class="full">
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Hyundai</option>
												<option value="2">BMW</option>
											</select>
											<label class="animate_label">Marka</label>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Sonata</option>
												<option value="2">Elantra</option>
											</select>
											<label  class="animate_label">Model</label>
										</div>
									</div>

									<div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Baki</option>
												<option value="2">Gence</option>
											</select>
											<label  class="animate_label">Şəhər</label>
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
		                        			<select class="form-control  ">
		                        				<option>AZN</option>
		                        				<option>USD</option>
		                        				<option>EUR</option>
		                        			</select>
		                        		</div>
	                        		</div>

	                        		<div class="col-md-4 pr-0 checkbox_inputs">
	                        			<div class="row">
	                        				<div >
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Kredit</p>
	                        						</label>
	                        					</div>
	                        				</div>
	                        				<div>
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Barter</p>
	                        						</label>
	                        					</div>
	                        				</div>
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
                        				<option value="1">Avtobus</option>
                        				<option value="2">Furqon</option>
									</select>
									<label  class="animate_label">Növü</label>
                        		</div>
                              </div>
                            
                              <div class="col-md-3  from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Yükləmə (kq)</label>
                        		</div>
                              </div>

                              <div class="col-md-3 from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Yürüş (km)</label>		
		                        </div>
                              </div>


                              <div class="col-md-3 from_to pr-0">
                               <div class="color_box">
							   <label class="colorbox_label">Rəng</label>
                                  <div class="scl_cats cat_colors full"> 
                                    <input type="checkbox" name="" data-color="#fff" class="white_color" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#000" class="black_color" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                  </div>
                                  <button class="colorbox_open" type="button"></button>
                                  
                                </div>
                              </div>
                            </div>
                          </div>

                          <!----> 

                          <!---->
                          <div class="col-md-12">
                            <div class="row">

                              <div class="col-md-12">
                                <div class="row">
                                  <h3 class="search_mid_title">Digər</h3>
                                </div>
                              </div>
                              
                              <div class="col-md-12 specs_checkbox">
                                <div class="row">
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>ABS</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Prevma</p>
                                    </label>
                                  </div>
                                  
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
	                        			<select class="form-control  ">
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
						<!-- qosqular end-->


						<!-- kend tes-->
						<div id="kend_teserrufati" class="elan_yerlesdir_forms ">
						<form class="full">
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Hyundai</option>
												<option value="2">BMW</option>
											</select>
											<label class="animate_label">Marka</label>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Sonata</option>
												<option value="2">Elantra</option>
											</select>
											<label  class="animate_label">Model</label>
										</div>
									</div>

									<div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Baki</option>
												<option value="2">Gence</option>
											</select>
											<label  class="animate_label">Şəhər</label>
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
		                        			<select class="form-control  ">
		                        				<option>AZN</option>
		                        				<option>USD</option>
		                        				<option>EUR</option>
		                        			</select>
		                        		</div>
	                        		</div>

	                        		<div class="col-md-4 pr-0 checkbox_inputs">
	                        			<div class="row">
	                        				<div >
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Kredit</p>
	                        						</label>
	                        					</div>
	                        				</div>
	                        				<div>
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Barter</p>
	                        						</label>
	                        					</div>
	                        				</div>
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
                        				<option value="1">Avtobus</option>
                        				<option value="2">Furqon</option>
									</select>
									<label  class="animate_label">Kabin növü</label>
                        		</div>
							  </div>
							  
                              <div class="col-md-3 from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Motosaat</label>		
		                        </div>
                              </div>

                              <div class="col-md-3 from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik</label>
                        		</div>
                              </div>

                              <div class="col-md-3  from_to pr-0">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik (a.g)</label>	
		                        </div>
                              </div>

                              <div class="col-md-3 from_to pl-0">
                               <div class="color_box">
							   <label class="colorbox_label">Rəng</label>
                                  <div class="scl_cats cat_colors full"> 
                                    <input type="checkbox" name="" data-color="#fff" class="white_color" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#000" class="black_color" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                  </div>
                                  <button class="colorbox_open" type="button"></button>
                                  
                                </div>
                              </div>
                            </div>
                          </div>

                          <!----> 
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
	                        			<select class="form-control  ">
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
						<!-- kend tes end-->


						<!-- tikinti-->
						<div id="tikinti" class="elan_yerlesdir_forms">
						<form class="full">
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Hyundai</option>
												<option value="2">BMW</option>
											</select>
											<label class="animate_label">Marka</label>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Sonata</option>
												<option value="2">Elantra</option>
											</select>
											<label  class="animate_label">Model</label>
										</div>
									</div>

									<div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Baki</option>
												<option value="2">Gence</option>
											</select>
											<label  class="animate_label">Şəhər</label>
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
		                        			<select class="form-control  ">
		                        				<option>AZN</option>
		                        				<option>USD</option>
		                        				<option>EUR</option>
		                        			</select>
		                        		</div>
	                        		</div>

	                        		<div class="col-md-4 pr-0 checkbox_inputs">
	                        			<div class="row">
	                        				<div >
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Kredit</p>
	                        						</label>
	                        					</div>
	                        				</div>
	                        				<div>
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Barter</p>
	                        						</label>
	                        					</div>
	                        				</div>
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
                        				<option value="1">Avtobus</option>
                        				<option value="2">Furqon</option>
									</select>
									<label  class="animate_label">Kabin növü</label>
                        		</div>
							  </div>
							  
                              <div class="col-md-3 from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Motosaat</label>		
		                        </div>
                              </div>

                              <div class="col-md-3 from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik</label>
                        		</div>
                              </div>

                              <div class="col-md-3  from_to pr-0">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik (a.g)</label>	
		                        </div>
                              </div>

                              <div class="col-md-3 from_to pl-0">
                               <div class="color_box">
							   <label class="colorbox_label">Rəng</label>
                                  <div class="scl_cats cat_colors full"> 
                                    <input type="checkbox" name="" data-color="#fff" class="white_color" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#000" class="black_color" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                  </div>
                                  <button class="colorbox_open" type="button"></button>
                                  
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
	                        			<select class="form-control  ">
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
						<!-- tikinti end-->


						<!-- yukleyici-->
						<div id="yukleyici" class="elan_yerlesdir_forms">
						<form class="full">
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Hyundai</option>
												<option value="2">BMW</option>
											</select>
											<label class="animate_label">Marka</label>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Sonata</option>
												<option value="2">Elantra</option>
											</select>
											<label  class="animate_label">Model</label>
										</div>
									</div>

									<div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Baki</option>
												<option value="2">Gence</option>
											</select>
											<label  class="animate_label">Şəhər</label>
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
		                        			<select class="form-control  ">
		                        				<option>AZN</option>
		                        				<option>USD</option>
		                        				<option>EUR</option>
		                        			</select>
		                        		</div>
	                        		</div>

	                        		<div class="col-md-4 pr-0 checkbox_inputs">
	                        			<div class="row">
	                        				<div >
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Kredit</p>
	                        						</label>
	                        					</div>
	                        				</div>
	                        				<div>
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Barter</p>
	                        						</label>
	                        					</div>
	                        				</div>
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
                        				<option value="1">Avtobus</option>
                        				<option value="2">Furqon</option>
									</select>
									<label  class="animate_label">Kabin növü</label>
                        		</div>
							  </div>
							  
                              <div class="col-md-3 from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Motosaat</label>		
		                        </div>
                              </div>

                              <div class="col-md-3 from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Qaldırma hündürlüyü</label>
                        		</div>
                              </div>

                              <div class="col-md-3 from_to pr-0">
                               <div class="color_box">
							   <label class="colorbox_label">Rəng</label>
                                  <div class="scl_cats cat_colors full"> 
                                    <input type="checkbox" name="" data-color="#fff" class="white_color" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#000" class="black_color" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                  </div>
                                  <button class="colorbox_open" type="button"></button>
                                  
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
	                        			<select class="form-control  ">
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
						<!-- yukleyici end-->


						<!-- kranlar -->
						<div id="kranlar" class="elan_yerlesdir_forms ">
						<form class="full">
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Hyundai</option>
												<option value="2">BMW</option>
											</select>
											<label class="animate_label">Marka</label>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Sonata</option>
												<option value="2">Elantra</option>
											</select>
											<label  class="animate_label">Model</label>
										</div>
									</div>

									<div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Baki</option>
												<option value="2">Gence</option>
											</select>
											<label  class="animate_label">Şəhər</label>
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
		                        			<select class="form-control  ">
		                        				<option>AZN</option>
		                        				<option>USD</option>
		                        				<option>EUR</option>
		                        			</select>
		                        		</div>
	                        		</div>

	                        		<div class="col-md-4 pr-0 checkbox_inputs">
	                        			<div class="row">
	                        				<div >
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Kredit</p>
	                        						</label>
	                        					</div>
	                        				</div>
	                        				<div>
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Barter</p>
	                        						</label>
	                        					</div>
	                        				</div>
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
                        				<option value="1">Avtobus</option>
                        				<option value="2">Furqon</option>
									</select>
									<label  class="animate_label">Ban növü</label>
                        		</div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Motosaat</label>
                        		</div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Yükləmə (kq)</label>
                        		</div>
                              </div>
                              <div class="col-md-3 pr-0">
                                <div class="form-group">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Qaldırma hündürlüyü</label>
                        		</div>
                              </div>

                              <div class="col-md-3 pl-0 from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Yürüş (km)</label>
                        		</div>
                              </div>

                              <div class="col-md-3 from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik</label>		
		                        </div>
                              </div>

                              <div class="col-md-3  from_to">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik (a.g)</label>	
		                        </div>
                              </div>

                              <div class="col-md-3 from_to pr-0">
                               <div class="color_box">
							   <label class="colorbox_label">Rəng</label>
                                  <div class="scl_cats cat_colors full"> 
                                    <input type="checkbox" name="" data-color="#fff" class="white_color" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#000" class="black_color" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                  </div>
                                  <button class="colorbox_open" type="button"></button>
                                  
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
	                        			<select class="form-control  ">
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
						<!-- kranlar end-->


						<!-- eks-->
						<div id="ekskavator" class="elan_yerlesdir_forms">
						<form class="full">
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Hyundai</option>
												<option value="2">BMW</option>
											</select>
											<label class="animate_label">Marka</label>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Sonata</option>
												<option value="2">Elantra</option>
											</select>
											<label  class="animate_label">Model</label>
										</div>
									</div>

									<div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Baki</option>
												<option value="2">Gence</option>
											</select>
											<label  class="animate_label">Şəhər</label>
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
		                        			<select class="form-control  ">
		                        				<option>AZN</option>
		                        				<option>USD</option>
		                        				<option>EUR</option>
		                        			</select>
		                        		</div>
	                        		</div>

	                        		<div class="col-md-4 pr-0 checkbox_inputs">
	                        			<div class="row">
	                        				<div >
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Kredit</p>
	                        						</label>
	                        					</div>
	                        				</div>
	                        				<div>
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Barter</p>
	                        						</label>
	                        					</div>
	                        				</div>
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
                        				<option value="1">Avtobus</option>
                        				<option value="2">Furqon</option>
									</select>
									<label  class="animate_label">Növü</label>
                        		</div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Motosaat</label>
                        		</div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Çömçə tutumu</label>
                        		</div>
                              </div>

                              <div class="col-md-3 from_to pr-0">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik</label>		
		                        </div>
                              </div>

                              <div class="col-md-3  from_to pl-0">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik (a.g)</label>	
		                        </div>
                              </div>

                              <div class="col-md-3 from_to ">
                               <div class="color_box">
							   <label class="colorbox_label">Rəng</label>
                                  <div class="scl_cats cat_colors full"> 
                                    <input type="checkbox" name="" data-color="#fff" class="white_color" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#000" class="black_color" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                  </div>
                                  <button class="colorbox_open" type="button"></button>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                          <!----> 
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
	                        			<select class="form-control  ">
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
						<!-- eks end-->


						<!-- buldozer-->
						<div id="buldozer" class="elan_yerlesdir_forms">
						<form class="full">
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Hyundai</option>
												<option value="2">BMW</option>
											</select>
											<label class="animate_label">Marka</label>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Sonata</option>
												<option value="2">Elantra</option>
											</select>
											<label  class="animate_label">Model</label>
										</div>
									</div>

									<div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Baki</option>
												<option value="2">Gence</option>
											</select>
											<label  class="animate_label">Şəhər</label>
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
		                        			<select class="form-control  ">
		                        				<option>AZN</option>
		                        				<option>USD</option>
		                        				<option>EUR</option>
		                        			</select>
		                        		</div>
	                        		</div>

	                        		<div class="col-md-4 pr-0 checkbox_inputs">
	                        			<div class="row">
	                        				<div >
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Kredit</p>
	                        						</label>
	                        					</div>
	                        				</div>
	                        				<div>
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Barter</p>
	                        						</label>
	                        					</div>
	                        				</div>
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
                        				<option value="1">Avtobus</option>
                        				<option value="2">Furqon</option>
									</select>
									<label  class="animate_label">Növü</label>
                        		</div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Motosaat</label>
                        		</div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
									<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">A</option>
                        				<option value="2">B</option>
									</select>
									<label  class="animate_label">Dartma sinifi</label>
                        		</div>
                              </div>

                              <div class="col-md-3 from_to pr-0">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik</label>		
		                        </div>
                              </div>

                              <div class="col-md-3  from_to pl-0">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik (a.g)</label>	
		                        </div>
                              </div>

                              <div class="col-md-3 from_to ">
                               <div class="color_box">
							   <label class="colorbox_label">Rəng</label>
                                  <div class="scl_cats cat_colors full"> 
                                    <input type="checkbox" name="" data-color="#fff" class="white_color" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#000" class="black_color" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                  </div>
                                  <button class="colorbox_open" type="button"></button>
                                  
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
	                        			<select class="form-control  ">
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
						<!-- buldozer end-->


						<!-- kommunal-->
						<div id="kommunal" class="elan_yerlesdir_forms">
						<form class="full">
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">

									<div class="col-md-4 pl-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Hyundai</option>
												<option value="2">BMW</option>
											</select>
											<label class="animate_label">Marka</label>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Sonata</option>
												<option value="2">Elantra</option>
											</select>
											<label  class="animate_label">Model</label>
										</div>
									</div>

									<div class="col-md-4 pr-0">
										<div class="form-group">
											<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
												<option value=""></option>
												<option value="1">Baki</option>
												<option value="2">Gence</option>
											</select>
											<label  class="animate_label">Şəhər</label>
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
		                        			<select class="form-control  ">
		                        				<option>AZN</option>
		                        				<option>USD</option>
		                        				<option>EUR</option>
		                        			</select>
		                        		</div>
	                        		</div>

	                        		<div class="col-md-4 pr-0 checkbox_inputs">
	                        			<div class="row">
	                        				<div >
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Kredit</p>
	                        						</label>
	                        					</div>
	                        				</div>
	                        				<div>
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Barter</p>
	                        						</label>
	                        					</div>
	                        				</div>
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
                        				<option value="1">Avtobus</option>
                        				<option value="2">Furqon</option>
									</select>
									<label  class="animate_label">Növü</label>
                        		</div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
									<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                        				<option value=""></option>
                        				<option value="1">Benzin</option>
                        				<option value="2">Dizel</option>
									</select>
									<label  class="animate_label">Yanacaq növü</label>
                        		</div>
                              </div>
                              
                              <div class="col-md-3 from_to ">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik</label>		
		                        </div>
                              </div>

                              <div class="col-md-3  from_to pr-0">
                                <div class="form-group align-center">
									<input type="text" class="form-control floating-input" name="" placeholder=" ">
									<label  class="animate_label">Mühərrik (a.g)</label>	
		                        </div>
                              </div>

                              <div class="col-md-3 from_to pl-0">
                               <div class="color_box">
							   <label class="colorbox_label">Rəng</label>
                                  <div class="scl_cats cat_colors full"> 
                                    <input type="checkbox" name="" data-color="#fff" class="white_color" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#000" class="black_color" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                    <input type="checkbox" name="" data-color="#bdbec0" >
                                    <input type="checkbox" name="" data-color="#58585a" >
                                    <input type="checkbox" name="" data-color="#2d3192" >
                                    <input type="checkbox" name="" data-color="#92278f" >
                                    <input type="checkbox" name="" data-color="#ef67a7" >
                                    <input type="checkbox" name="" data-color="#fef200" >
                                    <input type="checkbox" name="" data-color="#f8931d" >
                                    <input type="checkbox" name="" data-color="#ed1b24" >
                                    <input type="checkbox" name="" data-color="#751016" >
                                    <input type="checkbox" name="" data-color="#121bf3" >
                                    <input type="checkbox" name="" data-color="#57adff" >
                                    <input type="checkbox" name="" data-color="#51ff80" >
                                    <input type="checkbox" name="" data-color="#05b534" >
                                  </div>
                                  <button class="colorbox_open" type="button"></button>
                                  
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
	                        			<select class="form-control  ">
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
						<!-- kommunal end-->
					</div>
					
				</div>
			</div>
		</div>
		
	</section>
	
</main>

<?php
include_once 'template/footer.php';
?>