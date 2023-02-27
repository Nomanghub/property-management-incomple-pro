<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<style type="text/css">

.gallery-img-upload {
    border: 1px solid #2563eb;
    display: inline-block;
    cursor: pointer;
    color: #2563eb;
    width: 30%;
    text-align: center;
    padding: 60px;
}

a.del-gal.btn.btn-danger {
    position: absolute;
    right: 5px;
}

.gallery_per_item {
    position: relative;
    height: 230px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 7px;
    margin-right: 5px;
    padding: 5px;
}
.gallery-items {
    margin-top: 50px;
}

.gallery_per_item img {
    height: 218px;
    object-fit: cover;
}

label.file_input_upload {
    padding: 28px 20px;
    background: #f1f1f1;
    line-height: 40px;
}

button.btn.btn-primary.gal {
    display: block;
    margin-top: 20px;
}
</style>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                
                <h3 style=" margin: 0; margin-bottom: 12px; ">#<?php echo $project->name ?>-Map</h3>	
				<div class="panel_s">
					<div class="panel-body panel-table-full">
					   
						<div class="project_mapping">
						   <div class="row">
						   <?php foreach ($all_mapping as $mapping_lists) {
                             $address=$mapping_lists->address;
							 $lat=$mapping_lists->lat;
							 $lng=$mapping_lists->lng;
						   ?>
						   <?php }?> 
						   
						   <?php if($lat!=null){ ?>
								<div class="col-md-12">
								   <div style="width:100%;height:350px" id="map"></div>					   
								</div>							   
						   <?php } ?>
							 
										 
						   </div>
						</div>						
					</div>
				</div>
               

            </div>
        </div>
    </div>

						  
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACtELi1l0M60sMU0SnR7kWeCKiKnSk6SM&callback=initMap&libraries=&v=weekly" async></script>
<script>
	function initMap() {
	  const uluru = { lat: <?php echo $lat; ?>, lng: <?php echo $lng; ?> };
	  const map = new google.maps.Map(document.getElementById("map"), {
		zoom: 14,
		center: uluru,
	  });
	  const contentString =
		'<div id="content">' +
		'<div id="siteNotice">' +
		"</div>" +
		'<h3 id="firstHeading" class="firstHeading"><?php echo $address; ?></h3>' +
		'<div id="bodyContent">' +
		"<p><b>Latitude: </b>  <?php echo $lat; ?>" +
		"<p><b>Longitude: </b>  <?php echo $lng; ?>" +
		"</div>" +
		"</div>";
	  const infowindow = new google.maps.InfoWindow({
		content: contentString,
		ariaLabel: "Uluru",
	  });
	  const marker = new google.maps.Marker({
		position: uluru,
		map,
		title: "Uluru (Ayers Rock)",
	  });

	  marker.addListener("click", () => {
		infowindow.open({
		  anchor: marker,
		  map,
		});
	  });
	  infowindow.open(map,marker);
	}

	window.initMap = initMap;
</script>

