<style>
    #startTimer {
        background-color: #00A9EA;
        color: white;
        border: none;
        font-size: 10px;
        font-weight: 400;
        font-family: "Poppins", sans-serif;
        transition: background-color 0.3s ease-in-out;
    }

    #startTimer:hover {
        background-color: #007BB5;  
    }

    #stopTimer {
        background-color: #FF4C4C;
        color: white;
        border: none;
        font-size: 10px;
        font-weight: 400;
        font-family: "Poppins", sans-serif;
        transition: background-color 0.3s ease-in-out;
    }

    #stopTimer:hover {
        background-color: #D12F2F;
    }
</style>

<?php
$request = $this->db->get_where('requests', array('id' => $request_id))->row_array();
$student = $this->db->get_where('student', array('student_id' => $request['student_id']))->row_array();
$currentTime = time();
$remainingTime = strtotime($request['time_end']) - $currentTime;
?>

<div class="row">		
    <div class="col-sm-12">
        <div class="panel panel-info">
            <div class="panel-body table-responsive">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2><?php echo $student['name']; ?></h2>
                        <h4><b><?php echo get_phrase('Programme'); ?></b>: 
                            <?php echo $this->db->get_where('class', array('class_id' => $student['class_id']))->row()->name; ?>
                        </h4>
                        <h4><b><?php echo get_phrase('Hostel'); ?></b>: 
                            <?php echo $this->db->get_where('hostel_type', array('id' => $student['hostel']))->row()->name; ?>
                        </h4>
                        <h4><b><?php echo get_phrase('date_start'); ?></b>: <?php echo $request['time_start']; ?></h4>
                        <h4><b><?php echo get_phrase('date_end'); ?></b>: <?php echo $request['time_end']; ?></h4>

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
                        <div>
                            <div id="timer_<?php echo $request['id']; ?>" style="height:30px; font-size:25px; font-weight:200; color: #212121;"></div>
                            <br>
                            <!-- <button id="start_btn_<?php echo $request['id']; ?>" onclick="startCountdown(<?php echo $request['id']; ?>, <?php echo $remainingTime; ?>)">Start</button> -->
                            <button id="stop_btn_<?php echo $request['id']; ?>" onclick="stopCountdown(<?php echo $request['id']; ?>)">Stop</button>
                        </div>

                        <hr><br>
                    </div>

                    <div class="col-md-12">
                        <h3>Description</h3>
                        <p><?php echo $request['description']; ?></p><br>
                        <h3>Reason</h3>
                        <p><?php echo $request['reason']; ?></p><br>
                    </div>
                </div>
                <hr>
            </div>
        </div>	
    </div>
</div>

<script>
    var countdownIntervals = {};

    function startCountdown(requestId, remainingTime) {
        var countdownElement = document.getElementById('countdown_' + requestId);

        if (!countdownElement) return;

        // Clear any existing countdown
        if (countdownIntervals[requestId]) {
            clearInterval(countdownIntervals[requestId]);
        }

        countdownIntervals[requestId] = setInterval(function () {
            if (remainingTime <= 0) {
                clearInterval(countdownIntervals[requestId]);
                countdownElement.innerHTML = "Expired!";
                stopCountdown(requestId);
                
      
            } else {
                var days = Math.floor(remainingTime / (3600 * 24));
                var hours = Math.floor((remainingTime % (3600 * 24)) / 3600);
                var minutes = Math.floor((remainingTime % 3600) / 60);
                var secondsLeft = remainingTime % 60;

                countdownElement.innerHTML = days + "d " + hours + "h " + minutes + "m " + secondsLeft + "s";
                remainingTime--;
            }
        }, 1000);
    }

    function stopCountdown(requestId) {
        if (countdownIntervals[requestId]) {
            clearInterval(countdownIntervals[requestId]);
            document.getElementById('countdown_' + requestId).innerHTML = "Paused";
            $.ajax({
            url: "<?php echo site_url('security/update_status');?>",
            type: "POST",
            data: { request_id: requestId },
            success: function(response) {
                console.log("Status updated successfully: " + response);
            },
            error: function(xhr, status, error) {
                console.error("Error updating status: " + error);
            }
        });
        }else{
            $.ajax({
            url: "<?php echo site_url('security/update_status');?>",
            type: "POST",
            data: { request_id: requestId },
            success: function(response) {
                console.log("Status updated successfully: " + response);
            },
            error: function(xhr, status, error) {
                console.error("Error updating status: " + error);
            }
        });
        }
    }

    // Start countdown automatically if time is still remaining
    var remainingTime = <?php echo max($remainingTime, 0); ?>;
    var requestId = <?php echo $request['id']; ?>;
    console.log(remainingTime);

    if (remainingTime > 0) {
        startCountdown(requestId, remainingTime);
    } else {
        document.getElementById('countdown_' + requestId).innerHTML = "Expired!";
    }
</script>
