
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
</head>
<div class="col-sm-12">
	<div class="panel panel-info">                     
		<div class="panel-body table-responsive">
			<i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('manage_requests');?>
			<hr>
			<a href="<?php echo site_url('security/manage_request');?>" class="btn" style="color: #fff; background-color:#00A9EA">
            	<?php echo get_phrase('requests list');?>
        	</a>
			<!-- <a href="<?php echo site_url('security/manage_online_exam/expired');?>" class="btn  btn-sm btn-<?php echo $status == 'expired' ? 'primary' : 'white'; ?>" style="color:#000">				<?php echo get_phrase('approved_requests');?>
			</a>
			<a href="<?php echo site_url('security/manage_online_exam/expired');?>" class="btn  btn-sm btn-<?php echo $status == 'expired' ? 'primary' : 'white'; ?>" style="color:#000">				<?php echo get_phrase('declined_requests');?>
			</a> -->
			<hr>						
			<table id="example23" class="display nowrap" cellspacing="0" width="100%" style="font-size: 12px; font-weight: 400; font-family: 'Poppins', sans-serif;">

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
				<tbody style="font-size: 12px; font-weight: 400; font-family: 'Poppins', sans-serif;">
					<?php foreach($requests as $key => $row):?>
					<tr>
					<td>
							<?php 
							$matno = $this->db->get_where('student', array('student_id' => $row['student_id']))->row_array();
								 echo $matno['email']; ?>
							</a>
						</td>
						<td>
							<?php  echo $row['description']; ?>
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
						
	
						<a href="<?php echo site_url('security/view_request/'.$row['id']); ?>" type="button" class = "btn btn-sm btn-info btn-rounded" style="color:white"><?php echo get_phrase('view_request'); ?></a>

						</td>
						<td>
						<?php
						$current_date = time();
						$end_date = strtotime($row['time_end']);
						$remainingTime = $end_date - $current_date;

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
						?>
					</td>
					</tr>
					<?php endforeach;?>
				</tbody>
        	</table>
    	</div>
	</div>
</div>

<script>
    function startCountdown(seconds, requestId) {
        var countdownElement = document.getElementById('countdown_' + requestId);
        var interval = setInterval(function() {
            if (seconds <= 0) {
                clearInterval(interval);
                countdownElement.innerHTML = "Expired!";

                // Update overstayed days
                var endDate = new Date("<?php echo date('Y-m-d H:i:s', strtotime($row['time_end'])); ?>").getTime();
                var currentDate = new Date().getTime();
                
                if (currentDate > endDate) {
                    var daysOverstayed = Math.floor((currentDate - endDate) / (1000 * 60 * 60 * 24));

                    // AJAX request to update overstayed days
                    $.ajax({
                        url: "<?php echo site_url('security/update_days_overstayed'); ?>",
                        type: "POST",
                        data: { 
                            request_id: requestId, 
                            days_overstayed: daysOverstayed 
                        },
                        success: function(response) {
                            console.log("Days overstayed updated.");
                        }
                    });

                    countdownElement.innerHTML = daysOverstayed + " days overstayed";
                }
            } else {
                var days = Math.floor(seconds / (3600 * 24));
                var hours = Math.floor((seconds % (3600 * 24)) / 3600);
                var minutes = Math.floor((seconds % 3600) / 60);
                var secondsLeft = seconds % 60;

                countdownElement.innerHTML = days + " days " + hours + " hrs " + minutes + " min " + secondsLeft + " sec";
                seconds--;
            }
        }, 1000);
    }
</script>

<?php foreach ($requests as $row): ?>
    <script>
        var requestId = <?php echo $row['id']; ?>;
        var current_date = Math.floor(Date.now() / 1000);
        var end_date = Math.floor(new Date("<?php echo $row['time_end']; ?>").getTime() / 1000);
        var remainingTime = end_date - current_date;

        if (remainingTime > 0) {
            startCountdown(remainingTime, requestId);
        } else {
            document.getElementById('countdown_' + requestId).innerHTML = "<?php echo isset($row['days_overstayed']) ? $row['days_overstayed'] : 0; ?> days overstayed";
        }
    </script>
<?php endforeach; ?>
