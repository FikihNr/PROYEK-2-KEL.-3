<?php
$this->load->view('admin/template/head');
$this->load->view('admin/template/topbar');
$this->load->view('admin/template/sidebar');
?>
<div class="container">   
  
</div>
  <section class="content-header">
    <h1>
        Data Kelas
           </h1>
           <br>
     
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
        <li class="active">Data Kelas</li>
    </ol>
</section>
<section class="content">

<div class="container-fluid" id="container">
<?php foreach($kelas as $u){ ?>
<form action="<?php echo base_url('index.php/admin/crud_kelas/update/');?><?php echo $u->id_kelas ?>" method="post">
  <label>nama</label><br>
  <input type="text" name="nama" value="<?php echo $u->nama_kelas ?>" class="form-control"><br>
  
  <input type="submit" name="edit" class="btn btn-primary" value="Edit">
  <a href="<?php echo base_url('index.php/admin/crud_kelas/tambah'); ?>" type="submit" name="kembali" class="btn btn-info">Kembali</a>
</form>
<?php } ?>
</div>
</section>
  <?
$this->load->view('admin/template/js');

?>

  <?php
  $this->load->view('admin/template/foot');
  ?>