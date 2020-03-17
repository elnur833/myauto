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
						<div class="col-md-12 main_filters">
                            <div class="row">
                                <div class="pl-0 col-md-6 car_types search_car_types">
                                    <input type="radio" name="cartype" value="butun" data-txt="Bütün" checked="">
                                    <input type="radio" name="cartype" value="yeni" data-txt="Yeni">
                                    <input type="radio" name="cartype" value="islenmis" data-txt="İşlənmiş">
                                    <a href="#" class="active">Kömək</a>
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
                        <form class="full">
                        	<!---->
                        	<div class="col-md-12">
	                        	<div class="row">
                                    <div class="col-md-12">
                                        <div class="row car_check_list">

                                            <div class="help_car_box">
                                                <label for="pickup_check">
                                                    <input type="checkbox" id="pickup_check" class="img_checkbox" checked>
                                                    <div class="help_car_box_inner">
                                                        <img src="assets/images/k1.png" alt="">
                                                    </div>
                                                    <p>Pickup</p>
                                                </label>
                                            </div>

                                            <div class="help_car_box">
                                                <label for="kupe_check">
                                                    <input type="checkbox" id="kupe_check" class="img_checkbox">
                                                    <div class="help_car_box_inner">
                                                        <img src="assets/images/k2.png" alt="">
                                                    </div>
                                                    <p>Kupe</p>
                                                </label>
                                            </div>

                                            <div class="help_car_box">
                                                <label for="minivan_check">
                                                    <input type="checkbox" id="minivan_check" class="img_checkbox">
                                                    <div class="help_car_box_inner">
                                                        <img src="assets/images/k3.png" alt="">
                                                    </div>
                                                    <p>Minivan</p>
                                                </label>
                                            </div>

                                            <div class="help_car_box">
                                                <label for="kabriolet_check">
                                                    <input type="checkbox" id="kabriolet_check" class="img_checkbox">
                                                    <div class="help_car_box_inner">
                                                        <img src="assets/images/k4.png" alt="">
                                                    </div>
                                                    <p>Kabriole</p>
                                                </label>
                                            </div>

                                            <div class="help_car_box">
                                                <label for="furqon_check">
                                                    <input type="checkbox" id="furqon_check" class="img_checkbox">
                                                    <div class="help_car_box_inner">
                                                        <img src="assets/images/k5.png" alt="">
                                                    </div>
                                                    <p>Furqon</p>
                                                </label>
                                            </div>

                                            <div class="help_car_box">
                                                <label for="xetcbek_check">
                                                    <input type="checkbox" id="xetcbek_check" class="img_checkbox">
                                                    <div class="help_car_box_inner">
                                                        <img src="assets/images/k6.png" alt="">
                                                    </div>
                                                    <p>Xetcbek</p>
                                                </label>
                                            </div>

                                            <div class="help_car_box">
                                                <label for="sedan_check">
                                                    <input type="checkbox" id="sedan_check" class="img_checkbox">
                                                    <div class="help_car_box_inner">
                                                        <img src="assets/images/k10.png" alt="">
                                                    </div>
                                                    <p>Sedan</p>
                                                </label>
                                            </div>

                                            <div class="help_car_box">
                                                <label for="vnedorojnik_check">
                                                    <input type="checkbox" id="vnedorojnik_check" class="img_checkbox">
                                                    <div class="help_car_box_inner">
                                                        <img src="assets/images/k7.png" alt="">
                                                    </div>
                                                    <p>Vnedorojnik</p>
                                                </label>
                                            </div>

                                            <div class="help_car_box">
                                                <label for="liftbek_check">
                                                    <input type="checkbox" id="liftbek_check" class="img_checkbox">
                                                    <div class="help_car_box_inner">
                                                        <img src="assets/images/k8.png" alt="">
                                                    </div>
                                                    <p>Liftbek</p>
                                                </label>
                                            </div>

                                            <div class="help_car_box">
                                                <label for="universal_check">
                                                    <input type="checkbox" id="universal_check" class="img_checkbox">
                                                    <div class="help_car_box_inner">
                                                        <img src="assets/images/k9.png" alt="">
                                                    </div>
                                                    <p>Universal</p>
                                                </label>
                                            </div>

                                            <div class="help_car_box">
                                                <label for="track_check">
                                                    <input type="checkbox" id="track_check" class="img_checkbox">
                                                    <div class="help_car_box_inner">
                                                        <img src="assets/images/k1.png" alt="">
                                                    </div>
                                                    <p>Track</p>
                                                </label>
                                            </div>

                                            <div class="help_car_box">
                                                <label for="mini_check">
                                                    <input type="checkbox" id="mini_check" class="img_checkbox">
                                                    <div class="help_car_box_inner">
                                                        <img src="assets/images/k2.png" alt="">
                                                    </div>
                                                    <p>Mini</p>
                                                </label>
                                            </div>

                                        </div>
                                    </div>
	                        		
                          <!---->
							<!----> 
							<div class="col-md-12 search_more_and_sug">
								<div class="row">
									<div class="col-md-6 search_show_more pl-0">
                        <div class=" cat_price ">
                          <input type="text" name=""  class="shop_price_range">
                          <span class="ragne_min">0</span>
                          <span class="ragne_max">50 000</span>
                        </div>
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
                  <h2 class="item_main_title">Axtarışın nəticəsi</h2>
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