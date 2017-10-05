<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ asset('img/user-default-160x160.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>$user->name</p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> $user->rol</a>
        </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Buscar...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>Informes</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#">Nuevo</a></li>
                <li><a href="#">Link in level 2</a></li>
            </ul>
        </li>
    </ul>
    <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
