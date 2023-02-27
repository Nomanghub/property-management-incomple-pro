<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content email-templates">
        <div class="row">
            <div class="col-md-12">
			   <div class="email_template_head">
					<h4 class="tw-mt-0 tw-font-semibold tw-text-lg tw-text-neutral-700">
						<?php echo _l('Add Email Template'); ?>
					</h4>
				</div>
                <div class="panel_s">
                      <div class="panel-body">
                        <div class="row">
								<div class="col-md-12">
									<form action="<?php echo admin_url('emails/insert_template'); ?>" id="email_tem_form" method="post">
									<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">								
										   <div class="form-group"><label for="name" class="control-label"> <small class="req text-danger">* </small>Template Title</label><input type="text" id="name" name="name" class="form-control" value="" placeholder="Template Title" required/></div>
										   
										   <div class="form-group"><label for="subject" class="control-label"><small class="req text-danger">* </small>Subject</label><input type="text" id="subject" name="subject" class="form-control" value="" placeholder="subject" required></div>
										   
										   <div class="form-group"><label for="fromname" class="control-label"> <small class="req text-danger">* </small>From Name</label><input type="text" id="fromname" name="fromname" class="form-control" value="{companyname} | CRM" required></div>
										   
										  <!--div class="form-group">
											<label for="temid" class="control-label"><small class="req text-danger">* </small>Template Type</label>
											
												<select id="temid"  name="template_type" class="selectpicker form-control" required>
													<option></option>
													<option value="letters">Letters</option>
												</select>											
											   
										   </div-->
										  <div class="form-group">
											<label for="temcategory" class="control-label"><small class="req text-danger">* </small>Template Category</label>
											
												<select id="temcategory"  name="template_slug" class="selectpicker form-control" required>
													<option></option>
													<option value="landlord-letter">Landlords</option>
													<option value="tenant-letter">Tenants</option>
													<option value="property-letter">Properties</option>
													<option value="lead-letter">Leads</option>
												</select>											
											   
										   </div>									   
										   <div class="form-group">
											   <label for="temmassage" class="control-label"><small class="req text-danger">* </small>Email Message</label>
												<textarea id="temmassage" name="message_text" class="form-control tinymce" rows="4"></textarea>
										   </div>

										  <div class="form-group">
											<button type="submit" class="btn btn-primary">Save</button>
										  </div>									  
									</form>   
								</div>						
                            
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php init_tail(); ?>
</body>

</html>
