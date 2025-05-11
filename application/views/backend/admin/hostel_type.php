<div class="row">
                    <div class="col-md-5">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <?php echo form_open(base_url(). 'admin/hostel_type/create/', array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('Hostel Name');?></label>
                                            <input type="text" class="form-control" name="name" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('Number of Rooms');?></label>
                                            <input type="text" class="form-control" name="rooms" value="">
                                        </div>  
                                        <!-- <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('hostel_admin');?></label>
                                            <select name="hostel_id" class="form-control">
                                                <option value="">Select Hostel admin</option>
                                                
                                                <?php $select_hostel_admins = $this->hostel_admin_model->selecthostel_admin();
                                                        foreach($select_hostel_admins as $key => $hostel_admin) : ?>
                                                <option value="<?php echo $hostel_admin['hostel_id'];?>"><?php echo $hostel_admin['name'];?></option>
                                                <?php endforeach;?>

                                            </select>
                                        </div> -->

                                        
                                        <button type="submit" class="btn btn-rounded btn-sm btn-block" style="background-color:#34B8F4; color:white"><?php echo get_phrase('Save');?></button>
                                   <?php echo form_close();?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>



    <div class="col-sm-7">
		<div class="panel panel-info">
            <div class="panel-body table-responsive">
                <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('List Hostels');?>
                <hr>
 				<table id="example23" class="display nowrap" cellspacing="0" width="100%">
                	<thead>
                		<tr>
                    		<th><div><?php echo get_phrase('name');?></div></th>
                    		<th><div><?php echo get_phrase('No. of Rooms');?></div></th>
                    		<!-- <th><div><?php echo get_phrase('hostel_admin');?></div></th> -->
                    		<th><div><?php echo get_phrase('Actions');?></div></th>
						</tr>
					</thead>
                    <tbody>
                    <?php $select_all_hotels = $this->hostel_model->selectHostels();
                        foreach($select_all_hotels as $key => $hostel) : ?> 
                        <tr>
							<td><?php echo $hostel['name'];?></td>
							<td><?php echo $hostel['rooms'];?></td>
                            <td><a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_hostel_type/<?php echo $hostel['id'];?>')"><button class="btn btn-info btn-rounded btn-sm"><?php echo get_phrase('Edit');?></button></a>
                            
                            <a href="#" onclick="confirm_modal('<?php echo base_url();?>admin/hostel_type/delete/<?php echo $hostel['id'];?>')"><button class="btn btn-danger btn-rounded btn-sm"><?php echo get_phrase('Delete');?></button></a>                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
		</div>
	</div>








</div>