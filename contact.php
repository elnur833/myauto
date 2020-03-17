<?php
include_once 'template/header.php';
?>

<main class="main" role="main">
	<section class="contact_section full">
		<div class="container">
			<!---->
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12">
						<ul class="breadcrumbs">
				            <li>
				                <a href="#">Ana səhifə</a>
				            </li>
				            <li>
				                <a href="#">Əlaqə</a>
				            </li>
				        </ul>
					</div>
				</div>
				<!---->
				<div class="col-md-12">
					<div class="row">
					<!---->
					<div class="col-md-12 page_heading">
						<h2>Əlaqə</h2>
					</div>
					<!---->
					<div class="col-md-12">
						<div class="contact_box full">
							<div class="row">
								<div class="col-md-6 contact_left">
									<h3 class="contact_title">Myauto.az</h3>
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p>
									<!---->
									<div class="contact_left_contacts">
										<p>
											<svg xmlns="http://www.w3.org/2000/svg" width="11.2" height="16" viewBox="0 0 11.2 16">
											    <path id="prefix__map-marker-outline" d="M10.6 5.6a2 2 0 11-2 2 2 2 0 012-2m0-3.6a5.6 5.6 0 015.6 5.6c0 4.2-5.6 10.4-5.6 10.4S5 11.8 5 7.6A5.6 5.6 0 0110.6 2m0 1.6a4 4 0 00-4 4c0 .8 0 2.4 4 7.768 4-5.368 4-6.968 4-7.768a4 4 0 00-4-4z" transform="translate(-5 -2)" style="fill:#004445"/>
											</svg>Azərbaycan, Bakı, Tbilisi prospekti 1058
										</p>
										<a href="tel:+994 12 345 67 89" >
											<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
											    <path id="prefix__phone" d="M6.017 9.492a12.581 12.581 0 005.492 5.492l1.833-1.833a.836.836 0 01.85-.208 9.467 9.467 0 002.975.475.833.833 0 01.833.832v2.917a.833.833 0 01-.833.833A14.167 14.167 0 013 3.833.833.833 0 013.833 3H6.75a.833.833 0 01.833.833 9.467 9.467 0 00.475 2.975.836.836 0 01-.208.85z" transform="translate(-3 -3)" style="fill:#004445"/>
											</svg>+994 12 345 67 89
										</a>
										<a href="mailto:info@myauto.az">
											<svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12">
											    <path id="prefix__email-outline" d="M3.5 4h12A1.5 1.5 0 0117 5.5v9a1.5 1.5 0 01-1.5 1.5h-12A1.5 1.5 0 012 14.5v-9A1.5 1.5 0 013.5 4m6 5.25l6-3.75h-12l6 3.75m-6 5.25h12V7.277l-6 3.743-6-3.743z" transform="translate(-2 -4)" style="fill:#004445"/>
											</svg>info@myauto.az
										</a>
									</div>
									<!---->
									<div class="contact_social">
										<a href="#" class="c_fb"></a>
										<a href="#" class="c_insta"></a>
										<a href="#" class="c_youtube"></a>
										<a href="#" class="c_link"></a>
									</div>
									<!---->
								</div>
								<!-- contact left end-->
								<!-- contact form-->
								<div class="col-md-6 contact_right">
									<h3 class="contact_title">Əlaqə formu</h3>
									<form class="full" action="" method="post">
									<div class="row">

										<div class="col-md-6 col-xs-12">
											<div class="form-group">
								                <label>Ad</label>
								                <input type="text" class="form-control" name="" placeholder="Adınızı daxil edin">
								            </div>
										</div>

										<div class="col-md-6 col-xs-12">
											<div class="form-group">
								                <label>Soyad</label>
								                <input type="text" class="form-control" name="" placeholder="Soyadınızı daxil edin">
								            </div>
										</div>

										<div class="col-md-6 col-xs-12">
											<div class="form-group">
								                <label>Telefon</label>
								                <input type="tel" class="form-control" name="" placeholder="+994 00 000 00 00">
								            </div>
										</div>

										<div class="col-md-6 col-xs-12">
											<div class="form-group">
								                <label>Email</label>
								                <input type="text" class="form-control" name="" placeholder="Emailinizi daxil edin">
								            </div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
								                <label>Qeyd</label>
								                <textarea placeholder="Qeyd əlavə edin" class="form-control"></textarea>
								            </div>
										</div>

										<div class="col-md-12 accept_checkbox">
											<label class="full">
												<input type="checkbox" name="" class="input_checkbox">
												<p>E-poçt promosyonları və təkliflərini göndərin</p>
											</label>
										</div>

										<div class="col-md-12 flex">
											<button type="submit" class="contact_submit m0-auto">Göndər</button>
										</div>


									</div>
									</form>
								</div>

								<!-- contact form end-->
							</div>
						</div>
					</div>
				<!---->

				<!-- contact map-->
					<div class="col-md-12">
						<div class="contact_map" id="map"></div>
					</div>
				<!-- contact map-->
				</div>
			</div>
		</div>
	</section>
</main>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCZWy2YH-P1SUd4wbCz4gteGoX3aXSd1c&amp;libraries=places"></script>
<script type="text/javascript">
	 var map = new google.maps.Map(document.getElementById('map'),{
	    center:{
	      lat: 40.368031,
	      lng: 49.837688 },
	    zoom:16,
	    disableDefaultUI: true          });
	  var marker = new google.maps.Marker({
	    position:{
	      lat: 40.368031,
	      lng: 49.837688 },
	    map:map,
	    draggable:false
	  });
</script>


<?php
include_once 'template/footer.php';
?>