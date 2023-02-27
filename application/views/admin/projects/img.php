<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>

<div id="wrapper">
    <div class="content">
        <div class="row">
            <form action="<?php echo admin_url('projects/img_insert'); ?>" method="post" enctype="multipart/form-data">
             <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
            <div class="col-md-8 col-md-offset-2">
			   
                <h4 class="tw-mt-0 tw-font-semibold tw-text-lg tw-text-neutral-700">
                    <?php echo $this->upload->display_errors(); ?>
                </h4>
                <div class="panel_s">
				     <div class="row">
					   <div class="col-md-12">
					      <input type="file" name="pro_img"/>
					   </div>
					 
					 </div>
                    <div class="panel-footer text-right">
                        <button type="submit" data-form="#project_form" class="btn btn-primary" autocomplete="off"
                            data-loading-text="<?php echo _l('wait_text'); ?>">
                            <?php echo _l('submit'); ?>
                        </button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<?php init_tail(); ?>