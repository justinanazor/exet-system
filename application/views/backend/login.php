<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Exeat System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/veritas.jpg" type="image/x-icon">
    <link href="<?php echo base_url();?>optimum/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #224abe;
            --success-color: #1cc88a;
        }

        .background-slider {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-size: cover;
            background-position: center;
            transition: background-image 1s ease-in-out;
        }

        .login-container {
            min-height: 100vh;
            backdrop-filter: blur(8px);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .login-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            transition: transform 0.3s ease;
        }

        .login-card:hover {
            transform: translateY(-5px);
        }

        .form-control {
            border-radius: 10px;
            padding: 12px;
            border: 2px solid #e1e1e1;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        .btn-login {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 10px;
            padding: 12px;
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 115, 223, 0.4);
        }

        .user-type-selector {
            border-radius: 10px;
            overflow: hidden;
        }

        .user-type-selector .form-check {
            padding: 10px 15px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .user-type-selector .form-check:hover {
            background-color: rgba(78, 115, 223, 0.1);
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .login-header {
            color: var(--primary-color);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        @media (max-width: 768px) {
            .login-card {
                margin: 15px;
            }
        }

        .floating-label {
            position: relative;
            margin-bottom: 20px;
        }

        .floating-label label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            background-color: white;
            padding: 0 5px;
            transition: all 0.3s ease;
            pointer-events: none;
            z-index: 1;
        }

        .floating-label input:focus + label,
        .floating-label input:not(:placeholder-shown) + label,
        .floating-label select:focus + label,
        .floating-label select:not([value=""]) + label {
            top: 0;
            font-size: 12px;
            color: var(--primary-color);
        }

        /* Input icons styling */
        .input-icon {
            position: relative;
        }

        .input-icon i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            z-index: 2;
        }

        .input-icon input,
        .input-icon select {
            padding-right: 40px;
        }
    </style>
</head>
<body>
    <div class="background-slider"></div>
    <div class="login-container d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-12 col-md-9">
                    <div class="login-card p-4 animate__animated animate__fadeIn">
                        <div class="text-center mb-4">
                            <img src="<?php echo base_url(); ?>assets/images/veritas.jpg" alt="School Logo" class="img-fluid mb-4" style="max-height: 80px;">
                        </div>

                        <?php if (isset($error_message)): ?>
                          <div class="error-message" class="error-message" style="color: red; margin: 10px 0;">
                          <center>   
                         <?= $error_message; ?>
                          </center>
                          </div>
                      <?php endif; ?>
                        <form action="<?php echo base_url();?>login/check_login" method="post"  class="user">
                            <div class="floating-label">
                                <input type="text" name="username" class="form-control" id="username" placeholder=" " required>
                                <label for="username">RegNo/Email/Staffno</label>
                            </div>
                            <div class="floating-label">
                                <input type="password" name="password" class="form-control" id="accessId" placeholder=" " required>
                                <label for="accessId">Password</label>
                            </div>
                            <div class="floating-label mb-4">
                                <select class="form-select py-3" id="userType" name="user_type" required>
                                    <option value="" selected disabled>Select User Type</option>
                                    <option value="student">Student</option>
                                    <option value="guardian">Parent</option>
                                    <option value="hostel">Hotel Admin</option>
                                    <option value="admin">Dean</option>
                                    <option value="security">Security</option>
                                </select>
                                <label for="userType">User Type</label>
                            </div>
                            <button type="submit" class="btn btn-login w-100 mb-3">
                                Login
                            </button>
                            <hr>
                            <div class="text-center">
                                <a class="small text-decoration-none" href="#">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>optimum/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url(); ?>optimum/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>optimum/js/custom.min.js"></script>
<!--Style Switcher -->
<script src="<?php echo base_url(); ?>optimum/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="<?php echo base_url(); ?>optimum/plugins/bower_components/toast-master/js/jquery.toast.js"></script>


    <?php if (($this->session->flashdata('error_message')) !=''):?>
    <script type="text/javascript">
    $(document).ready(function(){
      $.toast({
        heading: 'Error Message',
        text: '<?php echo $this->session->flashdata('error_message');?>',
        position: 'top-right',
        loaderBg: '#ff6849',
        icon:'warning',
        hideAfter: '3500',
        stack: 6

      });

    });


  </script>



<?php endif;?>

    <script>

setTimeout(function() {
        var errorMessage = document.getElementById('error-message');
        if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    }, 5000);  
        // Background image slider with local images
        const backgrounds = [
            '<?php echo base_url(); ?>assets/images/veriatage-student.jpg',  //backround slider images
            '<?php echo base_url(); ?>assets/images/veri2.jpg',
            '<?php echo base_url(); ?>assets/images/veri3.jpg',
            '<?php echo base_url(); ?>assets/images/veri4.jpg',
            '<?php echo base_url(); ?>assets/images/veri5.jpg'
        ];

        let currentBg = 0;
        const bgElement = document.querySelector('.background-slider');

        function changeBackground() {
            bgElement.style.backgroundImage = `url(${backgrounds[currentBg]})`;
            currentBg = (currentBg + 1) % backgrounds.length;
        }

        // Initial background
        changeBackground();
        // Change background every 5 seconds
        setInterval(changeBackground, 60000); // Change to 1 minute

        // Form submission
        
    </script>
</body>
</html>