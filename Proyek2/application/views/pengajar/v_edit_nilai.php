<?php
$this->load->view('pengajar/template/head');
$this->load->view('pengajar/template/topbar');
$this->load->view('pengajar/template/sidebar');
?>
<div class="container">   
  
</div>
  <section class="content-header">
    <h1>
        Data Nilai
           </h1>
           <br>
     
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
        <li class="active">Data Nilai</li>
    </ol>
</section>
<section class="content">

<div class="container-fluid" id="container">
<?php foreach($nilai as $u){ ?>
<form action="<?php echo base_url('index.php/pengajar/crud_nilai/update/');?><?php echo $u->id_nilai ?>" method="post">
  <label>Mata Pelajaran</label><br>
  <input type="text" value="<?php echo $u->Id_Mapel ?>" name="Id_Mapel" class="form-control"><br>
  <label>Kelas</label><br>
  <input type="text" name="Id_Kelas" value="<?php echo $u->Id_Kelas ?>" class="form-control"><br>
  <label>Pengajar</label><br>
  <input type="text" name="Id_Pengajar" value="<?php echo $u->Id_Pengajar ?>" class="form-control"><br>
  <label>Siswa</label><br>
  <input type="text" name="Id_Siswa" value="<?php echo $u->Id_Siswa ?>" class="form-control"><br>
  <label>Mata Pelajaran</label><br>
  <input type="text" name="Mapel" value="<?php echo $u->Mapel ?>" class="form-control"><br>
  <label>Nilai</label><br>
  <input type="text" name="Nilai" value="<?php echo $u->Nilai ?>" class="form-control"><br>

  <input type="submit" name="edit" class="btn btn-primary" value="Edit">
  <a href="<?php echo base_url('index.php/pengajar/crud_nilai/tambah'); ?>" type="submit" name="kembali" class="btn btn-info">Kembali</a>
</form>
<?php } ?>
</div>
</section>
  <?
$this->load->view('pengajar/template/js');

?>

  <?php
  $this->load->view('pengajar/template/foot');
  ?>