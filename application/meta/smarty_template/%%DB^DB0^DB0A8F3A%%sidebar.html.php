<?php /* Smarty version 2.6.19, created on 2016-11-24 04:19:01
         compiled from tpl/sidebar.html */ ?>
<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" ng-class="{'page-sidebar-menu-closed': settings.layout.pageSidebarClosed}">
        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
        <li class="sidebar-search-wrapper">
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
            <form class="sidebar-search sidebar-search-bordered" action="#" method="POST">
                <a href="javascript:;" class="remove">
                    <i class="icon-close"></i>
                </a>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <a href="javascript:;" class="btn submit">
                            <i class="icon-magnifier"></i>
                        </a>
                    </span>
                </div>
            </form>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <li class="start nav-item">
            <a href="#/dashboard.html">
                <i class="icon-home"></i>
                <span class="title">首页</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-user"></i>
                <span class="title">客户中心</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="#/client.html">
                        <i class="icon-puzzle"></i> 客户管理</span>
                    </a>
                </li>
                <li>
                    <a href="#/client_new">
                        <i class="icon-paper-clip"></i> 客户新建</span>
                    </a>
                </li>
                <li>
                    <a href="#/file_upload.html">
                        <i class="icon-paper-clip"></i> 客户导入</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">AngularJS Features</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="#/ui_bootstrap.html">
                        <i class="icon-puzzle"></i> UI Bootstrap</span>
                    </a>
                </li>
                <li>
                    <a href="#/file_upload.html">
                        <i class="icon-paper-clip"></i> File Upload</span>
                    </a>
                </li>
                <li>
                    <a href="#/ui_select.html">
                        <i class="icon-check"></i> UI Select</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-wrench"></i>
                <span class="title">jQuery Plugins</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="#/form-tools">
                        <i class="icon-puzzle"></i> Form Tools </a>
                </li>
                <li>
                    <a href="#/pickers">
                        <i class="icon-calendar"></i> Date & Time Pickers </a>
                </li>
                <li>
                    <a href="#/dropdowns">
                        <i class="icon-refresh"></i> Custom Dropdowns </a>
                </li>
                <li>
                    <a href="#/tree">
                        <i class="icon-share"></i> Tree View </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-briefcase"></i> Datatables
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#/datatables/managed.html">
                                <i class="icon-tag"></i> Managed Datatables </a>
                        </li>
                        <li>
                            <a href="#/datatables/ajax.html">
                                <i class="icon-refresh"></i> Ajax Datatables </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="#/profile/dashboard" id="sidebar_menu_link_profile">
                <i class="icon-user"></i>
                <span class="title">User Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#/todo">
                <i class="icon-check"></i>
                <span class="title">Task & Todo</span>
            </a>
        </li>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>