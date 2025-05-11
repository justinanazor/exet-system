<?php
$request = $this->db->get_where('requests', array('id' => $request_id))->row_array();

$student = $this->db->get_where('student', array('student_id'=> $request['student_id']))->row_array();


$currentTime = time();

    // Calculate remaining time in seconds
    $remainingTime = strtotime($request['time_end']) - $currentTime;
?>
<div class="row">		
			  <div class="col-sm-12">
				  	<div class="panel panel-info">
                                <div class="panel-body table-responsive">
<div class="row">
	<div class="col-md-12 text-center">
		<h2><?php echo $student['name'];?></h2>
		<h4>
			<b><?php echo get_phrase('Programme');?></b>: <?php echo $this->db->get_where('class', array('class_id' => $student['class_id']))->row()->name;?>
		</h4>
		<h4>
			<b><?php echo get_phrase('Hostel');?></b>: <?php echo $this->db->get_where('hostel_type', array('id' => $student['hostel']))->row()->name;?>
		</h4>
		<h4>
			<b><?php echo get_phrase('date_start');?></b>: <?php echo ($request['time_start']);?>
		</h4>
		<h4>
			<b><?php echo get_phrase('date_end');?></b>: <?php echo ($request['time_end']);?>
		</h4>
		
		<!-- <h5 style="color:green">
			<style="color:red"><?php echo get_phrase('Returning Time');?></b>: 
		</h5> -->

		<h5 style="color:green"><b><?php echo get_phrase('Counting Time'); ?></b>:</h5>
                       <?php
                        $current_time = time();
                        $end_time = strtotime($request['time_end']);
                        $time_remaining = $end_time - $current_time;

                        if ($request['days_overstayed'] != '') {
                 
                            echo "<span class='badge badge-primary'>" . $request['days_overstayed'] . "</span>";
                        } 
                        elseif ($time_remaining > 0) {
                          
                            echo "<span id='countdown_" . $request['id'] . "' class='badge badge-warning'></span>";
                        } 
                        else {
                 
                            $days_overdue = floor(abs($time_remaining) / (60 * 60 * 24)); 
                            echo "<span class='badge badge-danger'>" . $days_overdue . " days overstayed</span>";
                            
                            
                        }
                        ?>
			<hr><br>



	</div>
	<div class="col-md-12">
	<h3>Description</h3>
	<p><?php echo ($request['description']);?></p><br>
	<h3>Reason</h3>
	<p><?php echo ($request['reason']);?></p><br>

	</div>
</div>
<hr>

	</div>
	</div>	</div>
	</div>


	<div id="timer"></div>

<script>
    // Get remaining time from PHP
    var remainingTime = <?php echo isset($remainingTime) ? $remainingTime : 0; ?>;

    function startCountdown(seconds) {
        var timer = document.getElementById("timer");
        var interval = setInterval(function () {
            if (seconds <= 0) {
                clearInterval(interval);
                timer.innerHTML = "Expired!";
            } else {
                var days = Math.floor(seconds / (3600 * 24));
                var hours = Math.floor((seconds % (3600 * 24)) / 3600);
                var minutes = Math.floor((seconds % 3600) / 60);
                var secondsLeft = seconds % 60;

                timer.innerHTML = days + "days " + hours + "hours " + minutes + ": " + secondsLeft + "seconds";
                seconds--;
            }
        }, 1000);
    }

    // Start countdown
    if (remainingTime > 0) {
        startCountdown(remainingTime);
    } else {
        document.getElementById("timer").innerHTML = "Time out!";
    }
</script>
