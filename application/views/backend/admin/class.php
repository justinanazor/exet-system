<div class="row">
                    <div class="col-md-5">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <?php echo form_open(base_url(). 'admin/classes/create/', array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('Programme Name');?></label>
                                            <input type="text" class="form-control" name="name" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('Short Name');?></label>
                                            <input type="text" class="form-control" name="name_numeric" value="">
                                        </div>  
                                        <!-- <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('hostel_admin');?></label>
                                            <select name="hostel_id" class="form-control">
                                                <option value="">Select Hostel admin</option>
                                                
                                                
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
                <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('List Claases');?>
                <hr>
 				<table id="example23" class="display nowrap" cellspacing="0" width="100%">
                	<thead>
                		<tr>
                    		<th><div><?php echo get_phrase('Class');?></div></th>
                    		<th><div><?php echo get_phrase('Short Name');?></div></th>
                    		<!-- <th><div><?php echo get_phrase('hostel_admin');?></div></th> -->
                    		<th><div><?php echo get_phrase('Actions');?></div></th>
						</tr>
					</thead>
                    <tbody>
    
                 <?php $select_all_classes = $this->class_model->selectClasses();
                        foreach($select_all_classes as $key => $class) : ?> 
                        <tr>
							<td><?php echo $class['name'];?></td>
							<td><?php echo $class['name_numeric'];?></td>
							<!-- <td><?php echo $this->crud_model->get_type_name_by_id('hostel', $class['hostel_id']);?></td> -->
							<td>
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_class/<?php echo $class['class_id'];?>')"><button class="btn btn-info btn-rounded btn-sm"><?php echo get_phrase('Edit');?></button></a>
                            
                            <a href="#" onclick="confirm_modal('<?php echo base_url();?>admin/classes/delete/<?php echo $class['class_id'];?>')"><button class="btn btn-danger btn-rounded btn-sm"><?php echo get_phrase('Delete');?></button></a>                            </td>
                        </tr>
                        <?php endforeach;?>
                  
                    </tbody>
                </table>
			</div>
		</div>
	</div>








</div>