<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
           <form action="<?php echo admin_url('projects/project'); ?>/<?php echo $project->id; ?>" method="post" enctype="multipart/form-data">
           <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
            <div class="col-md-8 col-md-offset-2">
                <h4 class="tw-mt-0 tw-font-semibold tw-text-lg tw-text-neutral-700">
                    <?php echo $title; ?>
                </h4>
                <div class="panel_s">
                    <div class="panel-body">
                        <div class="horizontal-scrollable-tabs panel-full-width-tabs">
                            <div class="scroller arrow-left"><i class="fa fa-angle-left"></i></div>
                            <div class="scroller arrow-right"><i class="fa fa-angle-right"></i></div>
                            <div class="horizontal-tabs">
                                <ul class="nav nav-tabs nav-tabs-horizontal" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tab_project" aria-controls="tab_project" role="tab" data-toggle="tab">
                                            <?php echo _l('project'); ?>
                                        </a>
                                    </li>
                                    <!--li role="presentation">
                                        <a href="#tab_settings" aria-controls="tab_settings" role="tab"
                                            data-toggle="tab">
                                            <!--?php echo _l('project_settings'); ?>
                                        </a>
                                    </li-->
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content tw-mt-3">
                            <div role="tabpanel" class="tab-pane active" id="tab_project">
							 <div class="row">
                                <div class="col-md-12">
									<div class="form-group">
										  <label for="pro_name" class="control-label"> <small class="req text-danger">* </small>Property Name</label>
										  <input type="text" id="pro_name" name="pro_name" class="form-control" placeholder="Property Name" value="">
									</div>
								</div>

                                </div>								 
                                <div class="form-group select-placeholder">
                                    <label for="clientid"
                                        class="control-label"><?php echo _l('project_customer'); ?></label>
                                    <select id="clientid" name="clientid" data-live-search="true" data-width="100%"
                                        class="ajax-search"
                                        data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
                                        <?php $selected = (isset($project) ? $project->clientid : '');
                             if ($selected == '') {
                                 $selected = (isset($customer_id) ? $customer_id: '');
                             }
                             if ($selected != '') {
                                 $rel_data = get_relation_data('customer', $selected);
                                 $rel_val  = get_relation_values($rel_data, 'customer');
                                 echo '<option value="' . $rel_val['id'] . '" selected>' . $rel_val['name'] . '</option>';
                             } ?>
                                    </select>
                                </div>
								
								<div class="form-group">
									 <?php
									 $selected = array();
									 if(isset($project_members)){
										foreach($project_members as $member){
											array_push($selected,$member['staff_id']);
										}
									} else {
										array_push($selected,get_staff_user_id());
									}
									echo render_select('project_members[]',$staff,array('staffid',array('firstname','lastname')),'project_members',$selected,array('multiple'=>true,'data-actions-box'=>true),array(),'','',false);
									?>
								</div>

                                <div class="row">
									<div class="col-md-6">
										<div class="form-group select-placeholder">
											<label for="status"><?php echo _l('project_status'); ?></label>
											<div class="clearfix"></div>
											<select name="status" id="status" class="selectpicker" data-width="100%" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
												<?php foreach($statuses as $status){ ?>
													<option value="<?php echo $status['id']; ?>" <?php if(!isset($project) && $status['id'] == 2 || (isset($project) && $project->status == $status['id'])){echo 'selected';} ?>><?php echo $status['name']; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>	
                                    <div class="col-md-6">
									  <div class="form-group" app-field-wrapper="project_cost">
										  <label for="project_cost" class="control-label">Total Price</label>
										  <input type="number" id="project_cost" name="project_cost" class="form-control" value="" placeholder="Total Price">
									  </div>
									</div>									
								</div>								
								<div class="row">
									<div class="col-md-6">
									  <div class="form-group">
									      <label for="start_dates" class="control-label">Start Date</label>
										  <input type="date" id="start_dates" name="start_dates" class="form-control" value="" placeholder="Start Date">
									  </div>
									</div>
									<div class="col-md-6">
									    <div class="form-group">
									       <label for="deadline" class="control-label">End Date</label>
										   <input type="date" id="deadline" name="deadline" class="form-control" value="" placeholder="End Date">
										</div>
									</div>
								</div>	

								 <div id="tenant" class="form-group">
								   <label for="langOpt" class="control-label">Tenant</label>
									 <select name="pro_tanent" class="form-control" id="pro_tanent" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
									   <option value="">Nothing selected</option>
									   <?php foreach($tenant_list as $tenant_item){?>
									      <option value="<?php echo $tenant_item->id ?>"><?php echo $tenant_item->tenant_name ?></option>
									   <?php } ?>
									 </select>
								 </div>
								<div class="row">
									<div class="col-md-6">
									  <div class="form-group">
									      <label for="pro_category" class="control-label"> <small class="req text-danger">* </small>Property Category</label>
										  <select name="pro_category" class="selectpicker form-control" id="pro_category" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
											   <option value=""></option>
											   <option value="Flat">Flat</option>
											   <option value="Mid Terrace">Mid Terrace</option>
											   <option value="Bungalow">Bungalow</option>
											   <option value="End of Terrace">End of Terrace</option>
											   <option value="Detached">Detached</option>
											   <option value="Land">Land</option>
											   <option value="Park Home">Park Home</option>
										  </select>
									  </div>
									</div>
									<div class="col-md-6">
									    <div class="form-group">
									      <label for="pro_type" class="control-label"> <small class="req text-danger">* </small>Property Type</label>
										  <select name="pro_type" class="selectpicker form-control" id="pro_type" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>" >
											   <option value=""></option>
											   <option value="Sale">Sale</option>
											   <option value="Rent">Rent</option>
											   <option value="Lease">Lease</option>
											   <option value="Management">Management</option>
										  </select>
										</div>
									</div>
								</div>		
								<div class="row">
									<div class="col-md-6">
									  <div class="form-group">
									      <label for="pro_floor" class="control-label">Number of Floor</label>
										  <select name="pro_floor" class="selectpicker form-control" id="pro_floor" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
											   <option value=""></option>
											   <option value="1">1</option>
											   <option value="2">2</option>
											   <option value="3">3</option>
											   <option value="4">4</option>
											   <option value="5">5</option>
											   <option value="6">6</option>
											   <option value="7">7</option>
											   <option value="8">8</option>
											   <option value="9">9</option>
											   <option value="10">10</option>
											   <option value="11">11</option>
											   <option value="12">12</option>
											   <option value="13">13</option>
											   <option value="14">14</option>
											   <option value="15">15</option>
											   <option value="16">16</option>
											   <option value="17">17</option>
											   <option value="18">18</option>
											   <option value="19">19</option>
											   <option value="20">20</option>
										  </select>
									  </div>
									</div>
									<div class="col-md-6">
									    <div class="form-group">
									      <label for="pro_bedrooms" class="control-label">Number of Bedrooms</label>
										  <select name="pro_bedrooms" class="selectpicker form-control" id="pro_bedrooms" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
											   <option value=""></option>
											   <option value="1">1</option>
											   <option value="2">2</option>
											   <option value="3">3</option>
											   <option value="4">4</option>
											   <option value="5">5</option>
											   <option value="6">6</option>
											   <option value="7">7</option>
											   <option value="8">8</option>
											   <option value="9">9</option>
											   <option value="10">10</option>
											   <option value="11">11</option>
											   <option value="12">12</option>
											   <option value="13">13</option>
											   <option value="14">14</option>
											   <option value="15">15</option>
										  </select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									  <div class="form-group">
									      <label for="pro_bathrooms" class="control-label">Number of Bathrooms</label>
										  <select name="pro_bathrooms" class="selectpicker form-control" id="pro_bathrooms" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
											   <option value=""></option>
											   <option value="1">1</option>
											   <option value="2">2</option>
											   <option value="3">3</option>
											   <option value="4">4</option>
											   <option value="5">5</option>
											   <option value="6">6</option>
											   <option value="7">7</option>
											   <option value="8">8</option>
											   <option value="9">9</option>
											   <option value="10">10</option>
										  </select>
									  </div>
									</div>
									<div class="col-md-6">
									    <div class="form-group">
									      <label for="pro_unitsize" class="control-label">Unit Size</label>
										  <input type="text" id="pro_unitsize" name="pro_unitsize" class="form-control" value="" placeholder="Unit Size">
										 </div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
									  <div class="form-group">
									      <label for="pro_amenities" class="control-label">Amenities</label>
										  <select name="pro_amenities" class="selectpicker form-control" id="pro_amenities" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>" multiple>
											   <option value=""></option>
											   <option value="Ac">Ac</option>
											   <option value="Computer">Computer</option>
											   <option value="Heater">Heater</option>
											   <option value="Internet">Internet</option>
											   <option value="Air Conditions">Air Conditions</option>
											   <option value="Parking">Parking</option>
											   <option value="Grill">Grill</option>
											   <option value="Parks">Parks</option>
											   <option value="Pool">Pool</option>
											   <option value="Laundry Room">Laundry Room</option>
											   <option value="Garage">Garage </option>
										  </select>
									  </div>
									</div>
									<div class="col-md-6">
									    <div class="form-group">
									      <label for="pro_country" class="control-label">Country</label>
										  <select name="pro_country" class="selectpicker form-control" id="pro_country" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
											   <option value=""></option>
											   <option value="United Kingdom">United Kingdom</option>
										  </select>
										 </div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										 <div class="form-group">
										   <label for="pro_location" class="control-label"> <small class="req text-danger">* </small>Address</label>
											 <input id="pro_location" name="pro_location" class="form-control" type="text" placeholder="Enter address here"/>
											 <input type="hidden" name="latitude" id="latitude"/>
											 <input type="hidden" name="longitude" id="longitude"/>
										 </div>
									</div>
									<div class="col-md-6">
									    <div class="form-group">
									      <label for="pro_city" class="control-label"> <small class="req text-danger">* </small>City</label>
										  <input type="text" id="pro_city" name="pro_city" class="form-control" value="" placeholder="City">
										 </div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										 <div class="form-group">
										   <label for="pro_postcode" class="control-label"> <small class="req text-danger">* </small>Postcode</label>
											 <input id="pro_postcode" name="pro_postcode" class="form-control" type="text" placeholder="Postcode"/>
										 </div>
									</div>
									<div class="col-md-6">
									    <div class="form-group">
									      <label for="pro_insurance" class="control-label">Insurance Details</label>
										  <input type="text" id="pro_insurance" name="pro_insurance" class="form-control" value="" placeholder="Insurance Details" >
										 </div>
									</div>
								</div>
								 <div class="form-group">
									  <label for="pro_description" class="control-label">Description</label>
									  <textarea id="pro_description" name="pro_description" class="form-control tinymce" rows="4"></textarea>							 
								 </div>

								 <div class="form-group">
									  <label for="propertyimage" class="control-label"><small class="req text-danger">* </small> Property Image</label>
									  <div class="uploadOuter">
											<span class="dragBox" >
											  Darg and Drop or Select image here
											<input class="propertyimage" name="pro_image" type="file" onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile"/>
											</span>
									  </div>
									  <div id="preview"></div>									 
								 </div>
                               	  
                            </div>
                           

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<script type="text/javascript">
  $(document).ready(function () {
      $('#pro_tanent').selectize({
          sortField: 'text'
      });
  });
</script>
<script type="text/javascript">
$('#pro_type').on('change',function(){
	if( $(this).val()==="Sale"){
	    $("#tenant").hide();
	}else{
	 $("#tenant").show()
	}
});
</script>

<style type="text/css">
.uploadOuter {
  padding: 20px 0px;

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

}
.dragBox:hover {
    background-color: #eff6ff;
}

#preview img {
    width: 68px;
}

