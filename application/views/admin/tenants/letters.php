<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>

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
   <?php foreach ($t_select_letter as $t_seletter_lists) {
	 $sevalue=$t_seletter_lists->letter_id;
	 $letters=$t_seletter_lists->letter_contents;
	
   ?>
   <?php }?> 

   <?php foreach ($t_all_letter as $t_all_letter) {
	 $letter=$t_all_letter->message;
	 $letter_id=$t_all_letter->emailtemplateid;
   ?>
   <?php }?> 
   
   
 <?php foreach ($view_data as $view_datas) {
	  $id=$view_datas->id;
?>
<?php }?>  
<div id="wrapper">   
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                
                <h3 style=" margin: 0; margin-bottom: 12px; ">#Write a Letter</h3>	

				<div class="panel_s">
					<div class="panel-body panel-table-full">
					   <div class="letter-info" style=" text-align: right; margin-bottom: 12px;">
						   <a id="letterpdf" style=" margin-left: 10px; " href="<?php echo admin_url('projects/letter_pdf/'); ?><?php if($sevalue!=null){ ?><?php echo  $sevalue; ?><?php }else{ ?><?php echo  $letter_id; ?><?php } ?>" target="_blank" class="btn btn-primary"> <i class="fa-solid fa-file-download tw-mr-1"></i> PDF</a>
						   <a id="lettermail" style="margin-left: 10px; " href="<?php echo admin_url('projects/letter_email/'); ?><?php if($sevalue!=null){ ?><?php echo $sevalue; ?><?php }else{ ?><?php echo  $letter_id; ?><?php } ?>" target="_blank" class="btn btn-primary"> <i class="fa-solid fa-envelope tw-mr-1"></i> Email</a>
						 </div>

						<div class="project_letter">
						   <div class="row">

						   
						   
								<div class="col-md-12">
								     
									<form action="<?php echo admin_url('tenants/letter_update/'); ?><?php if($sevalue!=null){ ?><?php echo  $sevalue; ?><?php }else{ ?><?php echo  $letter_id; ?><?php } ?>/<?php echo $id ?>"  method="post" enctype="multipart/form-data" id="letter11">
									<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">			
									<div class="letter-selecton" style="margin-bottom: 12px;">
									
									 <label for="letteron">Select Letter</label>
									  <select class="selectpicker form-control" id="letteron" name="selectitem">
										   <?php foreach ($t_email_letter as $t_email_letter_lists) { ?>			

                                              <?php   if($sevalue==$t_email_letter_lists->emailtemplateid){ ?>
													<option selected value="<?php echo $t_email_letter_lists->emailtemplateid ?>"><?php echo $t_email_letter_lists->name ?></option> 
												<?php }else{ ?>
													 <option value="<?php echo $t_email_letter_lists->emailtemplateid ?>"><?php echo $t_email_letter_lists->name ?></option>
												 <?php } ?>									   
											 
										   <?php }?> 
									  </select>
									</div>                                        
										<div class="cos" style=" text-align: center; "></div>
											<div id="letter_ajax">
											   <textarea id="pro_letter" name="pro_letter" class="form-control tinymce" rows="4" aria-hidden="true">
											      <?php 
												    if($letters!=null){?>
														<?php echo $letters ?>
													<?php }else{ ?>
														<?php echo $letter ?>
													<?php } ?>
												  
											   </textarea>
											   
											</div> 
										
                                        <button type="submit" class="btn btn-primary gal">Save</button>										
                                    </form>	

																	
								</div>							   
						   		 
						   </div>
						</div>						
					</div>
				</div>
               

            </div>
        </div>
    </div>

</div>
<?php init_tail(); ?>

<script type="text/javascript">
 $(document).ready(function(){
		
	  $("#letteron").on('change',function(){
		$(".cos").html("<img src='http://localhost/duke/uploads/property/icons8-dots-loading.gif' alt='' />");  
		tinymce.activeEditor.setProgressState(true)
		tinymce.activeEditor.setProgressState(false, 500)
		  var s='<?php echo $id ?>';
		   var value=$(this).val();
			var frm = document.getElementById('letter11') || null;
			if(frm) {
			   frm.action =admin_url+'tenants/letter_update/'+ value+'/'+ s; 
			}
            document.getElementById("letterpdf").href=admin_url+"projects/letter_pdf/"+ value;			
            document.getElementById("lettermail").href=admin_url+"projects/letter_email/"+ value;			
		   $.ajax({
			   url:"http://localhost/duke/admin/projects/filteron/"+ value,
			   type:"GET",
			   //dataType:'JSON',			   
			   success:function(response){
				   $("#pro_letter").html(response);
				   setTimeout(() => {tinymce.activeEditor.setContent(response)},500);
				   $(".cos").html("");
			   }
			   
		   });
		  
	  })	
	 

});

</script>