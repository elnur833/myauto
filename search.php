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

				<div class="col-md-12">		
					<h2 class="search_panel_title">Avtomobil axtarış</h2>
				</div>

				<div class="col-md-12 ">
					<div class="search_panel">
						<!---->
						
                        <!---->
                        <form class="full">
                          <!----> 
                          <div class="col-md-12 main_filters">
                              <div class="row">
                                  <div class="pl-0 col-md-6 car_types search_car_types">
                                      <input type="radio" name="cartype" value="butun" data-txt="Bütün" checked="">
                                      <input type="radio" name="cartype" value="yeni" data-txt="Yeni">
                                      <input type="radio" name="cartype" value="islenmis" data-txt="İşlənmiş">
                                      <a href="help.php" >Kömək</a>
                                  </div>

                                  <div class="col-md-6 pr-0 main_filter_tabs">
                                      <button class="delete_all_search">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13.409" viewBox="0 0 14 13.409">
                                          <path id="prefix__eraser" d="M12.261 3.394l3.545 3.538a1.444 1.444 0 010 2.034l-6.581 6.58a2.87 2.87 0 01-4.053 0l-2.528-2.528a1.444 1.444 0 010-2.034l7.591-7.591a1.435 1.435 0 012.027 0M3.654 12l2.535 2.528a1.422 1.422 0 002.027 0L10.743 12 7.2 8.457z" transform="translate(-2.225 -2.975)" style="fill:#157ee1"/>
                                      </svg>Axtarışı sıfırla

                                      </button>
                                  </div>
                              </div>
                          </div>
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

	                        	</div>
                        	</div>
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">
	                        		<div class="col-md-4 pl-0 year_selects">
	                        			<div class="row">
	                        				<div class="col-md-6 pr-0">
	                        					<div class="form-group align-center">
			                        				<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
				                        				<option value=""></option>
				                        				<option value="1">1984</option>
                                        <option value="2">1985</option>
                                        
                                      </select>
                                      <label class="animate_label">il</label>
				                        			<p class="from_text">-dən</p>
			                        			</div>
	                        				</div>
	                        				<div class="col-md-6">
	                        					<div class="form-group align-center">
		                        					<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
				                        				<option value=""></option>
				                        				<option value="1">1984</option>
				                        				<option value="2">1985</option>
                                      </select>
                                      <label class="animate_label">il</label>
				                        			<p class="to_text">-ə</p>
			                        			</div>
	                        				</div>
	                        			</div>
	                        		</div>

	                        		<div class="col-md-4 price_inputs">
	                        			<div class="row">
	                        				<div class="col-md-6 pr-0">
	                        					<div class="form-group align-center">
                                      <input type="text" name="" class="form-control floating-input"  placeholder=" ">
                                      <label class="animate_label">Qiymət</label>
	                        						<p class="from_text">-dan</p>
	                        					</div>
	                        				</div>
	                        				<div class="col-md-6">
	                        					<div class="form-group align-center">
                                      <input type="text" name="" class="form-control floating-input"  placeholder=" ">
                                      <label class="animate_label">Qiymət</label>
	                        						<p class="to_text">-a</p>
	                        					</div>
	                        				</div>
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
                          <div class="advanced_search_container full">
                          <div class="col-md-12 search_ea_title">
                            <div class="row">
                              <span>Ətraflı axtarış</span>
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
                                  <label class="animate_label">Ban növü</label>
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
                                  <label class="animate_label">Ötürücü</label>
		                        		</div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
		                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
		                        				<option value=""></option>
		                        				<option value="1">Mexanika</option>
		                        				<option value="2">Avtomat</option>
                                  </select>
                                  <label class="animate_label">Sürətlər qutusu</label>
		                        		</div>
                              </div>
                              <div class="col-md-3 pr-0">
                                <div class="form-group">
		                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
		                        				<option value=""></option>
		                        				<option value="1">Benzin</option>
		                        				<option value="2">Dizel</option>
                                  </select>
                                  <label class="animate_label">Yanacaq növü</label>
		                        		</div>
                              </div>

                              <div class="col-md-3 pl-0 from_to">
                                <div class="form-group align-center">
		                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
		                        				<option value=""></option>
		                        				<option value="1">100</option>
		                        				<option value="2">200</option>
                                  </select>
                                  <label class="animate_label">Mühərrik</label>
                                  <p class="from_text">-dən</p>
		                        		</div>
                              </div>

                              <div class="col-md-3 from_to">
                                <div class="form-group align-center">
		                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
		                        				<option value=""></option>
		                        				<option value="1">100</option>
		                        				<option value="2">200</option>
                                  </select>
                                  <label class="animate_label">Mühərrik</label>
                                  <p class="from_text">-qədər</p>
		                        		</div>
                              </div>

                              <div class="col-md-3  from_to">
                                <div class="form-group align-center">
		                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
		                        				<option value=""></option>
		                        				<option value="1">100</option>
		                        				<option value="2">200</option>
                                  </select>
                                  <label class="animate_label">Yürüş (km)</label>
                                  <p class="from_text">-dən</p>
		                        		</div>
                              </div>

                              <div class="col-md-3 from_to pr-0">
                                <div class="form-group align-center">
		                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
		                        				<option value=""></option>
		                        				<option value="1">100</option>
		                        				<option value="2">200</option>
                                  </select>
                                  <label class="animate_label">Yürüş (km)</label>
                                  <p class="from_text">-qədər</p>
		                        		</div>
                              </div>

                              <div class="col-md-3  from_to pl-0">
                                <div class="form-group align-center">
		                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
		                        				<option value=""></option>
		                        				<option value="1">100</option>
		                        				<option value="2">200</option>
                                  </select>
                                  <label class="animate_label">Mühərrik a.g.</label>
                                  <p class="from_text">-dən</p>
		                        		</div>
                              </div>

                              <div class="col-md-3 from_to ">
                                <div class="form-group align-center">
		                        			<select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
		                        				<option value=""></option>
		                        				<option value="1">100</option>
		                        				<option value="2">200</option>
                                  </select>
                                  <label class="animate_label">Mühərrik a.g.</label>
                                  <p class="from_text">-qədər</p>
		                        		</div>
                              </div>

                              <div class="col-md-6 pr-0">
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
                                  <h3 class="search_mid_title">Eksteryer</h3>
                                </div>
                              </div>

                              <div class="col-md-12">
                                <div class="row">

                                  <div class="col-md-4 pl-0">
                                    <div class="form-group">
                                      <select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                                        <option value=""></option>
                                        <option value="1">100</option>
                                        <option value="2">200</option>
                                      </select>
                                      <label  class="animate_label">Disklərin ölçüsü</label>
                                    </div>
                                  </div>

                                  <div class="col-md-8 pr-0 checkbox_inputs checkbox_inputs2">
                                  <div class="row">
	                        				<div>
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Yan güzgülərin qızdırıcısı</p>
	                        						</label>
	                        					</div>
	                        				</div>
	                        				<div>
	                        					<div class="form-group">
	                        						<label>
	                        							<input type="checkbox" name="" class="form-control">
	                        							<p>Ksenon lampalar</p>
	                        						</label>
	                        					</div>
	                        				</div>
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
                                  <h3 class="search_mid_title">İnteryer</h3>
                                </div>
                              </div>
                              
                              <div class="col-md-12 specs_checkbox">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Kondisioner</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Park radar</p>
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
                                      <p>Lyuk</p>
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
                                      <p>Oturacaqların ventilyasiyası</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Yan pərdələr</p>
                                    </label>
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
                                  <h3 class="search_mid_title">Multimedia</h3>
                                </div>
                              </div>
                              
                              <div class="col-md-12 specs_checkbox">
                                <div class="row">
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>AUX</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Monitor</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Arxa oturacaqlarda multimedia</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>USB</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>GPS naviqasiya</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Bluetooth</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>TV</p>
                                    </label>
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
                                      <p>Mərkəzi qapanma</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Siqnalizasiya</p>
                                    </label>
                                  </div>
                                  <div class="col-md-4 ">
                                    <label>
                                      <input type="checkbox" class="form-control">
                                      <p>Yağış sensoru</p>
                                    </label>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                          </div>
                          <!---->
							<!----> 
							<div class="col-md-12 search_more_and_sug">
								<div class="row">
									<div class="col-md-6 search_show_more pl-0">
										<button type="button" class="forms_show_more">
											Ətraflı axtarış
											<svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.42" viewBox="0 0 12 7.42">
												<path id="prefix__chevron-down" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6-6-6z" transform="translate(-6 -8.58)" style="fill:#157ee1"/>
											</svg>
                    </button>
                    <button type="button" class="forms_show_less">
                      Daha az göstər
											<svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.42" viewBox="0 0 12 7.42">
                          <path id="prefix__chevron-down" d="M7.41 16L12 11.41 16.59 16 18 14.58l-6-6-6 6z" transform="translate(-6 -8.58)" style="fill:#157ee1"/>
                      </svg>
										</button>
									</div>
									<div class="col-md-6 search_show_all_suggestions sag pr-0">
										<a href="#" class="show_all_suggestions">Bütün təklifləri göstər (2390)
											<svg xmlns="http://www.w3.org/2000/svg" width="7.41" height="12" viewBox="0 0 7.41 12">
												<path id="prefix__chevron-right" d="M8.59 16.58L13.17 12 8.59 7.41 10 6l6 6-6 6z" transform="translate(-8.59 -6)" style="fill:#fff"/>
											</svg>
										</a>
									</div>
								</div>
							</div>
            </form>
					</div>
					
				</div>
			</div>
		</div>
		
	</section>
	<section class="items_section full">
          <div class="container">
            <div class="row">
              <!-- heading-->
              <div class="col-md-12 item_heading">
                <div class="col-md-8 pl-0">
                  <h2 class="item_main_title">Oxşar elanlar</h2>
                </div>

              </div>
              <!-- heading-->
              <div class="main_cards col-md-12">
                <div class="row">
                <div class="col-md-4 col-sm-6 col-lg-3">
                  <span class="card-like-icon"></span>
                  <a href="#" class="main_card_link premium">
                    <span class="card-premium-icon"></span>
                    <div class="card_imgbox full">
                      <img src="assets/images/vip1.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Ferrari 458 Speciale</h5>
                      <div class="card-desc-icons">
                        <span class="card_date">
                          <i></i>Il:2019
                        </span>
                        <span class="card_fuel flex-center">
                          <i></i>1.4 l
                        </span>
                        <span class="card_way flex-end">
                          <i></i>900 km
                        </span>
                      </div>
                      <div class="card-desc-icons card-desc-bottom">
                        <span class="card_region">
                          <i></i>Sumqayıt
                        </span>
                        <span class="card_year">
                          <i></i>08.01.20
                        </span>
                        
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3">
                  <span class="card-like-icon"></span>
                  <a href="#" class="main_card_link premium">
                    <span class="card-premium-icon"></span>
                    <div class="card_imgbox full">
                      <img src="assets/images/vip2.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Yellow Jaguar</h5>
                      <div class="card-desc-icons">
                        <span class="card_date">
                          <i></i>Il:2019
                        </span>
                        <span class="card_fuel flex-center">
                          <i></i>1.4 l
                        </span>
                        <span class="card_way flex-end">
                          <i></i>900 km
                        </span>
                      </div>
                      <div class="card-desc-icons card-desc-bottom">
                        <span class="card_region">
                          <i></i>Sumqayıt
                        </span>
                        <span class="card_year">
                          <i></i>08.01.20
                        </span>
                        
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3">
                  <span class="card-like-icon"></span>
                  <a href="#" class="main_card_link">
                    <span class="card-premium-icon"></span>
                    <div class="card_imgbox full">
                      <img src="assets/images/vip3.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Hyundai Sonata</h5>
                      <div class="card-desc-icons">
                        <span class="card_date">
                          <i></i>Il:2019
                        </span>
                        <span class="card_fuel flex-center">
                          <i></i>1.4 l
                        </span>
                        <span class="card_way flex-end">
                          <i></i>900 km
                        </span>
                      </div>
                      <div class="card-desc-icons card-desc-bottom">
                        <span class="card_region">
                          <i></i>Sumqayıt
                        </span>
                        <span class="card_year">
                          <i></i>08.01.20
                        </span>
                        
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3">
                  <span class="card-like-icon"></span>
                  <a href="#" class="main_card_link premium">
                    <span class="card-premium-icon"></span>
                    <div class="card_imgbox full">
                      <img src="assets/images/vip4.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Porche 948 GT</h5>
                      <div class="card-desc-icons">
                        <span class="card_date">
                          <i></i>Il:2019
                        </span>
                        <span class="card_fuel flex-center">
                          <i></i>1.4 l
                        </span>
                        <span class="card_way flex-end">
                          <i></i>900 km
                        </span>
                      </div>
                      <div class="card-desc-icons card-desc-bottom">
                        <span class="card_region">
                          <i></i>Sumqayıt
                        </span>
                        <span class="card_year">
                          <i></i>08.01.20
                        </span>
                        
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3">
                  <span class="card-like-icon"></span>
                  <a href="#" class="main_card_link premium">
                    <span class="card-premium-icon"></span>
                    <div class="card_imgbox full">
                      <img src="assets/images/vip5.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Nissan Altima</h5>
                      <div class="card-desc-icons">
                        <span class="card_date">
                          <i></i>Il:2019
                        </span>
                        <span class="card_fuel flex-center">
                          <i></i>1.4 l
                        </span>
                        <span class="card_way flex-end">
                          <i></i>900 km
                        </span>
                      </div>
                      <div class="card-desc-icons card-desc-bottom">
                        <span class="card_region">
                          <i></i>Sumqayıt
                        </span>
                        <span class="card_year">
                          <i></i>08.01.20
                        </span>
                        
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3">
                  <span class="card-like-icon"></span>
                  <a href="#" class="main_card_link premium">
                    <span class="card-premium-icon"></span>
                    <div class="card_imgbox full">
                      <img src="assets/images/vip6.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Chevrolet Truck</h5>
                      <div class="card-desc-icons">
                        <span class="card_date">
                          <i></i>Il:2019
                        </span>
                        <span class="card_fuel flex-center">
                          <i></i>1.4 l
                        </span>
                        <span class="card_way flex-end">
                          <i></i>900 km
                        </span>
                      </div>
                      <div class="card-desc-icons card-desc-bottom">
                        <span class="card_region">
                          <i></i>Sumqayıt
                        </span>
                        <span class="card_year">
                          <i></i>08.01.20
                        </span>
                        
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3">
                  <span class="card-like-icon"></span>
                  <a href="#" class="main_card_link premium">
                    <span class="card-premium-icon"></span>
                    <div class="card_imgbox full">
                      <img src="assets/images/vip7.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Bentley Silver</h5>
                      <div class="card-desc-icons">
                        <span class="card_date">
                          <i></i>Il:2019
                        </span>
                        <span class="card_fuel flex-center">
                          <i></i>1.4 l
                        </span>
                        <span class="card_way flex-end">
                          <i></i>900 km
                        </span>
                      </div>
                      <div class="card-desc-icons card-desc-bottom">
                        <span class="card_region">
                          <i></i>Sumqayıt
                        </span>
                        <span class="card_year">
                          <i></i>08.01.20
                        </span>
                        
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3">
                  <span class="card-like-icon"></span>
                  <a href="#" class="main_card_link premium">
                    <span class="card-premium-icon"></span>
                    <div class="card_imgbox full">
                      <img src="assets/images/vip8.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Nissan QXC 535</h5>
                      <div class="card-desc-icons">
                        <span class="card_date">
                          <i></i>Il:2019
                        </span>
                        <span class="card_fuel flex-center">
                          <i></i>1.4 l
                        </span>
                        <span class="card_way flex-end">
                          <i></i>900 km
                        </span>
                      </div>
                      <div class="card-desc-icons card-desc-bottom">
                        <span class="card_region">
                          <i></i>Sumqayıt
                        </span>
                        <span class="card_year">
                          <i></i>08.01.20
                        </span>
                        
                      </div>
                    </div>
                  </a>
                </div>
                <!-- cards end-->
              </div>

              
			</div>
			
			<!----> 
			<div class="col-md-12 pagination_container">
					<nav aria-label="Page navigation example">
					  <ul class="pagination">
					    <li class="page-item page-prev">
					      <a class="page-link" href="#" aria-label="Previous">
					        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
							    <path id="prefix__arrow-right" d="M14 8.449v1.262H6.424L9.9 13.184l-.9.9-5-5 5-5 .9.9-3.476 3.465z" transform="translate(-4 -4.08)" style="fill:#004445"></path>
							</svg>
					      </a>
					    </li>
					    <li class="page-item "><a class="page-link" href="#">4</a></li>
					    <li class="page-item"><a class="page-link" href="#">5</a></li>
					    <li class="page-item active"><a class="page-link" href="#">6</a></li>
					    <li class="page-item"><a class="page-link" href="#">7</a></li>
					    <li class="page-item"><a class="page-link" href="#">8</a></li>
					    <li class="page-item"><a class="page-link" href="#">9</a></li>
					    <li class="page-item"><a class="page-link" href="#">...</a></li>
					    <li class="page-item"><a class="page-link" href="#">17</a></li>
					    <li class="page-item page-next">
					      <a class="page-link" href="#" aria-label="Next">
					        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
							    <path id="prefix__arrow-right" d="M4 8.449v1.262h7.576L8.1 13.184l.9.9 5-5-5-5-.9.9 3.472 3.472z" transform="translate(-4 -4.08)" style="fill:#004445"></path>
							</svg>
					      </a>
					    </li>
					  </ul>
					</nav>
				</div>
			<!---->
        	</div>
          </div>
        </section>
</main>

<?php
include_once 'template/footer.php';
?>