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
                
                 <h3 style=" margin: 0; margin-bottom: 12px; ">#<?php echo $project->name ?>-Floorplan</h3>	
				<div class="panel_s">
					<div class="panel-body panel-table-full">
					   <div class="uploadOuter">
							<form action="<?php echo admin_url('projects/floorplan_insert/').$project->id; ?>"  method="post" enctype="multipart/form-data">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
							  <span class="dragBox" >
							     Darg and Drop or Select image here
							    <input type="file" name="floorplan_img" onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile" class="floorplan_img" multiple />	
								
                              </span>	
                              <div id="preview"></div>							  
							 <button type="submit" class="btn btn-primary gal">Upload Floorplan</button>
							</form>
						</div>	


          
						<div class="gallery-items">
						   <div class="row">
						   <?php foreach ($all_floorplan as $floorplan_lists) { ?>
						     <div class="col-md-3"><div class="gallery_per_item"><a href="<?php echo base_url('uploads/property/'.$floorplan_lists->floor_img); ?>" data-lightbox="photos"><img src="<?php echo base_url('uploads/property/'.$floorplan_lists->floor_img); ?>" alt="Property Image" width="100%" /></a><a href="<?php echo admin_url('projects/floorplan_delete/'.$floorplan_lists->id); ?>" class="del-gal btn btn-danger">Delete</a></div></div>
						   <?php }?> 
							 
						   </div>
						</div>						
					</div>
				</div>
               

            </div>
        </div>
    </div>




<style type="text/css">
.uploadOuter {
  padding: 20px;
    position: relative;

}
  strong {
    padding: 0 10px
  }
.dragBox {
  width: 100%;
  height: 100px;
  position: relative;
  text-align: center;
  font-weight: bold;
  line-height: 95px;
  color: #2563eb;
  border: 2px dashed #2563eb;
  display: inline-block;
  transition: transform 0.3s;
  cursor:pointer;

}

.dragBox:hover{
background-color: #eff6ff;
}

.floorplan_img {
position: absolute;
height: 100%;
width: 100%;
opacity: 0;
top: 0;
left: 0;
    cursor: pointer;
}
.draging {
  transform: scale(1.03);
}
#preview {
  text-align:right;
    position: absolute;
    right: 27px;
    top: 28px;
}

#preview img{
  width:68px;
}

</style>
<script type="text/javascript">
"use strict";
function dragNdrop(event) {
    var fileName = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("preview");
    var previewImg = document.createElement("img");
    previewImg.setAttribute("src", fileName);
    preview.innerHTML = "";
    preview.appendChild(previewImg);
}
function drag() {
    document.getElementById('uploadFile').parentNode.className = 'draging dragBox';
}
function drop() {
    document.getElementById('uploadFile').parentNode.className = 'dragBox';
}

</script>
