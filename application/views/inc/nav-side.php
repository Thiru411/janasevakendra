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

          <li class="nav-header">Blogs</li>
         

          
          <li class="nav-item <?php if($menu_open=="blogs"){?>menu-open<?php }?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Blogs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>blogs" class="nav-link <?php if($menu_active=="blogs-list"){?>active<?php }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blogs List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>blogs-add" class="nav-link <?php if($menu_active=="blogs-add"){?>active<?php }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blogs Add</p>
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