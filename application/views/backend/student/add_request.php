
<div class="col-sm-12">
    <div class="panel panel-info">
        <div class="panel-body table-responsive">
          <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('create a request'); ?>
          <hr>
        <?php echo form_open(site_url('student/manage_request/create') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>

                <div class="form-group">
                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Name');?></label>
                    <div class="col-sm-12">
                        <input type="hidden" name="student_id" value="<?php echo $this->session->userdata('login_user_id');  ?>">
                        <?php $student = $this->db->get_where('student', array('student_id' => $this->session->userdata('login_user_id')))->row_array(); ?>
                       
                        <input type="text" value = "<?php echo $this->session->userdata('name'); ?>"class="form-control" name="" readonly>
                    </div>
                </div>
            

                <div class="form-group">
                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Description');?></label>
                    <div class="col-sm-12">
                        <textarea class="form-control" name="description"  id=""></textarea>
                    </div>
                </div>

                <div id="section_subject_selection_holder"></div>


                <!-- <div class="form-group">
                    <label class="col-md-12" for="example-text">
                        <?php echo get_phrase('exet_date (from - to');?>
                    </label>
                    <div class="col-sm-12">
                        <input class="form-control m-r-10" name="date" type="date" value="<?php echo date('Y-m-d') ?>" id="example-date-input" required>
                    </div>
                </div> -->

                <!-- .row -->
                <div class="row">
                    <label class="col-md-12" for="example-text"><?php echo get_phrase('exet_date (From - to)');?></label>
                    <div class="col-lg-6">
                        <div class="input-group" data-placement="bottom" data-align="top" data-autoclose="true">
                            <input type="date" name="time_start" class="form-control" value="<?php echo date('Y-m-d') ?>">
                            <!-- <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> </span> -->
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="input-group " data-placement="left" data-align="top" data-autoclose="true">
                            <input type="date" name="time_end" class="form-control" value="<?php echo date('Y-m-d') ?>">
                            <!-- <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> </span> -->
                        </div>
                    </div>

                </div>
                <!-- /.row -->

                <hr>

                
                <div class="form-group">
                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Reason');?></label>
                    <div class="col-sm-12">
                        <textarea rows="5" name="reason" class="form-control" placeholder="please specify reason for permission here" ></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-rounded btn-block btn-sm"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('add_request'); ?></button>
                </div>
            </form>                
        </div> 
    </div>
</div>

<script type="text/javascript">
    var class_id = '';
    var starting_hour = '';
    var starting_minute = '';
    var ending_hour = '';
    var ending_minute = '';

    jQuery(document).ready(function($) {
        $('#add_class_routine').attr('disabled','disabled')
        });
    
        function get_class_section_subject(class_id) {
            $.ajax({
            url: '<?php echo base_url();?>admin/get_class_section_subject/' + class_id ,
            success: function(response){
            jQuery('#section_subject_selection_holder').html(response);
            }
            });
        }
        function check_validation(){
            console.log('class_id: '+class_id+' starting_hour:'+starting_hour+' starting_minute: '+starting_minute+' ending_hour: '+ending_hour+' ending_minute: '+ending_minute);
            if(class_id !== '' && starting_hour !== '' && starting_minute  !== '' && ending_hour  !== '' && ending_minute !== ''){
            $('#add_class_routine').removeAttr('disabled');
            }    
            }
            $('#class_id').change(function() {
            class_id = $('#class_id').val();
            check_validation();
            });
            $('#starting_hour').change(function() {
            starting_hour = $('#starting_hour').val();
            check_validation();
            });
            $('#starting_minute').change(function() {
            starting_minute = $('#starting_minute').val();
            check_validation();
            });
            $('#ending_hour').change(function() {
            ending_hour = $('#ending_hour').val();
            check_validation();
            });
            $('#ending_minute').change(function() {
            ending_minute = $('#ending_minute').val();
            check_validation();
            });
    </script>