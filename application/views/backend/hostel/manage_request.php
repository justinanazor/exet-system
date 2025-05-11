<div class="col-sm-12">
	<div class="panel panel-info">                     
		<div class="panel-body table-responsive">
			<i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('manage_requests');?>
			<hr>
			<a href="<?php echo site_url('hostel/manage_request');?>" class="btn" style="color: #fff; background-color:#34B8F4">
            	<?php echo get_phrase('requests_list');?>
        	</a>
			
			<hr>						
       <table id="example23" class="display nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><div><?php echo get_phrase('Matric_no');?></div></th>
                    <th><div><?php echo get_phrase('description');?></div></th>
                    <th><div><?php echo get_phrase('date_start');?></div></th>
                    <th><div><?php echo get_phrase('date_end');?></div></th>
                    <th><div><?php echo get_phrase('status');?></div></th>
                    <th><div><?php echo get_phrase('options');?></div></th>
					<th><div><?php echo get_phrase('days_overstayed');?></div></th>
                </tr>

       </thead>
				<tbody>
					<?php foreach($requests as $key => $row):?>
					<tr>
					<td>
							<?php 
							$matno = $this->db->get_where('student', array('student_id' => $row['student_id']))->row_array();
								 echo $matno['email']; ?>
							</a>
						</td>
						<td>
							<?php  echo word_limiter($row['description'], 10); ?>
						</td>
						<td>
						<?php  echo $row['time_start']; ?>
						</td>
						<td>
						<?php  echo $row['time_end']; ?>
						</td>
						<td>
							<button class="btn btn-<?php echo $row['status'] == 'approved' ? 'success' : 'warning'; ?> btn-xs">
								<?php echo get_phrase($row['status']);?>
							</button>
						</td>
						<td style="text-align: center;">
						<?php if ($row['p_status'] == 'permission'): ?>

						<a href="#" onclick="" type="button"  class = "btn btn-rounded btn-sm" style="color:white; background-color:#34B8F4"><i class="fa fa-share-alt" aria-hidden="true"></i> <?php echo get_phrase('sent to parent'); ?></a>	

					<?php elseif ($row['p_status'] == ''): ?>
						<a href="#" onclick="send_modal('<?php echo site_url('hostel/manage_request_status/'.$row['id'].'/permission'); ?>', 'generic_confirmation');" type="button" class = "btn btn-rounded btn-sm" style="color:white; background-color:#34B8F4"><i class="fa fa-share-alt" aria-hidden="true"></i> <?php echo get_phrase('send_to_parent'); ?></a>
							

						<?php elseif ($row['admin_status'] == 'permission'): ?>

							<a href="#" onclick="" type="button" style="background-color:orange;color:white;" class = " btn-rounded btn-sm" style="color:white"><?php echo get_phrase('approved_by_parent'); ?></a>
							<a href="#" onclick="publish_modal('<?php echo site_url('hostel/manage_request_hostel_status/'.$row['id'].'/approved'); ?>', 'generic_confirmation');" type="button" class = "btn btn-success btn-rounded btn-sm" style="color:white"><i class="fa fa-share-alt" aria-hidden="true"></i> <?php echo get_phrase('approve_now'); ?></a>
							<?php elseif($row['admin_status'] == 'approved') :?>
								<a href="#" onclick="" type="button" class = "btn  btn-rounded btn-sm" style="color:white; background-color:#34B8F4"><i class="fa fa-share-alt" aria-hidden="true"></i> <?php echo get_phrase('request approved'); ?></a>
							
						<?php elseif($row['status'] == 'expired'): ?>
							<a href="#" type="button" class = "btn btn-primary btn-rounded btn-sm" style="color:white"><?php echo get_phrase('expired'); ?></a>
						<?php endif; ?>
	
						<a href="<?php echo site_url('hostel/view_request/'.$row['id']); ?>" type="button" class = "btn btn-sm  btn-rounded" style="color:white; background-color:#333"><i class="fa fa-eye" aria-hidden="true"></i><?php echo get_phrase('view_request'); ?></a>

						</td>
						<td>
						<?php
						$current_date = time();
						$end_date = strtotime($row['time_end']);
						$remainingTime = $end_date - $current_date;
						if($row['dean_status']){
						if (($remainingTime > 0) && ($row['days_overstayed'] == '')) {
							
							echo "<span id='countdown_" . $row['id'] . "' class='badge badge-warning'></span>";
						} 
						else if ($row['days_overstayed']) {
							
							echo "<span class='badge badge-primary'>" . $row['days_overstayed'] . "</span>";
						} 
						else {
							
							$days_overdue = floor(abs($remainingTime) / (60 * 60 * 24)); 
							echo "<span class='badge badge-danger'>" . $days_overdue . " days overstayed</span>";

							
						}
					} else{
						echo '';
					}
						?>

						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
        	</table>
    	</div>
	</div>
</div>

