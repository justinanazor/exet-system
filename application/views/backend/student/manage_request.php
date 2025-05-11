<div class="col-sm-12">
	<div class="panel panel-info">                     
		<div class="panel-body table-responsive">
			<i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('manage_requests');?>
			<hr>
			<a href="<?php echo site_url('student/manage_request');?>" class="btn" style="color: #fff; background-color:#03568B">
            	<?php echo get_phrase('requests list');?>
        	</a>
			<!-- <a href="<?php echo site_url('student/manage_online_exam/expired');?>" class="btn  btn-sm btn-<?php echo $status == 'approved' ? 'primary' : 'white'; ?>" style="color:#000">				<?php echo get_phrase('approved_requests');?>
			</a>
			<a href="<?php echo site_url('student/manage_request/declined');?>" class="btn  btn-sm btn-<?php echo $status == 'declined' ? 'primary' : 'white'; ?>" style="color:#000">				<?php echo get_phrase('declined_requests');?>
			</a> -->
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
						<button class="btn btn-<?php echo $row['status'] == 'approved' ? 'info' : 'warning'; ?> btn-xs">
								<?php echo get_phrase($row['status']);?>
							</button>
						</td>
						<td style="text-align: center;">
						
					<?php if($row['status'] != 'approved') :?>
						<a href="#" onclick="confirm_modal('<?php echo site_url('student/manage_request/delete/'.$row['id']);?>');" 
					class="btn btn-xs btn-circle btn-danger" style="color:white">
						  <i class="fa fa-times"></i>
					</a>
					 <?php endif; ?>
					 
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
        	</table>
    	</div>
	</div>
</div>

