<div class="row">
    <div class="col-md-4 col-sm-6">
        <div class="white-box">
            <div class="r-icon-stats">
                <i class="ti-home bg-megna"></i>
                <div class="bodystate">
                    <h4><?php
                    $pending_count = $pending->num_rows();
                    echo $pending_count;?></h4>
                    <span class="text-muted"><?php echo get_phrase('pending request');?></span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 col-sm-6">
        <div class="white-box">
            <div class="r-icon-stats">
                <i class="ti-list bg-inverse"></i>
                <div class="bodystate">
                    <h4>
                    <?php 
                    $time_out_count = $time_out->num_rows();
                    echo $time_out_count; ?>  
                    </h4>
                    <span class="text-muted"><?php echo get_phrase('time_out_request');?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="white-box">
            <div class="r-icon-stats">
                <i class="ti-list bg-inverse"></i>
                <div class="bodystate">
                    <h4>
                    <?php 
                    $request_count =$request_count->num_rows(); 
                    echo $request_count;?>  
                    </h4>
                    <span class="text-muted"><?php echo get_phrase('frequest monthly exeat');?></span>
                </div>
            </div>
        </div>
    </div>
</div> 


<div class="row">
    <div class="col-md-6">
        <canvas id="barChart" width="400" height="300"></canvas>
    </div>
    <div class="col-md-6">
        <canvas id="pieChart" width="400" height="300"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Data from PHP
    var pendingCount = <?php echo $pending_count; ?>;
    var timeOutCount = <?php echo $time_out_count; ?>;
    var requestCount = <?php echo $request_count; ?>;

    // Labels and Data
    var labels = ["Pending", "Time Out", "Flagged Students"];
    var data = [pendingCount, timeOutCount, requestCount];
    var colors = ['#03568B', '#36A2EB', '#FFCE56'];

    // Bar Chart
    var ctxBar = document.getElementById("barChart").getContext("2d");
    new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Requests Distribution',
                data: data,
                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Requests Distribution (Bar Chart)'
                }
            }
        }
    });

    // Pie Chart
    var ctxPie = document.getElementById("pieChart").getContext("2d");
    new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: 'Requests Distribution (Pie Chart)'
                },
                legend: {
                    position: 'bottom'
                }
            }
        }
    });


    
</script>

