<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBumXNGkI9zeuG-yscY_m56aE5sZVOphvI"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBumXNGkI9zeuG-yscY_m56aE5sZVOphvI"></script>

	<script>
        
        function findMe(){
			var output = document.getElementById('map');

			// Verificar si soporta geolocalizacion
			if (navigator.geolocation) {
				output.innerHTML = "<p>Tu navegador soporta Geolocalizacion</p>";
			}else{
				output.innerHTML = "<p>Tu navegador no soporta Geolocalizacion</p>";
			}

			//Obtenemos latitud y longitud
			function localizacion(posicion){

				var latitude = posicion.coords.latitude;
				var longitude = posicion.coords.longitude;

				var imgURL = "https://maps.googleapis.com/maps/api/staticmap?center="+latitude+","+longitude+"&size=1000x400&markers=color:red%7C"+latitude+","+longitude+"&key=AIzaSyBumXNGkI9zeuG-yscY_m56aE5sZVOphvI";

				output.innerHTML ="<img src='"+imgURL+"'>";

				

			}

			function error(){
				output.innerHTML = "<p>No se pudo obtener tu ubicación</p>";

			}

			navigator.geolocation.getCurrentPosition(localizacion,error);

		}


	</script>