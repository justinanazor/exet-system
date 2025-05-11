<div class="row">
                    <div class="col-md-5">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <?php echo form_open(base_url(). 'admin/student/create/', array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('student Name');?></label>
                                            <input type="text" class="form-control" name="name" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('student Matric No.');?></label>
                                            <input type="text" class="form-control" name="email" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('student Phone');?></label>
                                            <input type="text" class="form-control" name="phone" value="">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('student Gender');?></label>
                                            <input type="text" class="form-control" name="sex" value="">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('student Address');?></label>
                                            <input type="text" class="form-control" name="address" value="">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('Programme');?></label>
                                            <select name="class_id" class="form-control" onchange="get_class_sections(this.value)">
                                                <option value="">Select programme</option>
                                                
                                                <?php $select_classes = $this->class_model->selectClasses();
                                                        foreach($select_classes as $key => $class) : ?>
                                                <option value="<?php echo $class['class_id'];?>"><?php echo $class['name'];?></option>
                                                <?php endforeach;?>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('hostel type');?></label>
                                            <select class="form-control" name="type" id="" required>
                                                <option value="">-- Select a Hotel --</option>

                                                <?php $select_hostel_admins = $this->hostel_model->selectHostels();
                                                        foreach($select_hostel_admins as $key => $hostel) : ?>
                                                <option value="<?php echo $hostel['id'];?>"><?php echo $hostel['name'];?></option>
                                                <?php endforeach;?>

                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('Parent');?></label>
                                            <select class="form-control" name="parent_id" id="" required>
                                                <option value="">-- Select Parent --</option>

                                                <?php $select_parent_admins = $this->parent_model->selectparent_admin();
                                                        foreach($select_parent_admins as $key => $parent) : ?>
                                                <option value="<?php echo $parent['guardian_id'];?>"><?php echo $parent['name'];?></option>
                                                <?php endforeach;?>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('student Password');?></label>
                                            <input type="text" class="form-control" name="password" value="">
                                        </div>



                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('student Image');?></label>
                                            <input type='file' class="form-control" name="userfile" onChange="readURL(this);">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-rounded btn-sm btn-block" style="background-color:#34B8F4; color:white"><?php echo get_phrase('Save');?></button>
                                   <?php echo form_close();?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>



    <div class="col-sm-7">
		<div class="panel panel-info">
            <div class="panel-body table-responsive">
                <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('List students');?>
                <hr>
 				<table id="example23" class="display nowrap" cellspacing="0" width="100%">
                	<thead>
                		<tr>
                            <th><div><?php echo get_phrase('Image');?></div></th>
                    		<th><div><?php echo get_phrase('Name');?></div></th>
                    		<th><div><?php echo get_phrase('Email');?></div></th>
                    		<th><div><?php echo get_phrase('Phone');?></div></th>
                    		<th><div><?php echo get_phrase('Actions');?></div></th>
						</tr>
					</thead>
                    <tbody>
    
                 <?php $select_all_students = $this->student_model->selectstudent();
                        foreach($select_all_students as $key => $student) : ?> 
                        <tr>
                            <td><img src="<?php echo $this->crud_model->get_image_url('student', $student['student_id']);?>" class="img-circle" width="30"></td>
							<td><?php echo $student['name'];?></td>
							<td><?php echo $student['email'];?></td>
							<td><?php echo $student['phone'];?></td>
							<td>
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_student/<?php echo $student['student_id'];?>')">
                            <button class="btn btn-info btn-rounded btn-sm">
                                <i class="fa fa-edit"></i> <!-- Edit Icon -->
                            </button>
                        </a>

                            
                          <a href="#" onclick="confirm_modal('<?php echo base_url();?>admin/student/delete/<?php echo $student['student_id'];?>')">
                            <button class="btn btn-danger btn-rounded btn-sm">
                                <i class="fa fa-trash"></i> <!-- Trash Can Icon -->
                            </button>
                        </a>
                       </td>
                        </tr>
                        <?php endforeach;?>
                  
                    </tbody>
                </table>
			</div>
		</div>
	</div>

</div>


<script type="text/javascript">

function get_class_sections (class_id){

    $.ajax({
        url: '<?php echo base_url();?>admin/get_class_sections/' + class_id ,
        success: function(response){
            jQuery('#section_id').html(response);
            }
        });

}

</script>