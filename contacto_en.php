<?php include('header_en.php'); ?>

	<div class="contenedor-general" id="contacto">
		<!--<div class="fondo-mapa" style="background-image:url(assets/img/mapa.jpg);"></div> <!-- /fondo-mapa -->
		
        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15057.900917409539!2d-99.06263785!3d19.34856485!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1490770217600" width="60%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>-->
		<div id="mapa" class="mapa"></div>
		<div class="map" style="display:none;">
			<span id="latitud">20.7552762</span>
			<span id="longitud">-89.8683754</span>
		</div><!-- /map -->
		
		<div class="col-contacto">
			<h1>CONTACT</h1>
			
			<div class="contacto-info">
				<div class="row-contacto">
					<h2>Address</h2>
					<p>Chablé Resort &amp; Spa,<br>
					Tablaje #642, Chocholá, Yucatán, 
                    <br>México <br>Zip Code 97816</p>
                    <a href="https://www.google.com.mx/maps/place/Ixi'im+Restaurant/@20.755262,-89.8704077,17z/data=!3m1!4b1!4m5!3m4!1s0x8f561835ea57897d:0xbf787cf474bdbf7e!8m2!3d20.755262!4d-89.868219" target="_blank" class="ver-mapa">get directions</a>
				</div> <!-- /row-contacto -->
				
				<div class="row-contacto">
					<h2>Email</h2>
					<a href="mailto:hello@chable.com">info@ixiimrestaurant.com</a>
				</div> <!-- /row-contacto -->
				
				<div class="row-contacto">
					<h2>Telephone</h2>
					<a href="tel:015553229470">+52 [55] 4170 7666</a>
				</div> <!-- /row-contacto -->
				
				<div class="row-contacto">
					<h2>Oppening hours</h2>
					<p>Tuesday to Friday</br>
					Dinner: 19:00 a 22:30</br>
					Saturday and Sunday</br>
					Lunch: 13:00 a 17:00</br>
					Dinner: 19:00 a 22:30</p>
				</div> <!-- /row-contacto -->
				
				<div class="row-contacto">
					<h2 class="location reser" data-location= "/ixiim/reservaciones_en.php">Reservations</h2>
				</div> <!-- /row-contacto -->
				
				<div class="row-contacto">
					<h2 class="location news" >Newsletter</h2>
				</div> <!-- /row-contacto -->
				
				<div class="row-contacto">
					<h2 class="location poli">Privacy Notice</h2>
				</div> <!-- /row-contacto -->
			</div> <!-- /contacto-info -->
		</div> <!-- /col-reservacion -->
	</div> <!-- /contenedor-general -->
	
	<style>
		.con{ color: #CF8E26;}
	</style>

<?php include('footer_en.php'); ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7uXU97MG-nY36px-NjAaEOqBN9lb-7EM"></script>
<script>

	var latitud = $("#latitud").html();
	var longitud  = $("#longitud").html();
	
	var options = {
		center: new google.maps.LatLng(latitud, longitud),
		zoom: 15,
		draggable: true,
		scrollwheel: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	
	var div = document.getElementById("mapa");
	var map = new google.maps.Map(div, options);
	
	var image = 'http://chableresort.com/wp-content/themes/chable/assets/img/mark-maps.png';
	
	var marker = new google.maps.Marker({
		icon : image,
		position: new google.maps.LatLng(latitud, longitud),
		//animation: google.maps.Animation.DROP,
		map: map,
		title: "Chablé"
	});
	
	google.maps.event.addDomListener(window, 'resize', function() {
		var center = map.getCenter();
		google.maps.event.trigger(map, "resize");
		map.setCenter(center);
	});
	

</script>