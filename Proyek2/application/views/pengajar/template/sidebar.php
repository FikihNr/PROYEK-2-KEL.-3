<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
           
            <div class="pull-left info">
                <p>Selamat Datang <?php echo $username;?></p>

               
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-home"></i> <span>Home</span> 
                </a>
                 <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>Input Data</span>
                    <i class="fa fa-angle-left pull-right"></i> 
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url()?>index.php/pengajar/crud_nilai/tambah"><i class="fa fa-book"></i> Data Nilai</a></li>
                    <li><a href="#"><i class="fa fa-book"></i> Data Absensi</a></li>
                    
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url()?>index.php/chat/index">
                    <i class="fa fa-envelope"></i> <span>Bimbingan</span> 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart"></i> <span>Laporan</span> 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-bar-chart"></i> Laporan Absensi</a></li>
                    <li><a href="#"><i class="fa fa-bar-chart"></i> Laporan Nilai</a></li>
                </ul>
            </li>       
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">