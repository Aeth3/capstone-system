

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" style = "background-color: #E16389 !important" href="index.html">
        <div class="sidebar-brand-icon">
          <img class="img-profile rounded-circle" src="img/boy.png">
        </div>
        <div class="sidebar-brand-text mx-3">Ama Junriel Damalan </div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ?>Home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fas fa-list-alt"></i>
          <span>Pages</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">List of pages</h6>
            <a class="collapse-item" href="<?= base_url() ?>Dues"><i class="fas fa-money-bill-alt"></i> Dues</a>
            <a class="collapse-item" href="<?= base_url() ?>Transaction"><i class="fas fa-hand-holding-usd"></i> Transaction</a>
          </div>
        </div>
      </li>
      

      <hr class="sidebar-divider">
     
     
    
      
    </ul>
    <!-- Sidebar end-->