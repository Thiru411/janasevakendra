<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() ?>dashboard" class="brand-link">
      <img src="<?=base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Jana Seva Kendra</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$this->session->userdata("user_session_first_name")?> <?=$this->session->userdata("user_session_last_name")?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url() ?>super-admin-dashboard" class="nav-link <?php if($menu_active=="dashboard"){?>active<?php }?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
            
          </li>
         
            <li class="nav-item <?php if($menu_open=="pan-card"){?>menu-open<?php }?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pan Card
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>new-pan-apply" class="nav-link <?php if($sub_menu_active=="new-pan-apply"){?>active<?php }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Application</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>pan-correction-reprint" class="nav-link <?php if($sub_menu_active=="pan-correction-reprint"){?>active<?php }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Correction/Reprint</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>pan-pending" class="nav-link <?php if($sub_menu_active=="pan-pending"){?>active<?php }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>pan-verification" class="nav-link <?php if($sub_menu_active=="pan-verification"){?>active<?php }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Verification</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>pan-approved" class="nav-link <?php if($sub_menu_active=="pan-approved"){?>active<?php }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approved</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>already-pan" class="nav-link <?php if($sub_menu_active=="already-pan"){?>active<?php }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Already Pan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>hold-pan" class="nav-link <?php if($sub_menu_active=="hold-pan"){?>active<?php }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hold</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>rejected-pan" class="nav-link <?php if($sub_menu_active=="rejected-pan"){?>active<?php }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rejected</p>
                </a>
              </li>
         
            
             
            
              
            </ul>
          </li>
          





          
          
         
            



    

              
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>