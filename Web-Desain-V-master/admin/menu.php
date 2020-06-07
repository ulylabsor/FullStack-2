<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
   <div class="sidebar-sticky pt-3">
      <ul class="nav flex-column">
         <?php if ($_SESSION['idRole'] == 1) : ?>
            <li class="nav-item">
               <a class="nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'dashboard' ? 'active' : '' : 'active' ?>" href="?page=dashboard">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
               </a>
            </li>
            <!-- <li class="nav-item">
               <a class="nav-link" href="?page=users">
                  <span data-feather="layers"></span>
                  Kelola Users
               </a>
            </li> -->

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
               <span>Users</span>
               <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                  <span data-feather="plus-circle"></span>
               </a>
            </h6>
            <ul class="nav flex-column mb-2">
               <li class="nav-item">
                  <a class="nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'users' ? 'active' : '' : '' ?>" href="?page=users">
                     <i class="fa fa-users mr-2"></i>
                     Kelola Users
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'profil' ? 'active' : '' : '' ?>" href="?page=profil">
                     <i class="fa fa-user mr-2"></i>
                     Profil
                  </a>
               </li>
            </ul>
         <?php elseif ($_SESSION['idRole'] == 2) : ?>
            <!-- MENU KURIR -->
         <?php elseif ($_SESSION['idRole'] == 4) : ?>
            <!-- MENU MANAGER -->
         <?php endif ?>
      </ul>
   </div>
</nav>