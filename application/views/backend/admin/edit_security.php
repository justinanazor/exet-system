<div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">

                                <?php $select_from_security_admin = $this->db->get_where('security', array('security_id' => $param2))->result_array();
                                        foreach($select_from_security_admin as $key => $security_admin) : ?>

                                    <?php echo form_open(base_url(). 'admin/security/update/'.$param2, array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('security_admin Name');?></label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $security_admin['name'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('security_Staffno');?></label>
                                            <input type="text" class="form-control" name="staffno" value="<?php echo $security_admin['email'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('security_admin Phone');?></label>
                                            <input type="text" class="form-control" name="phone" value="<?php echo $security_admin['phone'];?>">
                                        </div>
                                        

                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('security_admin Image');?></label>
                                            <input type='file' class="form-control" name="userfile" onChange="readURL(this);">
                                            <img src="<?php echo $this->crud_model->get_image_url('security', $security_admin['id']);?>" class="img-circle" width="30">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-rounded btn-sm btn-block" style="background-color:#34B8F4; color:white"><?php echo get_phrase('Save');?></button>
                                   <?php echo form_close();?>

                                        <?php endforeach;?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>