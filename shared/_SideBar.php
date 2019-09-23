<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-motorcycle"></i>
    </div>
    <div class="sidebar-brand-text mx-3">BMM</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <?php
        if($_SESSION['role'] == 'Administrator'){
    ?>
        <!-- Nav Item - Assessment -->
        <li class="nav-item">
        <a class="nav-link" href="assessment_info.php">
            <i class="fas fa-tasks"></i>
            <span>Assessment Information</span></a>
        </li>
    <?php
        } else {
    ?>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
        <a class="nav-link" href="index.php">
            <i class="fas fa-motorcycle"></i>
            <span>Motorcycles</span></a>
        </li>

        <!-- Nav Item - 3D Model -->
        <li class="nav-item">
        <a class="nav-link" href="3d-model.php">
            <i class="fas fa-cube"></i>
            <span>3D Model</span></a>
        </li>

        <!-- Nav Item - Assessment -->
        <li class="nav-item">
        <a class="nav-link" href="assessment.php">
            <i class="fas fa-tasks"></i>
            <span>Assessment</span></a>
        </li>

        <!-- Nav Item - About -->
        <li class="nav-item">
        <a class="nav-link" href="about.php">
            <i class="fas fa-info"></i>
            <span>About</span></a>
        </li>
    <?php
        }
    ?>

    <hr class="sidebar-divider">
    <hr class="sidebar-divider">
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>