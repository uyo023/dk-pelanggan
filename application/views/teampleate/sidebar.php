       <!-- Sidebar -->
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

           <!-- Sidebar - Brand -->
           <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user/index'); ?>">
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
               Administrastor
           </div>

           <!-- Nav Item - Dashboard -->
           <li class="nav-item">
               <a class="nav-link" href="<?= base_url('user/index'); ?>">
                   <i class="fas fa-fw fa-tachometer-alt"></i>
                   <span>Dashboard</span></a>
           </li>

           <!-- Divider -->
           <hr class="sidebar-divider">

           <!-- Heading -->
           <div class="sidebar-heading">
               Interface
           </div>

           <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item">
               <a class="nav-link " href="<?= base_url('user/addkomplain'); ?>">
                   <i class="fas fa-fw fa-plus-circle"></i>
                   <span>Input Komplainn</span>
               </a>
           </li>
           <li class="nav-item">
               <a class="nav-link collapsed" href="<?= base_url('user/pending'); ?>">
                   <i class="fas fa-fw fa-hourglass-start"></i>
                   <span>Komplain Pending</span>
               </a>
           </li>
           <li class="nav-item">
               <a class="nav-link collapsed" href="<?= base_url('user/proses'); ?>">
                   <i class="fas fa-fw fa-cog"></i>
                   <span>Komplain Proses</span>
               </a>
           </li>
           <li class="nav-item">
               <a class="nav-link collapsed" href="<?= base_url('user/selesai'); ?>">
                   <i class="fas fa-fw fa-check"></i>
                   <span>Komplain Selesai</span>
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