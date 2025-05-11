<div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                
                                <?php $select_from_hostel = $this->db->get_where('hostel_type', array('id' => $param2))->result_array();
                                        foreach($select_from_hostel as $key => $hostel) : ?>

                                    <?php echo form_open(base_url(). 'admin/hostel_type/update/'. $param2, array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('Hostel Name');?></label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $hostel['name'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('No. of Rooms');?></label>
                                            <input type="text" class="form-control" name="rooms" value="<?php echo $hostel['rooms'];?>">
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

                                        
                                        <button type="submit" class="btn btn-rounded btn-sm btn-block" style="background-color:#34B8F4; color:white"><?php echo get_phrase('Save');?></button>
                                   <?php echo form_close();?>
                                   <?php endforeach;?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
</div>