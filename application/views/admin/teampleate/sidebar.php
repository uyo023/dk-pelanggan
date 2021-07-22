       <!-- Sidebar -->
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

           <!-- Sidebar - Brand -->
           <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/index'); ?>">
               <div class="sidebar-brand-icon rotate-n-15">
                   <i class="fas fa-laugh-wink"></i>
               </div>
               <div class="sidebar-brand-text mx-3">DK-Komplain
               </div>
           </a>

           <!-- Divider -->
           <hr class="sidebar-divider">

           <!-- Heading -->
           <div class="sidebar-heading">
               Customer Service
           </div>

           <!-- Nav Item - Dashboard -->
           <li class="nav-item">
               <a class="nav-link" href="<?= base_url('admin/index'); ?>">
                   <i class="fas fa-fw fa-tachometer-alt"></i>
                   <span>Dashboard</span></a>
           </li>

           <!-- Divider -->
           <hr class="sidebar-divider">

           <!-- Heading -->
           <div class="sidebar-heading">
               DATA CUSTOMER
           </div>

           <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item">
               <a class="nav-link " href="<?= base_url('cs/detailcus'); ?>">
                   <i class="fas fa-fw fa-plus-circle"></i>
                   <span>Daftar Customer</span>
               </a>
           </li>
           <li class="nav-item">
               <a class="nav-link collapsed" href="<?= base_url('cs/konfir_keluhan'); ?>">
                   <i class="fas fa-fw fa-hourglass-start"></i>
                   <span>Konfirmasi Customer</span>
               </a>
           </li>

           <!-- Heading -->
           <div class="sidebar-heading">
               DATA KELUHAN
           </div>

           <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item">
               <a class="nav-link " href="<?= base_url('cs/cus_detail'); ?>">
                   <i class="fas fa-fw fa-plus-circle"></i>
                   <span>Daftar Keluhan</span>
               </a>
           </li>
           <li class="nav-item">
               <a class="nav-link collapsed" href="#">
                   <i class="fas fa-fw fa-hourglass-start"></i>
                   <span>Laporan Keluhan</span>
               </a>
           </li>

           <!-- Divider -->
           <hr class="sidebar-divider d-none d-md-block">

           <!-- Sidebar Toggler (Sidebar) -->
           <div class="text-center d-none d-md-inline">
               <button class="rounded-circle border-0" id="sidebarToggle"></button>
           </div>

       </ul>
       <!-- End of Sidebar -->