<div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">

                                <?php $select_from_hostel_admin = $this->db->get_where('hostel', array('hostel_id' => $param2))->result_array();
                                        foreach($select_from_hostel_admin as $key => $hostel_admin) : ?>

                                    <?php echo form_open(base_url(). 'admin/hostel_admin/update/'.$param2, array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('hostel_admin Name');?></label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $hostel_admin['name'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('hostel_admin Email');?></label>
                                            <input type="email" class="form-control" name="email" value="<?php echo $hostel_admin['email'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('hostel_admin Phone');?></label>
                                            <input type="text" class="form-control" name="phone" value="<?php echo $hostel_admin['phone'];?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('hostel_type');?></label>
                                            <select name="type" class="form-control">
                                                <option value="">Select Hostel Admin</option>
                                            <?php $select_hostels = $this->db->get('hostel_type')->result_array();
                                                        foreach($select_hostels as $key => $hostel) : ?>
                                                <option value="<?php echo $hostel['id'];?>"
                                                <?php if($hostel_admin['type'] == $hostel['id']) echo 'selected="selected"' ;?>><?php echo $hostel['name'];?></option>
                                                <?php endforeach;?>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('hostel_admin Image');?></label>
                                            <input type='file' class="form-control" name="userfile" onChange="readURL(this);">
                                            <img src="<?php echo $this->crud_model->get_image_url('hostel', $hostel_admin['hostel_id']);?>" class="img-circle" width="30">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-rounded btn-sm btn-block" style="background-color:#34B8F4; color:white"><?php echo get_phrase('Save');?></button>
                                   <?php echo form_close();?>

                                        <?php endforeach;?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>