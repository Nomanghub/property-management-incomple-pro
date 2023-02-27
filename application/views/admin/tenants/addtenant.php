<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>

<style>

.wsi_title{
    background: #F8FAFC;
    cursor: pointer;
    font-size: 20px;
    padding: 10px;
    margin-bottom: 25px;    
}

.tenant-kin-relation{
    display:none;
}

.tenant-kin-relation, .tenant-employment-relation{
    display:none;
}

.iccc{
 transform: rotate(180deg) !important;
}
  
    
</style>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <form action="<?php echo admin_url('tenants/insert'); ?>" id="tentant_form" method="post">
			<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                <div class="col-md-8 col-md-offset-2">
                    <h4 class="tw-mt-0 tw-font-semibold tw-text-lg tw-text-neutral-700">
                        Add Tenant </h4>
                    <div class="panel_s">
                        <div class="panel-body">
                            
                            <div class="tab-content tw-mt-3">
                                <div role="tabpanel" class="tab-pane active" id="tab_project">
                                    <div class="row personal-tenant-info">
                                        <div class="col-md-6">
                                            <div class="form-group">
											<label for="tenanttype" class="control-label"><small class="req text-danger">* </small>Tenant Type</label>
											
												<select id="tenanttype"  name="tenant_type" class="selectpicker form-control" required>
												    <option></option>
													<option value="Individual">Individual</option>
													<option value="Business">Business</option>
												</select>											
                                               
											</div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
											<p style="color:red;"><?php echo form_error('name'); ?></p>
											<label for="tenantName" class="control-label"><small class="req text-danger">* </small>Tenant Name</label>
											
												<input type="text" id="tenantName" name="tenant_name" class="form-control" value="" required>
											</div>
                                        </div>                                  
                                       <div class="col-md-6">
                                            <div class="form-group">
											<label for="tenantgender" class="control-label"><small class="req text-danger"> </small>Gender</label>
											
												<select id="tenantgender"  name="tenant_gender" class="selectpicker form-control">
												    <option></option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
													<option value="Other">Other</option>
												</select>											
                                               
											</div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
											<label for="tenantBdate" class="control-label"><small class="req text-danger"> </small>Date of Birth</label>
												<input type="date" id="tenantBdate" name="tenant_bdate" class="form-control" value="">
											</div>
                                        </div>                              
                                        <div class="col-md-6">
                                            <div class="form-group">
											<label for="tenantIDpass" class="control-label"><small class="req text-danger"> </small>ID Passport Number</label>
												<input type="text" id="tenantIDpass" name="tenant_idpass" class="form-control" value="">
											</div>
                                        </div>
                                        
                                       <div class="col-md-6">
                                            <div class="form-group">
											<label for="tenantMstatus" class="control-label"><small class="req text-danger"> </small>Marital Status</label>
											
												<select id="tenantMstatus"  name="tenant_mastatus" class="selectpicker form-control">
												    <option></option>
													<option value="Single">Single</option>
													<option value="Married">Married</option>
												</select>											
                                               
											</div>
                                        </div>                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
											<label for="tenantemail" class="control-label"><small class="req text-danger">* </small>Contact Email</label>
												<input type="text" id="tenantemail" name="tenant_email" class="form-control" value="" required>
											</div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
											<label for="tenantphone" class="control-label"><small class="req text-danger"> </small>Contact Phone</label>
												<input type="text" id="tenantphone" name="tenant_phone" class="form-control" value="">
											</div>
                                        </div>	                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
											<label for="tenantCountry" class="control-label"><small class="req text-danger"> </small>Country</label>
												<input type="text" id="tenantCountry" name="tenant_country" class="form-control" value="">
											</div>
                                        </div>                                  
                                        <div class="col-md-6">
                                            <div class="form-group">
											<label for="tenantCity" class="control-label"><small class="req text-danger"> </small>City</label>
												<input type="text" id="tenantCity" name="tenant_city" class="form-control" value="">
											</div>
                                        </div>		
                                        
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
											<label for="tenantzip" class="control-label"><small class="req text-danger"> </small>Postal Code</label>
												<input type="text" id="tenantzip" name="tenant_zip" class="form-control" value="">
											</div>
                                        </div>                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
											<label for="tenantAddress" class="control-label"><small class="req text-danger"> </small>Postal Address</label>
												<input type="text" id="tenantAddress" name="tenant_address" class="form-control" value="">
											</div>
                                        </div>                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
											<label for="tenantPhysicalAddress" class="control-label"><small class="req text-danger"> </small>Physical Address</label>
												<input type="text" id="tenantPhysicalAddress" name="tenant_phyaddress" class="form-control" value="">
											</div>
                                        </div>  
								    </div>
                                </div>
                                <div class="row"><div class="col-md-12"><h3 class="wsi_title kin-relation-toggle">Kin & Relation <i class="fa fa-angle-down" style=" float: right; "></i></h3></div></div>
                                <div class="row tenant-kin-relation">
								    
                                    <div class="col-md-6">
                                        <div class="form-group">
										<label for="tenantKname" class="control-label"><small class="req text-danger"> </small>Next of Kin Name</label>
											<input type="text" id="tenantKname" name="tenant_kinname" class="form-control" value="">
										</div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
										<label for="tenantKPhone" class="control-label"><small class="req text-danger"> </small>Next of Kin Phone</label>
											<input type="text" id="tenantKPhone" name="tenant_kinphone" class="form-control" value="">
										</div>
                                    </div>
									<div class="col-md-6">
										<div class="form-group">
										<label for="tenantKRelation" class="control-label"><small class="req text-danger"> </small>Next of Kin Relation</label>
											<input type="text" id="tenantKRelation" name="tenant_kinrelate" class="form-control" value="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label for="tenantEmername" class="control-label"><small class="req text-danger"> </small>Emergency Name</label>
											<input type="text" id="tenantEmername" name="tenant_emername" class="form-control" value="">
										</div>
									</div>									
									<div class="col-md-6">
										<div class="form-group">
										<label for="tenantEmerPhone" class="control-label"><small class="req text-danger"> </small>Emergency Phone</label>
											<input type="text" id="tenantEmerPhone" name="tenant_emerphone" class="form-control" value="">
										</div>
									</div>									
									<div class="col-md-6">
										<div class="form-group">
										<label for="tenantEmerEmail" class="control-label"><small class="req text-danger"> </small>Emergency Email</label>
											<input type="text" id="tenantEmerEmail" name="tenant_emeremail" class="form-control" value="">
										</div>
									</div>									
									<div class="col-md-6">
										<div class="form-group">
										<label for="tenantEmerRelation" class="control-label"><small class="req text-danger"> </small>Emergency Relation</label>
											<input type="text" id="tenantEmerRelation" name="tenant_emerrelas" class="form-control" value="">
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
										<label for="tenantEmerAddress" class="control-label"><small class="req text-danger"> </small>Emergency Postal Address</label>
											<input type="text" id="tenantEmerAddress" name="tenant_emeraddress" class="form-control" value="">
										</div>
									</div>									
									<div class="col-md-6">
										<div class="form-group">
										<label for="tenantEmerPhyAddress" class="control-label"><small class="req text-danger"> </small>Emergency Physical Address</label>
											<input type="text" id="tenantEmerPhyAddress" name="tenant_emphyaddress" class="form-control" value="">
										</div>
									</div>	
									
							    </div>  
                                <div class="row"><div class="col-md-12"><h3 class="wsi_title employment-tenant-toggle">Employment <i class="fa fa-angle-down" style=" float: right; "></i></h3></div></div>
                                <div class="row tenant-employment-relation">
                                    <div class="col-md-6">
                                        <div class="form-group">
										<label for="tenantEmpStatus" class="control-label"><small class="req text-danger"> </small>Employment Status</label>
											<input type="text" id="tenantEmpStatus" name="tenant_empstatus" class="form-control" value="">
										</div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
										<label for="tenantEmplPosition" class="control-label"><small class="req text-danger"> </small>Employment Position</label>
											<input type="text" id="tenantEmplPosition" name="tenant_empposition" class="form-control" value="">
										</div>
                                    </div>
									<div class="col-md-6">
										<div class="form-group">
										<label for="tenantEmplphone" class="control-label"><small class="req text-danger"> </small>Employment Contact Phone</label>
											<input type="text" id="tenantEmplphone" name="tenant_emplphone" class="form-control" value="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label for="tenantEmplemail" class="control-label"><small class="req text-danger"> </small>Employment Contact Email</label>
											<input type="text" id="tenantEmplemail" name="tenant_emplemail" class="form-control" value="">
										</div>
									</div>									
									<div class="col-md-6">
										<div class="form-group">
										<label for="tenantEmplzipadd" class="control-label"><small class="req text-danger"> </small>Employment Postal Address</label>
											<input type="text" id="tenantEmplzipadd" name="tenant_emplpoadd" class="form-control" value="">
										</div>
									</div>									
									<div class="col-md-6">
										<div class="form-group">
										<label for="tenantEmplphyadd" class="control-label"><small class="req text-danger"> </small>Employment Physical Address</label>
											<input type="text" id="tenantEmplphyadd" name="tenant_emplphyadd" class="form-control" value="">
										</div>
									</div>	
							    </div> 
                
                
		                    </div>
                        </div>
						<div class="panel-footer text-right">
							<button type="submit" name="submit" class="btn btn-primary">Save</button>
						</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php init_tail(); ?>

<script>
 	$(document).ready(function(){
		$('.kin-relation-toggle').click(function() {
			$('.tenant-kin-relation').toggle(0);
		});	
		
		$('.kin-relation-toggle').click(function() {
			$('.fa-angle-down').toggleClass('iccc');
		});			
	});  
	
 	$(document).ready(function(){
		$('.employment-tenant-toggle').click(function() {
			$('.tenant-employment-relation').toggle(0);
		});	
		$('.employment-tenant-toggle').click(function() {
			$('.fa-angle-down').toggleClass('iccc');
		});		
	}); 	
</script>