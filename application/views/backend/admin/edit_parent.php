<div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">

                                <?php $select_from_parent_admin = $this->db->get_where('guardian', array('guardian_id' => $param2))->result_array();
                                        foreach($select_from_parent_admin as $key => $parent_admin) : ?>

                                    <?php echo form_open(base_url(). 'admin/parent/update/'.$param2, array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('parent_admin Name');?></label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $parent_admin['name'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('parent_admin Email');?></label>
                                            <input type="email" class="form-control" name="email" value="<?php echo $parent_admin['email'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('parent_admin Phone');?></label>
                                            <input type="text" class="form-control" name="phone" value="<?php echo $parent_admin['phone'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('parent_admin Address');?></label>
                                            <input type="text" class="form-control" name="address" value="<?php echo $parent_admin['address'];?>">
                                        </div>

                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('parent_admin Image');?></label>
                                            <input type='file' class="form-control" name="userfile" onChange="readURL(this);">
                                            <img src="<?php echo $this->crud_model->get_image_url('guardian', $parent_admin['guardian_id']);?>" class="img-circle" width="30">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-rounded btn-sm btn-block" style="background-color:#34B8F4; color:white"><?php echo get_phrase('Save');?></button>
                                   <?php echo form_close();?>

                                        <?php endforeach;?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>