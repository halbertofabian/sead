<div class="main-header pb-2 pt-2" data-background-color="blue2">
    <div class="nav-top">
        <div class="container d-flex flex-row">
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="icon-menu"></i>
                </span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <!-- Logo Header -->
            <a href="<?php echo HTTP_HOST ?>" class="logo d-flex align-items-center">
                <img src="<?php echo LOGO_BN ?>" alt="navbar brand" width="150" height="50" class="navbar-brand">
            </a>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg p-0">

                <div class="container-fluid p-0">
                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search ml-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pr-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control">
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a href="<?php //echo HTTP_HOST . 'pos' ?>" class="btn btn-white btn-sm"><i class="fas fa-file-invoice-dollar"></i> POS ctrl + 1</a>
                        </li> -->
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                                <li>
                                    <div class="dropdown-title d-flex justify-content-between align-items-center">
                                        Messages
                                        <a href="#" class="small">Mark all as read</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="../assets/img/jm_denis.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Jimmy Denis</span>
                                                    <span class="block">
                                                        How are you ?
                                                    </span>
                                                    <span class="time">5 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="../assets/img/chadengle.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Chad</span>
                                                    <span class="block">
                                                        Ok, Thanks !
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="../assets/img/mlane.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Jhon Doe</span>
                                                    <span class="block">
                                                        Ready for the meeting today...
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="../assets/img/talha.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Talha</span>
                                                    <span class="block">
                                                        Hi, Apa Kabar ?
                                                    </span>
                                                    <span class="time">17 minutes ago</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="notification">4</span>
                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                <li>
                                    <div class="dropdown-title">You have 4 new notification</div>
                                </li>
                                <li>
                                    <div class="notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="#">
                                                <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        New user registered
                                                    </span>
                                                    <span class="time">5 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Rahmad commented on Admin
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="../assets/img/profile2.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Reza send messages to you
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Farrah liked Admin
                                                    </span>
                                                    <span class="time">17 minutes ago</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fas fa-layer-group"></i>
                            </a>
                            <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                <div class="quick-actions-header">
                                    <span class="title mb-1">Quick Actions</span>
                                    <span class="subtitle op-8">Shortcuts</span>
                                </div>
                                <div class="quick-actions-scroll scrollbar-outer">
                                    <div class="quick-actions-items">
                                        <div class="row m-0">
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-danger rounded-circle">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </div>
                                                    <span class="text">Calendar</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-warning rounded-circle">
                                                        <i class="fas fa-map"></i>
                                                    </div>
                                                    <span class="text">Maps</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-info rounded-circle">
                                                        <i class="fas fa-file-excel"></i>
                                                    </div>
                                                    <span class="text">Reports</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-success rounded-circle">
                                                        <i class="fas fa-envelope"></i>
                                                    </div>
                                                    <span class="text">Emails</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-primary rounded-circle">
                                                        <i class="fas fa-file-invoice-dollar"></i>
                                                    </div>
                                                    <span class="text">Invoice</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-secondary rounded-circle">
                                                        <i class="fas fa-credit-card"></i>
                                                    </div>
                                                    <span class="text">Payments</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link quick-sidebar-toggler">
                                <i class="fa fa-th"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm" style="background-color: #fff; border-radius: 50px;">
                                    <span style="font-size: 25px; padding: 10px;">H</span>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg" style="background-color: #fff; border-radius: 50px;">
                                                <span style="font-size: 25px; padding: 10px;">H</span>
                                            </div>
                                            <div class="u-text">
                                                <h4>Hizrian</h4>
                                                <p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Mi perfil</a>
                                        <a class="dropdown-item" href="#">Mi cuenta</a>
                                        <a class="dropdown-item" href="#">Mi crédito</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Configuración de la cuenta</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo HTTP_HOST.'salir' ?>">Salir</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
    </div>
    <div class="nav-bottom bg-white">
        <h3 class="title-menu d-flex d-lg-none">
            Menu
            <div class="close-menu"> <i class="flaticon-cross"></i></div>
        </h3>
        <div class="container d-flex flex-row">
            <ul class="nav page-navigation page-navigation-primary">

                <?php

                $menuLi = AppControlador::obtnerMenuAdmin();
                foreach ($menuLi as $key => $li) :
                ?>
                    <li class="nav-item submenu">
                        <a class="nav-link" data-toggle="collapse" href="<?php echo $li[0]['href'] ?>" class="collapsed" aria-expanded="false">
                            <?php echo $li[0]['icon'] ?>
                            <!-- <i class="link-icon icon-screen-desktop"></i> -->
                            <span class="menu-title"><?php echo $li[0]['label'] ?></span>
                        </a>
                        <div class="navbar-dropdown animated fadeIn" id="<?php echo $li[0]['href'] ?>">
                            <ul>
                                <?php foreach ($li[0]['modulos'] as $key => $ul) : ?>
                                    <li>
                                        <a href="<?php echo HTTP_HOST . $ul['href'] ?>"><?php echo $ul['label'] ?></a>
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                        </div>
                    </li>
                <?php endforeach; ?>

                <!-- <li class="nav-item submenu mega-menu dropdown">
                    <a class="nav-link" href="#">
                        <i class="link-icon icon-film"></i>
                        <span class="menu-title">Project</span>
                    </a>
                    <div class="navbar-dropdown animated fadeIn">
                        <div class="col-group-wrapper row">
                            <div class="col-group col-md-4">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="category-heading">Basic Elements</p>
                                        <div class="submenu-item">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li><a href="#">Accordion</a></li>
                                                        <li><a href="#">Buttons</a></li>
                                                        <li><a href="#">Badges</a></li>
                                                        <li><a href="#">Breadcrumbs</a></li>
                                                        <li><a href="#">Dropdown</a></li>
                                                        <li><a href="#">Modals</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li><a href="#">Progress bar</a></li>
                                                        <li><a href="#">Pagination</a></li>
                                                        <li><a href="#">Tabs</a></li>
                                                        <li><a href="#">Typography</a></li>
                                                        <li><a href="#">Tooltip</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-group col-md-4">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="category-heading">Advanced Elements</p>
                                        <div class="submenu-item">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li><a href="#">Datatables</a></li>
                                                        <li><a href="#">Carousel</a></li>
                                                        <li><a href="#">Clipboard</a></li>
                                                        <li><a href="#">Chart.js</a></li>
                                                        <li><a href="#">Loader</a></li>
                                                        <li><a href="#">Slider</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li><a href="#">Popup</a></li>
                                                        <li><a href="#">Notification</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-group col-md-4">
                                <p class="category-heading">Icons</p>
                                <ul class="submenu-item">
                                    <li><a href="#">Flaticons</a></li>
                                    <li><a href="#">Font Awesome</a></li>
                                    <li><a class="3">Simple Line Icons</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li> -->
            </ul>
        </div>
    </div>
</div>