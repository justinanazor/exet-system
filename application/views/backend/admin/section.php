<div class="row">
                    <div class="col-md-5">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <?php echo form_open(base_url(). 'admin/section/create/', array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('Semester Name');?></label>
                                            <input type="text" class="form-control" name="name" value="">
                                        </div>
                                        <!--<div class="form-group">-->
                                        <!--    <label for="exampleInputEmail1"><?php echo get_phrase('Nick Name');?></label>-->
                                        <!--    <input type="text" class="form-control" name="nick_name" value="">-->
                                        <!--</div>-->
                                        <!-- <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('Hostel Admin');?></label>
                                            <select name="hostel_id" class="form-control">
                                                <option value="">Select Hostel Admin</option>
                                                
                                                <?php $select_hostel_admins = $this->hostel_admin_model->selecthostel_admin();
                                                        foreach($select_hostel_admins as $key => $hostel_admin) : ?>
                                                <option value="<?php echo $hostel_admin['hostel_id'];?>"><?php echo $hostel_admin['name'];?></option>
                                                <?php endforeach;?>

                                            </select>
                                        </div> -->

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('Programme');?></label>
                                            <select name="class_id" class="form-control">
                                                <option value="">Select Programme</option>
                                                
                                                <?php $select_classes = $this->class_model->selectClasses();
                                                        foreach($select_classes as $key => $class) : ?>
                                                <option value="<?php echo $class['class_id'];?>"><?php echo $class['name'];?></option>
                                                <?php endforeach;?>

                                            </select>
                                        </div>


                                        
                                        <button type="submit" class="btn btn-success btn-rounded btn-sm btn-block"><?php echo get_phrase('Save');?></button>
                                   <?php echo form_close();?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>



    <div class="col-sm-7">
		<div class="panel panel-info">
            <div class="panel-body table-responsive">
                <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('List Programmes');?>
                <hr>
 				<table id="example23" class="display nowrap" cellspacing="0" width="100%">
                	<thead>
                		<tr>
                    		<th><div><?php echo get_phrase('Name');?></div></th>
                    		<!--<th><div><?php echo get_phrase('Nick Name');?></div></th>-->
                    		<!-- <th><div><?php echo get_phrase('Hostel admin');?></div></th> -->
                            <th><div><?php echo get_phrase('Programme');?></div></th>
                    		<th><div><?php echo get_phrase('Actions');?></div></th>
						</tr>
					</thead>
                    <tbody>
    
                 <?php $select_all_sections = $this->section_model->selectSections();
                        foreach($select_all_sections as $key => $section) : ?> 
                        <tr>
							<td><?php echo $section['name'];?></td>
							<!--<td><?php echo $section['nick_name'];?></td>-->
							<!-- <td><?php echo $this->crud_model->get_type_name_by_id('hostel', $section['hostel_id']);?></td> -->
                            <td><?php echo $this->crud_model->get_type_name_by_id('class', $section['class_id']);?></td>
                            <td>
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_section/<?php echo $section['section_id'];?>')"><button class="btn btn-info btn-rounded btn-sm"><?php echo get_phrase('Edit');?></button></a>
                            
                            <a href="#" onclick="confirm_modal('<?php echo base_url();?>admin/section/delete/<?php echo $section['section_id'];?>')"><button class="btn btn-danger btn-rounded btn-sm"><?php echo get_phrase('Delete');?></button></a>                           
                         </td>
                        </tr>
                        <?php endforeach;?>
                  
                    </tbody>
                </table>
			</div>
		</div>
	</div>








</div>