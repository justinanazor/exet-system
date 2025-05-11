<div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                <?php $select = $this->db->get_where('student', array('student_id'=> $param2))->result_array();
                                        foreach ($select as $key => $student) : ?>
                                    <?php echo form_open(base_url(). 'admin/student/update/'. $param2, array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>  
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('student Name');?></label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $student['name'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo get_phrase('student Email');?></label>
                                            <input type="text" class="form-control" name="email" value="<?php echo $student['email'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('student Phone');?></label>
                                            <input type="text" class="form-control" name="phone" value="<?php echo $student['phone'];?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('student Gender');?></label>
                                            <input type="text" class="form-control" name="sex" value="<?php echo $student['sex'];?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('student Address');?></label>
                                            <input type="text" class="form-control" name="address" value="<?php echo $student['address'];?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('Programme');?></label>
                                            <select name="class_id" class="form-control" >
                                                <option value="">Select Programme</option>
                                                
                                                <?php $select_classes = $this->db->get('class')->result_array();
                                                        foreach($select_classes as $key => $class) : ?>
                                                <option value="<?php echo $class['class_id'];?>"<?php if($student['class_id'] == $class['class_id']) echo 'selected="selected"' ;?>><?php echo $class['name'];?></option>
                                                <?php endforeach;?>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('Hostel Type');?></label>
                                            <select name="type" id="section_holder" class="form-control" required>
                                                <<?php $select_hostels = $this->db->get('hostel_type')->result_array();
                                                        foreach($select_hostels as $key => $hostel) : ?>
                                                <option value="<?php echo $hostel['id'];?>"<?php if($student['hostel'] == $hostel['id']) echo 'selected="selected"' ;?>><?php echo $hostel['name'];?></option>
                                                <?php endforeach;?>

                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('Parent');?></label>
                                            <select name="parent_id" id="section_holder" class="form-control" required>
                                                <<?php $select_parents = $this->db->get('guardian')->result_array();
                                                        foreach($select_parents as $key => $parent) : ?>
                                                <option value="<?php echo $parent['guardian_id'];?>"<?php if($student['parent_id'] == $parent['guardian_id']) echo 'selected="selected"' ;?>><?php echo $parent['name'];?></option>
                                                <?php endforeach;?>

                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><?php echo get_phrase('student Image');?></label>
                                            <input type='file' class="form-control" name="userfile" onChange="readURL(this);">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-rounded btn-sm btn-block" style="background-color:#34B8F4; color:white"><?php echo get_phrase('Save');?></button>
                                   <?php echo form_close();?>
                                <?php endforeach;?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">

function get_class_sections (class_id){

    $.ajax({
        url: '<?php echo base_url();?>admin/get_class_sections/' + class_id ,
        success: function(response){
            jQuery('#section_holder').html(response);
            }
        });

}

</script>