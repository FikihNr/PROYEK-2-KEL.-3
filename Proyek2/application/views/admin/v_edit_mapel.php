<?php
$this->load->view('admin/template/head');
$this->load->view('admin/template/topbar');
$this->load->view('admin/template/sidebar');
?>
<div class="container">   
  
</div>
  <section class="content-header">
    <h1>
        Data Mata Pelajaran
           </h1>
           <br>
    <!-- Tombol untuk menampilkan modal-->
  
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
        <li class="active">Data Mata Pelajaran</li>
    </ol>
</section>
<section class="content">

<div class="container-fluid" id="container">
<?php foreach($mata_pelajaran as $u){ ?>
<form action="<?php echo base_url('index.php/admin/crud_mapel/update/');?><?php echo $u->id_mapel ?>" method="post">
  <label>Nama Mata Pelajaran</label><br>
  <input type="text" value="<?php echo $u->nama_mapel ?>" name="nama_mapel" class="form-control"><br>
 
  <input type="submit" name="edit" class="btn btn-primary" value="Edit">
  <a href="<?php echo base_url('index.php/admin/crud_mapel/tambah'); ?>" type="submit" name="kembali" class="btn btn-info">Kembali</a>
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