.propertyimage {
	position: absolute;
	height: 100%;
	width: 100%;
	opacity: 0;
	top: 0;
	left: 0;
	cursor: pointer;
}
.draging {
  transform: scale(1.1);
}
#preview {
 
}

#tenant{
	display:none;
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

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyACtELi1l0M60sMU0SnR7kWeCKiKnSk6SM&libraries=places"></script>
 
<script>
google.maps.event.addDomListener(window, 'load', initialize);
function initialize() {
var input = document.getElementById('pro_location');
var autocomplete = new google.maps.places.Autocomplete(input);
autocomplete.addListener('place_changed', function () {
var place = autocomplete.getPlace();
// place variable will have all the information you are looking for.
 
  document.getElementById("latitude").value = place.geometry['location'].lat();
  document.getElementById("longitude").value = place.geometry['location'].lng();
});
}
</script>

<script>
<?php if (isset($project)) { ?>
var original_project_status = '<?php echo $project->status; ?>';
<?php } ?>

$(function() {

    $contacts_select = $('#notify_contacts'),
        $contacts_wrapper = $('#notify_contacts_wrapper'),
        $clientSelect = $('#clientid'),
        $contact_notification_select = $('#contact_notification');

    init_ajax_search('contacts', $contacts_select, {
        rel_id: $contacts_select.val(),
        type: 'contacts',
        extra: {
            client_id: function() {
                return $clientSelect.val();
            }
        }
    });

    if ($clientSelect.val() == '') {
        $contacts_select.prop('disabled', true);
        $contacts_select.selectpicker('refresh');
    } else {
        $contacts_select.siblings().find('input[type="search"]').val(' ').trigger('keyup');
    }

    $clientSelect.on('changed.bs.select', function() {
        if ($clientSelect.selectpicker('val') == '') {
            $contacts_select.prop('disabled', true);
        } else {
            $contacts_select.siblings().find('input[type="search"]').val(' ').trigger('keyup');
            $contacts_select.prop('disabled', false);
        }
        deselect_ajax_search($contacts_select[0]);
        $contacts_select.find('option').remove();
        $contacts_select.selectpicker('refresh');
    });

    $contact_notification_select.on('changed.bs.select', function() {
        if ($contact_notification_select.selectpicker('val') == 2) {
            $contacts_select.siblings().find('input[type="search"]').val(' ').trigger('keyup');
            $contacts_wrapper.removeClass('hide');
        } else {
            $contacts_wrapper.addClass('hide');
            deselect_ajax_search($contacts_select[0]);
        }
    });

    $('select[name="billing_type"]').on('change', function() {
        var type = $(this).val();
        if (type == 1) {
            $('#project_cost').removeClass('hide');
            $('#project_rate_per_hour').addClass('hide');
        } else if (type == 2) {
            $('#project_cost').addClass('hide');
            $('#project_rate_per_hour').removeClass('hide');
        } else {
            $('#project_cost').addClass('hide');
            $('#project_rate_per_hour').addClass('hide');
        }
    });

    appValidateForm($('form'), {
        name: 'required',
        clientid: 'required',
        start_date: 'required',
        billing_type: 'required',
        'notify_contacts[]': {
            required: {
                depends: function() {
                    return !$contacts_wrapper.hasClass('hide');
                }
            }
        },
    });

    $('select[name="status"]').on('change', function() {
        var status = $(this).val();
        var mark_all_tasks_completed = $('.mark_all_tasks_as_completed');
        var notify_project_members_status_change = $('.notify_project_members_status_change');
        mark_all_tasks_completed.removeClass('hide');
        if (typeof(original_project_status) != 'undefined') {
            if (original_project_status != status) {

                mark_all_tasks_completed.removeClass('hide');
                notify_project_members_status_change.removeClass('hide');

                if (status == 4 || status == 5 || status == 3) {
                    $('.recurring-tasks-notice').removeClass('hide');
                    var notice = "<?php echo _l('project_changing_status_recurring_tasks_notice'); ?>";
                    notice = notice.replace('{0}', $(this).find('option[value="' + status + '"]').text()
                        .trim());
                    $('.recurring-tasks-notice').html(notice);
                    $('.recurring-tasks-notice').append(
                        '<input type="hidden" name="cancel_recurring_tasks" value="true">');
                    mark_all_tasks_completed.find('input').prop('checked', true);
                } else {
                    $('.recurring-tasks-notice').html('').addClass('hide');
                    mark_all_tasks_completed.find('input').prop('checked', false);
                }
            } else {
                mark_all_tasks_completed.addClass('hide');
                mark_all_tasks_completed.find('input').prop('checked', false);
                notify_project_members_status_change.addClass('hide');
                $('.recurring-tasks-notice').html('').addClass('hide');
            }
        }

        if (status == 4) {
            $('.project_marked_as_finished').removeClass('hide');
        } else {
            $('.project_marked_as_finished').addClass('hide');
            $('.project_marked_as_finished').prop('checked', false);
        }
    });

    $('form').on('submit', function() {
        $('select[name="billing_type"]').prop('disabled', false);
        $('#available_features,#available_features option').prop('disabled', false);
        $('input[name="project_rate_per_hour"]').prop('disabled', false);
    });

    var progress_input = $('input[name="progress"]');
    var progress_from_tasks = $('#progress_from_tasks');
    var progress = progress_input.val();

    $('.project_progress_slider').slider({
        min: 0,
        max: 100,
        value: progress,
        disabled: progress_from_tasks.prop('checked'),
        slide: function(event, ui) {
            progress_input.val(ui.value);
            $('.label_progress').html(ui.value + '%');
        }
    });

    progress_from_tasks.on('change', function() {
        var _checked = $(this).prop('checked');
        $('.project_progress_slider').slider({
            disabled: _checked
        });
    });

    $('#project-settings-area input').on('change', function() {
        if ($(this).attr('id') == 'view_tasks' && $(this).prop('checked') == false) {
            $('#create_tasks').prop('checked', false).prop('disabled', true);
            $('#edit_tasks').prop('checked', false).prop('disabled', true);
            $('#view_task_comments').prop('checked', false).prop('disabled', true);
            $('#comment_on_tasks').prop('checked', false).prop('disabled', true);
            $('#view_task_attachments').prop('checked', false).prop('disabled', true);
            $('#view_task_checklist_items').prop('checked', false).prop('disabled', true);
            $('#upload_on_tasks').prop('checked', false).prop('disabled', true);
            $('#view_task_total_logged_time').prop('checked', false).prop('disabled', true);
        } else if ($(this).attr('id') == 'view_tasks' && $(this).prop('checked') == true) {
            $('#create_tasks').prop('disabled', false);
            $('#edit_tasks').prop('disabled', false);
            $('#view_task_comments').prop('disabled', false);
            $('#comment_on_tasks').prop('disabled', false);
            $('#view_task_attachments').prop('disabled', false);
            $('#view_task_checklist_items').prop('disabled', false);
            $('#upload_on_tasks').prop('disabled', false);
            $('#view_task_total_logged_time').prop('disabled', false);
        }
    });

    // Auto adjust customer permissions based on selected project visible tabs
    // Eq Project creator disable TASKS tab, then this function will auto turn off customer project option Allow customer to view tasks

    $('#available_features').on('change', function() {
        $("#available_features option").each(function() {
            if ($(this).data('linked-customer-option') && !$(this).is(':selected')) {
                var opts = $(this).data('linked-customer-option').split(',');
                for (var i = 0; i < opts.length; i++) {
                    var project_option = $('#' + opts[i]);
                    project_option.prop('checked', false);
                    if (opts[i] == 'view_tasks') {
                        project_option.trigger('change');
                    }
                }
            }
        });
    });
    $("#view_tasks").trigger('change');
    <?php if (!isset($project)) { ?>
    $('#available_features').trigger('change');
    <?php } ?>
});
</script>
</body>

</html>
