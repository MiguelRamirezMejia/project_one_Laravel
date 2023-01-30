<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">Formación Uno</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Categoría<!--Clientes-->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.products.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Productos<!--proyectos-->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.movements.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>
                            Movimientos <!--Tareas-->
                        </p>
                    </a>
                </li>




<!------------------------------------------Tengo pendiente habilitar esta seccion de consultas------------------------------------------------------------>


<!------------------------------------------Tengo pendiente habilitar esta seccion de consultas------------------------------------------------------------>



                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>Cerrar sesión</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
