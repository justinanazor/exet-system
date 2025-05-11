    <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                   
                    <li class="user-pro">
                        <a href="#" class="waves-effect">
                        <?php 
                        $key = $this->session->userdata('login_type'). '_id';
                        $face_file = 'uploads/'. $this->session->userdata('login_type'). '_image/'.$this->session->userdata($key).'.jpg'; 
                        if(!file_exists($face_file)){
                            $face_file = 'uploads/default.jpg';
                        }
                        ?>
                        <img src="<?php echo base_url() . $face_file;?>" alt="user-img" class="img-circle"> 
                        
                        <span class="hide-menu">
                        <?php
                        $account_type = $this->session->userdata('login_type');
                        $account_id = $account_type.'_id';
                        $name = $this->crud_model->get_type_name_by_id($account_type, $this->session->userdata($account_id), 'name');
                        echo $name;
                        ?>
                       </span>
                        </a>
                       
                    </li>
                   
                    <li class="<?php if($page_name == 'dashboard') echo 'active'; ?>"> <a href="<?php echo base_url();?>admin/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('Dashboard');?></span></a> </li>
                    
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-angle-double-right p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Academics');?> <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li class="<?php if($page_name == 'classes') echo 'active'; ?>"> <a href="<?php echo base_url();?>admin/classes"><?php echo get_phrase('New Programme');?></a> </li>
                            
                            <li class="<?php if($page_name == 'hostel_type') echo 'active'; ?>"> <a href="<?php echo base_url();?>admin/hostel_type"><?php echo get_phrase('New Hostel');?></a> </li>
                        </ul>
                    </li>
                    <!-- <li class="<?php if($page_name == 'parent') echo 'active'; ?>"> <a href="<?php echo base_url();?>admin/parent" class="waves-effect"><i class="fa fa-angle-double-right p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('Manage parent');?></span></a> </li> -->
                    <li class="<?php if($page_name == 'hostel_admin') echo 'active'; ?>"> <a href="<?php echo base_url();?>admin/hostel_admin" class="waves-effect"><i class="fa fa-angle-double-right p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('Manage hostel_admin');?></span></a> </li>
                    
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-angle-double-right p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Student');?> <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                           
                            <li class="<?php if($page_name == 'student') echo 'active'; ?>"> <a href="<?php echo base_url();?>admin/student"><?php echo get_phrase('New Student');?></a> </li>
                        </ul>
                    </li>
                    
                    <li class="<?php if($page_name == 'parent') echo 'active'; ?>"> <a href="<?php echo base_url();?>admin/parent" class="waves-effect"><i class="fa fa-angle-double-right p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('Manage Parent');?></span></a> </li>

                    <li class="<?php if($page_name == 'security') echo 'active'; ?>"> <a href="<?php echo base_url();?>admin/security" class="waves-effect"><i class="fa fa-angle-double-right p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('Manage Security');?></span></a> </li>

                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-angle-double-right p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Student_request');?> <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                           
                            <li class="<?php if($page_name == 'manage_request') echo 'active'; ?>"> <a href="<?php echo base_url();?>admin/manage_request"><?php echo get_phrase('requests');?></a> </li>
                           
                        </ul>
                    </li>
                    
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-angle-double-right p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Analytics');?> <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                           
                            <li class="<?php if($page_name == 'manage_request') echo 'active'; ?>"> <a href="<?php echo base_url();?>admin/analytics"><?php echo get_phrase('view analytics');?></a> </li>
                           
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-angle-double-right p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('general setting');?> <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                           
                            <li class="<?php if($page_name == 'system_settings') echo 'active'; ?>"> <a href="<?php echo base_url();?>setting/system_settings"><?php echo get_phrase('system setting');?></a> </li>
                        </ul>
                    </li>

                    
                    
                    <li class="<?php if($page_name == 'manage_profile') echo 'active'; ?>"><a href="<?php echo base_url();?>admin/manage_profile/" class="waves-effect"><i class="fa fa-angle-double-right"></i> <span class="hide-menu"><?php echo get_phrase('Manage Profile');?></span></a></li>
                    <li><a href="<?php echo base_url();?>login/logout/" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu"><?php echo get_phrase('Log Out');?></span></a></li>
                    
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->