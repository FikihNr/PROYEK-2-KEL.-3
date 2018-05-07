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
                
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-database"></i>
                    <span>Master Data</span>
                    <i class="fa fa-angle-left pull-right"></i> 
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/admin/crud_pengajar/tambah_pengajar"><i class="fa fa-graduation-cap"></i> Data Pengajar</a></li>
                    <li><a href="<?php echo base_url();?>index.php/admin/crud_pelajar/tambah_pelajar"><i class="fa fa-users"></i> Data Pelajar</a></li>
                    <li><a href="<?php echo base_url();?>index.php/admin/crud_ortu/tambah_ortu"><i class="fa fa-user"></i> Data Orang Tua</a></li>
                    <li><a href="<?php echo base_url();?>index.php/admin/crud_kelas/tambah"><i class="fa fa-bank"></i> Data Kelas</a></li>
                    <li><a href="<?php echo base_url();?>index.php/admin/crud_mapel/tambah"><i class="fa fa-book"></i> Mata Pelajaran</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart"></i> <span>Laporan</span> 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url()?>index.php/chat/index"><i class="fa fa-bar-chart"></i> Laporan Absensi</a></li>
                    <li><a href="#"><i class="fa fa-bar-chart"></i> Laporan Nilai</a></li>
                </ul>
            </li>            
                   
            
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">