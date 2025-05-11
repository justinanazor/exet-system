<div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                
                                <?php $select_from_claases = $this->db->get_where('class', array('class_id' => $param2))->result_array();
                                        foreach($select_from_claases as $key => $class) : ?>

                                    <?php echo form_open(base_url(). 'admin/classes/update/'. $param2, array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('Programme Name');?></label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $class['name'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('Nick Name');?></label>
                                            <input type="text" class="form-control" name="name_numeric" value="<?php echo $class['name_numeric'];?>">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('Hostel Admin');?></label>
                                            <select name="hostel_id" class="form-control">
                                                <option value="">Select Hostel Admin</option>
                                                
                                                <?php $select_hostels = $this->db->get('hostel')->result_array();
                                                        foreach($select_hostels as $key => $hostel) : ?>
                                                <option value="<?php echo $hostel['hostel_id'];?>"
                                                <?php if($class['hostel_id'] == $hostel['hostel_id']) echo 'selected="selected"' ;?>><?php echo $hostel['name'];?></option>
                                                <?php endforeach;?>

                                            </select>
                                        </div> -->

                                        
                                        <button type="submit" class="btn btn-success btn-rounded btn-sm btn-block"><?php echo get_phrase('Save');?></button>
                                   <?php echo form_close();?>
                                   <?php endforeach;?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
</div>