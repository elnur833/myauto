<?php
include_once 'template/header.php';
?>

    <main class="main" role="main">

        <div class="main_banner" style="background-image: url(assets/images/main_banner.png);"></div>
        <section class="main_section full">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                    <h1 class="main_title">Dəqiqələr içində arzuladığın avtomobili tap.</h1>

                    <form>
                        <div class=" main_search_inp">
                            <input type="search" name="" placeholder="Axtarış üçün ən azı bir söz daxil edin">
                            <button type="submit">Axtar</button>
                        </div>
                    </form>

                    <h3 class="banner_small_title">Yüngül avtomobillər</h3>
                    
                    <div class="main_banner_filterbox">
                    <!-- fmain banner filters-->
                        <div class="col-md-12 main_filters">
                            <div class="row">
                                <div class="pl-0 col-md-6 car_types">
                                    <input type="radio" name="cartype" value="butun" data-txt="Bütün" checked>
                                    <input type="radio" name="cartype" value="yeni" data-txt="Yeni">
                                    <input type="radio" name="cartype" value="islenmis" data-txt="İşlənmiş">
                                </div>

                                <div class="col-md-6 pr-0 main_filter_tabs " >
                                    <a href="#main_banner_tab_marka" class="active">
                                        <span>
                                          <i></i>
                                        </span>
                                        <p>Marka</p>
                                    </a>
                                    <a href="#main_banner_tab_filter">
                                        <span>
                                          <i></i>
                                        </span>
                                        <p>Filter</p>
                                    </a>
                                    <a href="#main_banner_tab_komek">
                                        <span>
                                          <i></i>
                                        </span>
                                        <p>Kömək</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <!-- fmain banner filters-->
                    <!-- main banner model images-->


                    <!-- main banner marka tab-->
                    <div id="main_banner_tab_marka" class="main_banner_tab active">
                    <div class="main_banner_model_images col-md-12">
                      <div class="row">
                        <a href="#">
                          <img src="assets/images/model1.png">
                        </a>
                        <a href="#">
                          <img src="assets/images/model2.png">
                        </a>
                        <a href="#">
                          <img src="assets/images/model3.png">
                        </a>
                        <a href="#">
                          <img src="assets/images/model4.png">
                        </a>
                        <a href="#">
                          <img src="assets/images/model5.png">
                        </a>
                        <a href="#">
                          <img src="assets/images/model6.png">
                        </a>
                        <a href="#">
                          <img src="assets/images/model7.png">
                        </a>
                        <a href="#">
                          <img src="assets/images/model8.png">
                        </a>
                        <a href="#">
                          <img src="assets/images/model9.png">
                        </a>
                        <a href="#" class="more_model_img">
                          <span>14+</span>
                        </a>
                      </div>
                    </div>
                    <!-- main banner model images-->
                    <!-- main banner model names -->
                      <div class="col-md-12 main_ban_modelnnames">
                        <div class="row">
                          <a href="#">Aston martin<span>(9345)</span></a>
                          <a href="#">Ferrari<span>(9345)</span></a>
                          <a href="#">Rolls-Roys<span>(9345)</span></a>
                          <a href="#">Tesla<span>(9345)</span></a>
                          <a href="#">Subaru<span>(9345)</span></a>
                          <a href="#">Audi<span>(9345)</span></a>
                          <a href="#">Ford<span>(9345)</span></a>
                          <a href="#">Toyota<span>(9345)</span></a>
                          <a href="#">Lambroghini<span>(9345)</span></a>
                          <a href="#">Volvo<span>(9345)</span></a>
                          <a href="#">BMW<span>(9345)</span></a>
                          <a href="#">Honda<span>(9345)</span></a>
                          <a href="#">Volkswagen<span>(9345)</span></a>
                          <a href="#">Renault<span>(9345)</span></a>
                          <a href="#">Suzuki<span>(9345)</span></a>
                          <a href="#">Cadillac<span>(9345)</span></a>
                          <a href="#">Mercedes<span>(9345)</span></a>
                          <a href="#">Kia<span>(9345)</span></a>
                          <a href="#">Skoda<span>(9345)</span></a>
                          <a href="#">Opel<span>(9345)</span></a>
                          <a href="#">Chevrolet<span>(9345)</span></a>
                          <a href="#">Nissan<span>(9345)</span></a>
                          <a href="#">Hyundai<span>(9345)</span></a>
                          <a href="#">Lexus<span>(9345)</span></a>
                          <a href="#">Peugeot<span>(9345)</span></a>
                          <a href="#">Datsun<span>(9345)</span></a>
                          <a href="#">Prche<span>(9345)</span></a>
                          <a href="#">Ford<span>(9345)</span></a>
                          <a href="#">Range Rover<span>(9345)</span></a>
                          <a href="#" class="mbm_all_models">Bütün markalar
                            <svg xmlns="http://www.w3.org/2000/svg" width="6.175" height="10" viewBox="0 0 6.175 10">
                                <path id="prefix__chevron-right" d="M8.59 14.817L12.407 11 8.59 7.175 9.765 6l5 5-5 5z" transform="translate(-8.59 -6)" style="fill:#157ee1"/>
                            </svg>
                          </a>
                        </div>
                      </div>
                    <!-- main banner model names -->
                    <div class="col-md-12 main_banner_filter_bottom">
                      <div class="row">
                        <div class="col-md-6 pl-0">
                        <div class=" cat_price ">
                          <input type="text" name=""  class="shop_price_range">
                          <span class="ragne_min">0</span>
                          <span class="ragne_max">50 000</span>
                        </div>
                        </div>
                        <div class="col-md-6 pr-0 sag">
                          <a href="#" class="show_all_suggestions">Bütün təklifləri göstər (2390)
                          <svg xmlns="http://www.w3.org/2000/svg" width="7.41" height="12" viewBox="0 0 7.41 12">
                              <path id="prefix__chevron-right" d="M8.59 16.58L13.17 12 8.59 7.41 10 6l6 6-6 6z" transform="translate(-8.59 -6)" style="fill:#fff"/>
                          </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    </div>
                    <!-- main banner marka tab-->


                    <!-- main banner filter tab-->
                    <div id="main_banner_tab_filter" class="main_banner_tab">
                    <form class="full">
                          <!---->
                         
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
                                          <label class="animate_label">Model</label>
                                      </div>
                                  </div>

                                  <div class="col-md-4 pr-0">
                                      <div class="form-group">
                                          <select class="form-control floating-select" value="" onclick="this.setAttribute('value', this.value);">
                                              <option value=""></option>
                                              <option value="1">Baki</option>
                                              <option value="2">Gence</option>
                                          </select>
                                          <label class="animate_label">Şəhər</label>
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
                                                  <input type="text" name="" class="form-control floating-input" placeholder=" ">
                                                  <label class="animate_label">Qiymət</label>
                                                  <p class="from_text">-dan</p>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group align-center">
                                                  <input type="text" name="" class="form-control floating-input" placeholder=" ">
                                                  <label class="animate_label">Qiymət</label>
                                                  <p class="to_text">-a</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-md-4 pr-0 checkbox_inputs">
                                      <div class="row">
                                          <div>
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
                                              <div class="scl_cats cat_colors full">
                                                  <input type="checkbox" name="" data-color="#fff" class="white_color" style="background-color: rgb(255, 255, 255);">
                                                  <input type="checkbox" name="" data-color="#bdbec0" style="background-color: rgb(189, 190, 192);">
                                                  <input type="checkbox" name="" data-color="#58585a" style="background-color: rgb(88, 88, 90);">
                                                  <input type="checkbox" name="" data-color="#000" class="black_color" style="background-color: rgb(0, 0, 0);">
                                                  <input type="checkbox" name="" data-color="#2d3192" style="background-color: rgb(45, 49, 146);">
                                                  <input type="checkbox" name="" data-color="#92278f" style="background-color: rgb(146, 39, 143);">
                                                  <input type="checkbox" name="" data-color="#ef67a7" style="background-color: rgb(239, 103, 167);">
                                                  <input type="checkbox" name="" data-color="#fef200" style="background-color: rgb(254, 242, 0);">
                                                  <input type="checkbox" name="" data-color="#f8931d" style="background-color: rgb(248, 147, 29);">
                                                  <input type="checkbox" name="" data-color="#ed1b24" style="background-color: rgb(237, 27, 36);">
                                                  <input type="checkbox" name="" data-color="#751016" style="background-color: rgb(117, 16, 22);">
                                                  <input type="checkbox" name="" data-color="#121bf3" style="background-color: rgb(18, 27, 243);">
                                                  <input type="checkbox" name="" data-color="#57adff" style="background-color: rgb(87, 173, 255);">
                                                  <input type="checkbox" name="" data-color="#51ff80" style="background-color: rgb(81, 255, 128);">
                                                  <input type="checkbox" name="" data-color="#05b534" style="background-color: rgb(5, 181, 52);">
                                                  <input type="checkbox" name="" data-color="#bdbec0" style="background-color: rgb(189, 190, 192);">
                                                  <input type="checkbox" name="" data-color="#58585a" style="background-color: rgb(88, 88, 90);">
                                                  <input type="checkbox" name="" data-color="#2d3192" style="background-color: rgb(45, 49, 146);">
                                                  <input type="checkbox" name="" data-color="#92278f" style="background-color: rgb(146, 39, 143);">
                                                  <input type="checkbox" name="" data-color="#ef67a7" style="background-color: rgb(239, 103, 167);">
                                                  <input type="checkbox" name="" data-color="#fef200" style="background-color: rgb(254, 242, 0);">
                                                  <input type="checkbox" name="" data-color="#f8931d" style="background-color: rgb(248, 147, 29);">
                                                  <input type="checkbox" name="" data-color="#ed1b24" style="background-color: rgb(237, 27, 36);">
                                                  <input type="checkbox" name="" data-color="#751016" style="background-color: rgb(117, 16, 22);">
                                                  <input type="checkbox" name="" data-color="#121bf3" style="background-color: rgb(18, 27, 243);">
                                                  <input type="checkbox" name="" data-color="#57adff" style="background-color: rgb(87, 173, 255);">
                                                  <input type="checkbox" name="" data-color="#51ff80" style="background-color: rgb(81, 255, 128);">
                                                  <input type="checkbox" name="" data-color="#05b534" style="background-color: rgb(5, 181, 52);">
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
                                                      <label class="animate_label">Disklərin ölçüsü</label>
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
                                              <path id="prefix__chevron-down" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6-6-6z" transform="translate(-6 -8.58)" style="fill:#157ee1"></path>
                                          </svg>
                                      </button>
                                      <button type="button" class="forms_show_less">
                                          Daha az göstər
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.42" viewBox="0 0 12 7.42">
                                              <path id="prefix__chevron-down" d="M7.41 16L12 11.41 16.59 16 18 14.58l-6-6-6 6z" transform="translate(-6 -8.58)" style="fill:#157ee1"></path>
                                          </svg>
                                      </button>
                                  </div>
                                  <div class="col-md-6 search_show_all_suggestions sag pr-0">
                                      <a href="#" class="show_all_suggestions">Bütün təklifləri göstər (2390)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="7.41" height="12" viewBox="0 0 7.41 12">
                                              <path id="prefix__chevron-right" d="M8.59 16.58L13.17 12 8.59 7.41 10 6l6 6-6 6z" transform="translate(-8.59 -6)" style="fill:#fff"></path>
                                            </svg>
                                          </a>
                                  </div>
                              </div>
                          </div>
                      </form>
                    </div>

                    <!-- main banner filter tab-->


                    <!-- main banner komek tab-->

                    <div id="main_banner_tab_komek" class="main_banner_tab">
                    <form class="full">
                          <!---->
                          <div class="col-md-12">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="row car_check_list">

                                          <div class="help_car_box">
                                              <label for="pickup_check">
                                                  <input type="checkbox" id="pickup_check" class="img_checkbox" checked="">
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
                                              <path id="prefix__chevron-right" d="M8.59 16.58L13.17 12 8.59 7.41 10 6l6 6-6 6z" transform="translate(-8.59 -6)" style="fill:#fff"></path>
                                            </svg>
                                          </a>
                                          </div>
                                      </div>
                                  </div>

                              </div>

                          </div>
                      </form>
                    </div>
                    <!-- main banner komek tab-->


                    </div>
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
                  <h2 class="item_main_title">VIP elanlar</h2>
                </div>
                <div class="col-md-4 pr-0 title_links">
                  <a href="#" class="is_refresh">Yenilə</a>
                  <a href="#" class="title_show_more">Daha çox göstər (38)</a>
                </div>
              </div>
              <!-- heading-->
              <div class="main_cards col-md-12">
                <div class="row">
                <div class="col-md-4 col-sm-6 col-lg-3">
                  <span class="card-like-icon"></span>
                  <div class="main_card_link premium">
                    <span class="card-premium-icon"></span>
                    <div class="card_imgbox full">
                      <img src="assets/images/vip1.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5><a href="#">Ferrari 458 Speciale</a></h5>
                      <div class="card-desc-icons">
                        <span class="card_date">
                        <a href="#"><i></i>Il:2019</a>
                        </span>
                        <span class="card_fuel flex-center">
                        <a href="#"><i></i>1.4 lM</a>
                        </span>
                        <span class="card_way flex-end">
                        <a href="#"><i></i>900 km</a>
                        </span>
                      </div>
                      <div class="card-desc-icons card-desc-bottom">
                        <span class="card_region">
                        <a href="#"><i></i>Sumqayıt</a>
                        </span>
                        <span class="card_year">
                        <a href="#"><i></i>08.01.20</a>
                        </span>
                        
                      </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3">
                  <span class="card-like-icon"></span>
                  <div class="main_card_link premium">
                    <span class="card-premium-icon"></span>
                    <div class="card_imgbox full">
                      <img src="assets/images/vip2.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5><a href="#">Yellow Jaguar</a></h5>
                      <div class="card-desc-icons">
                        <span class="card_date">
                        <a href="#"><i></i>Il:2019</a>
                        </span>
                        <span class="card_fuel flex-center">
                        <a href="#"><i></i>1.4 l</a>
                        </span>
                        <span class="card_way flex-end">
                        <a href="#"><i></i>900 km</a>
                        </span>
                      </div>
                      <div class="card-desc-icons card-desc-bottom">
                        <span class="card_region">
                        <a href="#"><i></i>Sumqayıt</a>
                        </span>
                        <span class="card_year">
                        <a href="#"><i></i>08.01.20</a>
                        </span>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3">
                  <span class="card-like-icon"></span>
                  <div class="main_card_link">
                    <span class="card-premium-icon"></span>
                    <div class="card_imgbox full">
                      <img src="assets/images/vip3.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5><a href="#">Hyundai Sonata</a></h5>
                      <div class="card-desc-icons">
                        <span class="card_date">
                        <a href="#"> <i></i>Il:2019</a>
                        </span>
                        <span class="card_fuel flex-center">
                        <a href="#"><i></i>1.4 l</a>
                        </span>
                        <span class="card_way flex-end">
                        <a href="#"><i></i>900 km</a>
                        </span>
                      </div>
                      <div class="card-desc-icons card-desc-bottom">
                        <span class="card_region">
                        <a href="#"> <i></i>Sumqayıt</a>
                        </span>
                        <span class="card_year">
                        <a href="#"><i></i>08.01.20</a>
                        </span>
                        
                      </div>
                    </div>
                  </div >
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3">
                  <span class="card-like-icon"></span>
                  <div class="main_card_link premium">
                    <span class="card-premium-icon"></span>
                    <div class="card_imgbox full">
                      <img src="assets/images/vip4.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5><a href="#">Porche 948 GT</a></h5>
                      <div class="card-desc-icons">
                        <span class="card_date">
                        <a href="#"><i></i>Il:2019</a>
                        </span>
                        <span class="card_fuel flex-center">
                        <a href="#"><i></i>1.4 l</a>
                        </span>
                        <span class="card_way flex-end">
                        <a href="#"><i></i>900 km</a>
                        </span>
                      </div>
                      <div class="card-desc-icons card-desc-bottom">
                        <span class="card_region">
                        <a href="#"><i></i>Sumqayıt</a>
                        </span>
                        <span class="card_year">
                        <a href="#"><i></i>08.01.20</a>
                        </span>
                        
                      </div>
                    </div>
                  </div >
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

              <!-- en son elanlar-->
              <div class="col-md-12 item_heading">
                <div class="col-md-8 pl-0">
                  <h2 class="item_main_title">Ən son elanlar</h2>
                </div>
                <div class="col-md-4 pr-0 title_links">
                  <a href="#" class="is_refresh">Yenilə</a>
                  <a href="#" class="title_show_more">Daha çox göstər (38)</a>
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
                      <img src="assets/images/last1.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>White Tiger</h5>
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
                      <img src="assets/images/last3.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Bentley Apachi</h5>
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
                      <img src="assets/images/last4.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Jaguar GTX 462</h5>
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
              <!-- Moto-->
              <div class="col-md-12 item_heading">
                <div class="col-md-8 pl-0">
                  <h2 class="item_main_title">Moto</h2>
                </div>
                <div class="col-md-4 pr-0 title_links">
                  <a href="#" class="is_refresh">Yenilə</a>
                  <a href="#" class="title_show_more">Daha çox göstər (38)</a>
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
                      <img src="assets/images/moto1.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Off-road motorsikl</h5>
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
                      <img src="assets/images/moto2.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Motorsikl</h5>
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
                      <img src="assets/images/moto3.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Skooter</h5>
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
                      <img src="assets/images/moto4.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Qar motorsiklı</h5>
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
              <!-- kommersiya -->
              <div class="col-md-12 item_heading">
                <div class="col-md-8 pl-0">
                  <h2 class="item_main_title">Kommersiya</h2>
                </div>
                <div class="col-md-4 pr-0 title_links">
                  <a href="#" class="is_refresh">Yenilə</a>
                  <a href="#" class="title_show_more">Daha çox göstər (38)</a>
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
                      <img src="assets/images/kom1.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Flix Autobus</h5>
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
                      <img src="assets/images/kom2.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Ekskovator</h5>
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
                      <img src="assets/images/kom3.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Auto Kran</h5>
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
                      <img src="assets/images/kom4.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Buldozer</h5>
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
              <!-- ehtiyyat hisseleri-->
              <div class="col-md-12 item_heading">
                <div class="col-md-8 pl-0">
                  <h2 class="item_main_title">Ehtiyat hissələri</h2>
                </div>
                <div class="col-md-4 pr-0 title_links">
                  <a href="#" class="is_refresh">Yenilə</a>
                  <a href="#" class="title_show_more">Daha çox göstər (38)</a>
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
                      <img src="assets/images/eht1.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Suzuki Bumpers</h5>
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
                      <img src="assets/images/eht2.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Radiator</h5>
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
                      <img src="assets/images/eht3.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Tailgate scirocco</h5>
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
                      <img src="assets/images/eht4.png">
                    </div>
                    <div class="card_price">
                      <span>3000</span>
                    </div>
                    <div class="card_desc">
                      <h5>Arxa işıqlar</h5>
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
            <!-- ehtiyyat end-->
            </div>
          </div>
        </section>

        <section class="main_bloq_section full">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="row bloq_catsandtitle">
                  <div class="col-md-4">
                    <h2 class="main_bloq_title">Blog</h2>
                  </div>
                  <div class="col-md-8">
                    <div class="main_blog_cats">
                      <a href=".mbcat_all" class="active">Butun</a>
                      <a href=".mbcat_auto" >Avtomobil</a>
                      <a href=".mbcat_aksesuar" >Aksesuar</a>
                      <a href=".mbcat_moto" >Moto</a>
                    </div>
                </div>
                </div>
              </div>
                  <!-- main blog tab-->
                  <div class="mainblogtab active mbcat_all col-md-12">
                    <div class="row">

                    <!-- mb big-->
                    <div class="col-md-6">
                      <div class="main_blogbox big_blogbox">
                        <a href="#" class="full">
                        <div class="imgbox">
                          <img src="assets/images/bigblog.png">
                        </div>
                        <div class="bigblog_desc">
                          <span class="blogdate">
                            <i></i>08.01.20, 16:00
                          </span>
                          <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını kilidə salacaq yeni
                              açar növü istehsal etdi</h3>
                        </div>
                      </a>
                      </div>
                    </div>
                    <!-- mb big end-->
                    <!-- mb smalls-->
                    <div class="col-md-6">
                      <div class="row">

                        <div class="col-md-6">
                          <div class="main_smallblog">
                            <a href="#" class="full">
                            <div class="mainsmallblogimg">
                              <img src="assets/images/mb2.png">
                            </div>
                            <div class="blogdesc">
                              <span class="blogdate">
                              <i></i>08.01.20, 16:00
                              </span>
                              <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını</h3>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="main_smallblog">
                            <a href="#" class="full">
                            <div class="mainsmallblogimg">
                              <img src="assets/images/mb3.png">
                            </div>
                            <div class="blogdesc">
                              <span class="blogdate">
                              <i></i>08.01.20, 16:00
                              </span>
                              <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını </h3>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="main_smallblog">
                            <a href="#" class="full">
                            <div class="mainsmallblogimg">
                              <img src="assets/images/mb4.png">
                            </div>
                            <div class="blogdesc">
                              <span class="blogdate">
                              <i></i>08.01.20, 16:00
                              </span>
                              <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını </h3>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="main_smallblog">
                            <div class="mainsmallblogimg">
                              <a href="#" class="full">
                              <img src="assets/images/mb5.png">
                            </div>
                            <div class="blogdesc">
                              <span class="blogdate">
                              <i></i>08.01.20, 16:00
                              </span>
                              <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını </h3>
                              </div>
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                    <!-- mb smalls end--></div></div>

                  <!-- main blog tab -->

                  <div class="mainblogtab mbcat_auto col-md-12">
                    <div class="row">

                    <!-- mb big-->
                    <div class="col-md-6">
                      <div class="main_blogbox big_blogbox">
                        <a href="#" class="full">
                        <div class="imgbox">
                          <img src="assets/images/bigblog.png">
                        </div>
                        <div class="bigblog_desc">
                          <span class="blogdate">
                            <i></i>08.01.20, 16:00
                          </span>
                          <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını kilidə salacaq yeni
                              açar növü istehsal etdi</h3>
                        </div>
                      </a>
                      </div>
                    </div>
                    <!-- mb big end-->
                    <!-- mb smalls-->
                    <div class="col-md-6">
                      <div class="row">

                        <div class="col-md-6">
                          <div class="main_smallblog">
                            <a href="#" class="full">
                            <div class="mainsmallblogimg">
                              <img src="assets/images/mb3.png">
                            </div>
                            <div class="blogdesc">
                              <span class="blogdate">
                              <i></i>08.01.20, 16:00
                              </span>
                              <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını</h3>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="main_smallblog">
                            <a href="#" class="full">
                            <div class="mainsmallblogimg">
                              <img src="assets/images/mb2.png">
                            </div>
                            <div class="blogdesc">
                              <span class="blogdate">
                              <i></i>08.01.20, 16:00
                              </span>
                              <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını </h3>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="main_smallblog">
                            <a href="#" class="full">
                            <div class="mainsmallblogimg">
                              <img src="assets/images/mb4.png">
                            </div>
                            <div class="blogdesc">
                              <span class="blogdate">
                              <i></i>08.01.20, 16:00
                              </span>
                              <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını </h3>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="main_smallblog">
                            <a href="#" class="full">
                            <div class="mainsmallblogimg">
                              <img src="assets/images/mb5.png">
                            </div>
                            <div class="blogdesc">
                              <span class="blogdate">
                              <i></i>08.01.20, 16:00
                              </span>
                              <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını </h3>
                              </div>
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                    <!-- mb smalls end--></div></div>
           
                  <!-- main blog tab-->
                  <div class="mainblogtab mbcat_aksesuar col-md-12">
                    <div class="row">

                    <!-- mb big-->
                    <div class="col-md-6">
                      <div class="main_blogbox big_blogbox">
                        <a href="#" class="full">
                        <div class="imgbox">
                          <img src="assets/images/bigblog.png">
                        </div>
                        <div class="bigblog_desc">
                          <span class="blogdate">
                            <i></i>08.01.20, 16:00
                          </span>
                          <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını kilidə salacaq yeni
                              açar növü istehsal etdi</h3>
                        </div>
                      </a>
                      </div>
                    </div>
                    <!-- mb big end-->
                    <!-- mb smalls-->
                    <div class="col-md-6">
                      <div class="row">

                        <div class="col-md-6">
                          <div class="main_smallblog">
                            <a href="#" class="full">
                            <div class="mainsmallblogimg">
                              <img src="assets/images/mb2.png">
                            </div>
                            <div class="blogdesc">
                              <span class="blogdate">
                              <i></i>08.01.20, 16:00
                              </span>
                              <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını</h3>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="main_smallblog">
                            <a href="#" class="full">
                            <div class="mainsmallblogimg">
                              <img src="assets/images/mb3.png">
                            </div>
                            <div class="blogdesc">
                              <span class="blogdate">
                              <i></i>08.01.20, 16:00
                              </span>
                              <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını </h3>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="main_smallblog">
                            <a href="#" class="full">
                            <div class="mainsmallblogimg">
                              <img src="assets/images/mb5.png">
                            </div>
                            <div class="blogdesc">
                              <span class="blogdate">
                              <i></i>08.01.20, 16:00
                              </span>
                              <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını </h3>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="main_smallblog">
                            <a href="#" class="full">
                            <div class="mainsmallblogimg">
                              <img src="assets/images/mb2.png">
                            </div>
                            <div class="blogdesc">
                              <span class="blogdate">
                              <i></i>08.01.20, 16:00
                              </span>
                              <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını </h3>
                              </div>
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                    <!-- mb smalls end--></div></div>

                  <!-- main blog tab-->
                  <div class="mainblogtab mbcat_moto col-md-12">
                    <div class="row">

                    <!-- mb big-->
                    <div class="col-md-6">
                      <div class="main_blogbox big_blogbox">
                        <a href="#" class="full">
                        <div class="imgbox">
                          <img src="assets/images/bigblog.png">
                        </div>
                        <div class="bigblog_desc">
                          <span class="blogdate">
                            <i></i>08.01.20, 16:00
                          </span>
                          <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını kilidə salacaq yeni
                              açar növü istehsal etdi</h3>
                        </div>
                      </a>
                      </div>
                    </div>
                    <!-- mb big end-->
                    <!-- mb smalls-->
                    <div class="col-md-6">
                      <div class="row">

                        <div class="col-md-6">
                          <div class="main_smallblog">
                            <a href="#" class="full">
                            <div class="mainsmallblogimg">
                              <img src="assets/images/mb5.png">
                            </div>
                            <div class="blogdesc">
                              <span class="blogdate">
                              <i></i>08.01.20, 16:00
                              </span>
                              <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını</h3>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="main_smallblog">
                            <a href="#" class="full">
                            <div class="mainsmallblogimg">
                              <img src="assets/images/mb3.png">
                            </div>
                            <div class="blogdesc">
                              <span class="blogdate">
                              <i></i>08.01.20, 16:00
                              </span>
                              <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını </h3>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="main_smallblog">
                            <a href="#" class="full">
                            <div class="mainsmallblogimg">
                              <img src="assets/images/mb4.png">
                            </div>
                            <div class="blogdesc">
                              <span class="blogdate">
                              <i></i>08.01.20, 16:00
                              </span>
                              <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını </h3>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="main_smallblog">
                            <a href="#" class="full">
                            <div class="mainsmallblogimg">
                              <img src="assets/images/mb2.png">
                            </div>
                            <div class="blogdesc">
                              <span class="blogdate">
                              <i></i>08.01.20, 16:00
                              </span>
                              <h3 class="blogtitle">BMW yeni avtomobilləri üçün bir toxunuşla bütün maşını </h3>
                              </div>
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                    <!-- mb smalls end--></div></div>
                </div>
              </div>
              <a href="#" class="all_blogs">Hamısına bax</a>
            </div>
          </div>
        </section>

      </main>
    

<?php
include_once 'template/footer.php';
?>