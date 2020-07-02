<nav class="navbar navbar-expand navbar-dark bg-warning static-top">

    <a class="navbar-brand mr-1" href="<?php echo site_url('admin') ?>"><?php echo "David ".SITE_NAME ?></a>

    <button class="btn btn-link btn-sm text-dark order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Carilah disini ..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-light" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
     <ul class="navbar-nav ml-auto ml-md-0">
		<li class="nav-item dropdown no-arrow mx-1">
			
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"> <!-- dropdown kursor -->
			
				<span class="badge badge-danger">99+</span> <!-- tulisan 9+ -->
                <i class="fas fa-bell fa-fw"></i> <!-- gambar lonceng -->
				
                
            </a> 
			
			<!-- menu ketika lonceng di klik -->
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
	


        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"> <!-- dropdown kursor -->
				<span class="badge badge-danger">9+</span> <!-- tulisan 9+ -->
                <i class="fas fa-envelope fa-fw"></i> <!-- gambar kotak pesan -->
				
                <!--<span class="badge badge-danger">7</span> <!-- pop up tulisan 7 -->
            </a>
			
			<!-- menu ketika lonceng di klik -->
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>



        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"> <!-- dropdown kursor -->
				
                <i class="fas fa-user-circle fa-fw"></i> Setro <!-- tulisan admin -->
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>