<div class="row">
                    <div class="col-md-5">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <?php echo form_open(base_url(). 'admin/security/create/', array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('security Name');?></label>
                                            <input type="text" class="form-control" name="name" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('security Staffno');?></label>
                                            <input type="text" class="form-control" name="staffno" value="">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('security Password');?></label>
                                            <input type="password" class="form-control" name="password" value="">
                                        </div>
                                        

                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('security Phone');?></label>
                                            <input type="text" class="form-control" name="phone" value="">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('security Image');?></label>
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
                <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('List of security');?>
                <hr>
 				<table id="example23" class="display nowrap" cellspacing="0" width="100%">
                	<thead>
                		<tr>
                            <th><div><?php echo get_phrase('Image');?></div></th>
                    		<th><div><?php echo get_phrase('Name');?></div></th>
                    		<th><div><?php echo get_phrase('Staffno');?></div></th>
                    		<th><div><?php echo get_phrase('Phone');?></div></th>
                            
                    		<th><div><?php echo get_phrase('Actions');?></div></th>
						</tr>
					</thead>
                    <tbody>
    
                 <?php $select_all_security_admins = $this->security_model->selectsecurity_admin();
                        foreach($select_all_security_admins as $key => $security_admin) : ?> 
                        <tr>
                            <td><img src="<?php echo $this->crud_model->get_image_url('security', $security_admin['security_id']);?>" class="img-circle" width="30"></td>
							<td><?php echo $security_admin['name'];?></td>
							<td><?php echo $security_admin['email'];?></td>
							<td><?php 
                            echo $security_admin['phone'];?></td>
                            
							<td>
                                
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_security/<?php echo $security_admin['security_id'];?>')"><button class="btn btn-info btn-rounded btn-sm">
                            <i class="fa fa-edit"></i> <!-- edit column with icon -->
                        </button>
                           
                            <a href="#" onclick="confirm_modal('<?php echo base_url();?>admin/security/delete/<?php echo $security_admin['id'];?>')"><button class="btn btn-danger btn-rounded btn-sm">
                            <i class="fa fa-trash"></i> <!-- Trash Can Icon -->
                        </button>    </td>                         
                           
                        </tr>
                        <?php endforeach;?>
                  
                    </tbody>
                </table>
			</div>
		</div>
	</div>








</div>