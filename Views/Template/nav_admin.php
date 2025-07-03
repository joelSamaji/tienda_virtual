<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media(); ?>/images/avatar.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Joel Martínez</p>
          <p class="app-sidebar__user-designation">Administrador</p>
        </div>
      </div>
      <ul class="app-menu">

        <!-- DASHBOARD -->
        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>dashboard">
            <i class="app-menu__icon fa-solid fa-gauge"></i>
            <span class="app-menu__label"> Dashboard</span>
          </a>
        </li>

        <!-- USUARIOS -->
        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa-solid fa-users"></i>
            <span class="app-menu__label"> Usuarios</span>
            <i class="treeview-indicator fa-solid fa-chevron-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url(); ?>usuarios"><i class="icon fa-regular fa-circle"></i> Usuarios</a></li>
            <li><a class="treeview-item" href="<?= base_url(); ?>roles"><i class="icon fa-regular fa-circle"></i> Roles</a></li>
            <li><a class="treeview-item" href="<?= base_url(); ?>permisos"><i class="icon fa-regular fa-circle"></i> Permisos</a></li>
          </ul>
        </li>
        <!-- CLIENTES -->
        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>clientes">
            <i class="app-menu__icon fa-solid fa-user"></i>
            <span class="app-menu__label"> Clientes</span>
          </a>
        </li>
        
        <!-- PRODUCTOS -->
        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>/productos">
            <i class="app-menu__icon fa-solid fa-boxes-stacked"></i>
            <span class="app-menu__label"> Productos</span>
          </a>
        </li>
        <!-- PEDIDOS -->
        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>/pedidos">
            <i class="app-menu__icon fa-solid fa-clipboard-check"></i>
            <span class="app-menu__label"> Pedidos</span>
          </a>
        </li>
        
        <!-- LOGOUT -->
        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>/logout">
            <i class="app-menu__icon fa-solid fa-arrow-right-from-bracket"></i>
            <span class="app-menu__label"> Logout</span>
          </a>
        </li>
      </ul>
    </aside>