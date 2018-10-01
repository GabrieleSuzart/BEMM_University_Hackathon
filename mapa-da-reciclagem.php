<?php require("header.php");?>

<div class="geral_cima">
	<div class="geral_baixo">
    	<div class="content">
        	<h1>MAPA DA RECICLAGEM</h1>
			
             <div id="map"></div>
             
			<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCFIJQ-n6nF5LQMok3Q-evoc4MRAO_bJWs"></script>
			<script type="text/javascript">
			
			var map;
			var marker;
			
			var myLatlng = new google.maps.LatLng(-12.261851, -38.965885);
			
			var MY_MAPTYPE_ID = 'custom_style';
			
			function initialize() {
				var featureOpts = [{
					"stylers": [
					{ "weight": 1.1 },
					{ "hue": "#0077ff" },
					{ "saturation": -73 }
				]},{
				},{
					"featureType": "administrative.province",
					"stylers": [
					{ "hue": "#ff0000" },
					{ "saturation": 1 }
					]
				},{
				}
				];
				
				var mapOptions = {
					zoom: 13,
					center: myLatlng,
					draggable: true,
					mapTypeControl: true,
					zoomControl: true,
					zoomControlOptions: {
						style: google.maps.ZoomControlStyle.SMALL
				}
				};
				
				map = new google.maps.Map(document.getElementById('map'), mapOptions);
				
				
		<?php
		
		require("conexao.php");

		$sql=mysql_query("select * from organizacao where tipo='Centro de Reciclagem' or tipo='Ponto de Coleta'") or die ("Problemas");
		$cont=1;
		while($linha=mysql_fetch_array($sql)){
			$nome=$linha["nome"];
			$logadouro=$linha["logadouro"];
			$numero=$linha["numero"];
			$cep=$linha["cep"];
			$telefone=$linha["telefone"];	
			$celular=$linha["celular"];
			$latitude=$linha["latitude"];
			$longitude=$linha["longitude"];
			$tipo=$linha["tipo"];
		
		?>
			
			var contentStringMarker<?php echo $cont?> = '<div style="color: black;">' +
				'<h2><?php echo $nome;?></h2><?php echo"$logadouro, $numero, $cep <br/> $telefone | $celular"; ?>'+
				'</div>';
			var infowindow<?php echo $cont;?> = new google.maps.InfoWindow({
				content: contentStringMarker<?php echo $cont;?>
			});
					
			marker<?php echo $cont?> = new google.maps.Marker({
				position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
				map: map,
				title: '<?php echo $nome; ?>',
				icon: '<?php if($tipo=="Ponto de Coleta"){echo"img/place0.png";}else if($tipo=="Centro de Reciclagem"){echo"img/place1.png";}?>'
			});
			google.maps.event.addListener(marker<?php echo $cont?>, 'click', function() {
			infowindow<?php echo $cont?>.open(map,marker<?php echo $cont?>);
		});

		
		<?php $cont++; }?>
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
</script>

        </div>
    </div>
</div>


<?php require("footer.php");?>