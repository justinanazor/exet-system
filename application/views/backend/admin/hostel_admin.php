<div class="row">
                    <div class="col-md-5">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <?php echo form_open(base_url(). 'admin/hostel_admin/create/', array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('hostel_admin Name');?></label>
                                            <input type="text" class="form-control" name="name" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('hostel_admin Email');?></label>
                                            <input type="email" class="form-control" name="email" value="">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('hostel_admin Password');?></label>
                                            <input type="password" class="form-control" name="password" value="">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('hostel_admin Phone');?></label>
                                            <input type="text" class="form-control" name="phone" value="">
                                        </div> -->

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
                                            <label for="exampleInputPassword1"><?php echo get_phrase('hostel_admin Phone');?></label>
                                            <input type="text" class="form-control" name="phone" value="">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('hostel_admin Image');?></label>
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
                <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('List hostel_admins');?>
                <hr>
 				<table id="example23" class="display nowrap" cellspacing="0" width="100%">
                	<thead>
                		<tr>
                            <th><div><?php echo get_phrase('Image');?></div></th>
                    		<th><div><?php echo get_phrase('Name');?></div></th>
                    		<th><div><?php echo get_phrase('Email');?></div></th>
                    		<th><div><?php echo get_phrase('Phone');?></div></th>
                            <th><div><?php echo get_phrase('Hostel type');?></div></th>
                    		<th><div><?php echo get_phrase('Actions');?></div></th>
						</tr>
					</thead>
                    <tbody>
    
                 <?php $select_all_hostel_admins = $this->hostel_admin_model->selecthostel_admin();
                        foreach($select_all_hostel_admins as $key => $hostel_admin) : ?> 
                        <tr>
                            <td><img src="<?php echo $this->crud_model->get_image_url('hostel', $hostel_admin['hostel_admin_id']);?>" class="img-circle" width="30"></td>
							<td><?php echo $hostel_admin['name'];?></td>
							<td><?php echo $hostel_admin['email'];?></td>
							<td><?php 
                            echo $hostel_admin['phone'];?></td>
                            <td><?php 
                            $data =  $this->db->get_where('hostel_type', array('id' => $hostel_admin['type']))->row_array();
                            echo $data['name'];?></td>
							<td>
                                
                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_hostel/<?php echo $hostel_admin['hostel_id'];?>')">
                        <button class="btn btn-info btn-rounded btn-sm">
                            <i class="fa fa-edit"></i> <!-- edit column with icon -->
                        </button>
                       </a>

                            
                       <a href="#" onclick="confirm_modal('<?php echo base_url();?>admin/hostel_admin/delete/<?php echo $hostel_admin['hostel_admin_id'];?>')">
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