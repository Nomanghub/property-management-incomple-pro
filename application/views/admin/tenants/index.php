<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper" style="min-height: 704.75px;">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="_buttons tw-mb-2 sm:tw-mb-4">
                     <a href="<?php echo admin_url('tenants/add_tenant'); ?>" class="btn btn-primary pull-left display-block mright5"><i class="fa-regular fa-plus tw-mr-1"></i> New Tenant</a><div class="clearfix"></div>
                </div>

                <div class="panel_s tw-mt-2 sm:tw-mt-4">
                    <div class="panel-body">

                        <div class="row mbot15">
                            <div class="col-md-12">
                                <h4 class="tw-mt-0 tw-font-semibold tw-text-lg tw-flex tw-items-center">
                                   <i class="fa fa-users" style=" margin-right: 5px; "></i> <span>Tenants</span></h4></div>
                        </div>
                        <hr class="hr-panel-separator">
                        <div class="panel-table-full">
                            <div class="">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row"></div>
                                    <div id="DataTables_Table_0_processing" class="dataTables_processing panel panel-default" style="display: none;">
                                        <div class="dt-loader"></div>
                                    </div>
                                    <div class="table-responsive">
                                        <table data-last-order-identifier="projects" data-default-order="" class="table table-projects number-index-1 dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="tenants" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="# activate to sort column ascending">#</th>
                                                    <th class="tenants" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Customer activate to sort column ascending">Name</th>
                                                    <th class="tenants" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Tags activate to sort column ascending">Gender</th>
                                                    <th class="tenants" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Tags activate to sort column ascending">Email</th>
                                                    <th class="tenants" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Tags activate to sort column ascending">Phone</th>
                                                    <th class="tenants" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start Date activate to sort column ascending">Tenant Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($tenants_list as $tenants_lists) { ?>
                                                <tr class="has-row-options odd">
                                                    
                                                    <td><?php echo $tenants_lists->id ?></td>
                                                    <td><?php echo $tenants_lists->tenant_name ?>
													<div class="row-options"><a href="<?php echo admin_url('tenants/view_tenant/').$tenants_lists->id; ?>">View</a> | <a href="<?php echo admin_url('tenants/edit_tenant/').$tenants_lists->id; ?>">Edit </a> | <a href="<?php echo admin_url('tenants/delete_tenant/').$tenants_lists->id; ?>" class="text-danger">Delete </a></div>
													
													</td>
                                                    <td><?php echo $tenants_lists->tenant_gender ?></td>
                                                    <td><a href="mailto:<?php echo $tenants_lists->tenant_email ?>"><?php echo $tenants_lists->tenant_email ?></a></td>
                                                    <td><a href="tel:<?php echo $tenants_lists->tenant_phone ?>"><?php echo $tenants_lists->tenant_phone ?></a></td>
                                                    <td><?php echo $tenants_lists->tenant_type ?></td>
                                                </tr>
                                                 <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite"></div>
                                        </div>
                                        <div class="col-md-8 dataTables_paging">
                                            <div id="colvis"></div>
                                            <div id="" class="dt-page-jump"></div>
                                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                <ul class="pagination">
                                                    <?php echo $this->pagination_bootstrap->render(); ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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