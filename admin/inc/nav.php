<body class="fixed-navbar">
<div class="page-wrapper">
    <!--HEADER-->
    <header class="header">
        <div class="page-brand">
            <a class="link" href="index.html">
                    <span class="brand">Admin
                        <span class="brand-tip">CAST</span>
                    </span>
                <span class="brand-mini">AC</span>
            </a>
        </div>
        <div class="flexbox flex-1">
            <!--TOP-LEFT TOOLBAR-->
            <ul class="nav navbar-toolbar">
                <li>
                    <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                </li>
                <li>
                    <form class="navbar-search" action="javascript:;">
                        <div class="rel">
                            <span class="search-icon"><i class="ti-search"></i></span>
                            <input class="form-control" placeholder="Search here...">
                        </div>
                    </form>
                </li>
            </ul>
            <!-- TOP-LEFT TOOLBAR-->
            <!-- TOP-RIGHT TOOLBAR-->
            <ul class="nav navbar-toolbar">
                <li class="dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                        <img src="./assets/img/admin-avatar.png" />
                        <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="login.html"><i class="fa fa-power-off"></i>Logout</a>
                    </ul>
                </li>
            </ul>
            <!--TOP-RIGHT TOOLBAR-->
        </div>
    </header>
    <!--HEADER-->
    <!--SIDEBAR-->
    <nav class="page-sidebar" id="sidebar">
        <div id="sidebar-collapse">
            <div class="admin-block d-flex">
                <div>
                    <img src="./assets/img/admin-avatar.png" width="45px" />
                </div>
                <div class="admin-info">
                    <div class="font-strong">Brian Antwi</div><small>Administrator</small></div>
            </div>
            <ul class="side-menu metismenu">
                <li>
                    <a class="active" href="dashboard.php"><i class="sidebar-item-icon fa fa-th-large"></i>
                        <span class="nav-label">Dashboard</span>
                    </a>
                </li>
                <li class="heading">FEATURES</li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                        <span class="nav-label">Basic UI</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="add_category.php">Add Category</a>
                        </li>
                        <li>
                            <a href="manage_category.php">Manage Category</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                        <span class="nav-label">Product</span></a>

                </li>
                <li>
                    <a href="logout.php"><i class="sidebar-item-icon fa fa-sign-out"></i>
                        <span class="nav-label">Logout</span></a>

                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!--SIDEBAR-->