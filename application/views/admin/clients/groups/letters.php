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
   <?php foreach ($c_select_letter as $c_seletter_lists) {
	 $sevalue=$c_seletter_lists->letter_id;
	 $letters=$c_seletter_lists->letter_contents;
	
   ?>
   <?php }?> 

   <?php foreach ($c_all_letter as $c_letter_lists) {
	 $letter=$c_letter_lists->message;
	 $letter_id=$c_letter_lists->emailtemplateid;
   ?>
   <?php }?> 
   
   
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
								     
									<form action="<?php echo admin_url('clients/letter_update/'); ?><?php if($sevalue!=null){ ?><?php echo  $sevalue; ?><?php }else{ ?><?php echo  $letter_id; ?><?php } ?>/<?php echo  $client->userid; ?>"  method="post" enctype="multipart/form-data" id="letter11">
									<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">			
									<div class="letter-selecton" style="margin-bottom: 12px;">
									
									 <label for="letteron">Select Letter</label>
									  <select class="selectpicker form-control" id="letteron" name="selectitem">
										   <?php foreach ($c_email_letter as $c_email_letter_lists) { ?>			

                                              <?php   if($sevalue==$c_email_letter_lists->emailtemplateid){ ?>
													<option selected value="<?php echo $c_email_letter_lists->emailtemplateid ?>"><?php echo $c_email_letter_lists->name ?></option> 
												<?php }else{ ?>
													 <option value="<?php echo $c_email_letter_lists->emailtemplateid ?>"><?php echo $c_email_letter_lists->name ?></option>
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

