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

<?php foreach ($view_data as $view_datas) {
	  $id=$view_datas->id;
	  $type=$view_datas->tenant_type;
	  $name=$view_datas->tenant_name;
	  $tenant_gender=$view_datas->tenant_gender;
	  $tenant_bdate=$view_datas->tenant_bdate;
	  $tenant_idpass=$view_datas->tenant_idpass;
	  $tenant_mastatus=$view_datas->tenant_mastatus;
	  $tenant_email=$view_datas->tenant_email;
	  $tenant_phone=$view_datas->tenant_phone;
	  $tenant_country=$view_datas->tenant_country;
	  $tenant_city=$view_datas->tenant_city;
	  $tenant_zip=$view_datas->tenant_zip;
	  $tenant_address=$view_datas->tenant_address;
	  $tenant_phyaddress=$view_datas->tenant_phyaddress;
	  $tenant_kinname=$view_datas->tenant_kinname;
	  $tenant_kinphone=$view_datas->tenant_kinphone;
	  $tenant_kinrelate=$view_datas->tenant_kinrelate;
	  $tenant_emername=$view_datas->tenant_emername;
	  $tenant_emerphone=$view_datas->tenant_emerphone;
	  $tenant_emeremail=$view_datas->tenant_emeremail;
	  $tenant_emerrelas=$view_datas->tenant_emerrelas;
	  $tenant_emeraddress=$view_datas->tenant_emeraddress;
	  $tenant_emphyaddress=$view_datas->tenant_emphyaddress;
	  $tenant_empstatus=$view_datas->tenant_empstatus;
	  $tenant_empposition=$view_datas->tenant_empposition;
	  $tenant_emplphone=$view_datas->tenant_emplphone;
	  $tenant_emplemail=$view_datas->tenant_emplemail;
	  $tenant_emplpoadd=$view_datas->tenant_emplpoadd;
	  $tenant_emplphyadd=$view_datas->tenant_emplphyadd;
?>
  
<?php }?>

<div id="wrapper">
    <div class="content">
		<div class="row">
			<div class="col-md-8 project-overview-left" style="margin:0 auto;float:none;">
				<div class="panel_s">
					<div class="panel-body">
						<div class="row">
							
							<div class="col-md-12">
							    <a href="<?php echo admin_url('tenants/letters'); ?>/<?php echo $id ?>" class="pull-right btn btn-primary">Letters</a>
								<h4 class="tw-font-semibold tw-text-base tw-mb-4">
									#Tenant ID-<?php echo $id ?>                        </h4>
									
								<dl class="tw-grid tw-grid-cols-1 tw-gap-x-4 tw-gap-y-5 sm:tw-grid-cols-2">
									<div class="sm:tw-col-span-2 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											      <h4>Personal Information </h4>                        </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											
										</dd>
									</div>									
									<div class="sm:tw-col-span-1 project-overview-id">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Name                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900"><?php echo $name ?></dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-id">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Tenant Type                               </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900"><?php echo $type ?></dd>
									</div>									

									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Gender                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_gender ?>
										</dd>
									</div>
									
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500"> Date of Birth</dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_bdate ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											ID Passport Number                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_idpass ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Marital Status                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_mastatus ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Contact Email                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_email ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Contact Phone                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_phone ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Country                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_country ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											City                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_city ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Postal Code                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_zip ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Postal Address                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_address ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Physical Address                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_phyaddress ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-2 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											      <h4>Kin & Relation </h4>                        </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											
										</dd>
									</div>									
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Next of Kin Name                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_kinname ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Next of Kin Phone                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_kinphone ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Next of Kin Relation                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_kinrelate ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Emergency Name                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_emername ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Emergency Phone                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_emerphone ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Emergency Email                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_emeremail ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Emergency Relation                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_emerrelas ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Emergency Postal Address                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_emeraddress ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Emergency Physical Address                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_emphyaddress ?>
										</dd>
									</div>
									<div class="sm:tw-col-span-2 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											      <h4>Employment </h4>                        </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											
										</dd>
									</div>
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Employment Status                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_empstatus ?>
										</dd>
									</div>									
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Employment Position                                </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_empposition ?>
										</dd>
									</div>		
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Employment Contact Phone                               </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_emplphone ?>
										</dd>
									</div>	
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Employment Contact Email                               </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_emplemail ?>
										</dd>
									</div>	
									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Employment Postal Address                              </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_emplpoadd ?>
										</dd>
									</div>	

									<div class="sm:tw-col-span-1 project-overview-customer">
										<dt class="tw-text-sm tw-font-medium tw-text-neutral-500">
											Employment Physical Address                            </dt>
										<dd class="tw-mt-1 tw-text-sm tw-text-neutral-900">
											<?php echo $tenant_emplphyadd ?>
										</dd>
									</div>										

								</dl>
							</div>
						</div>
					</div>
				</div>
			</div>
			
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