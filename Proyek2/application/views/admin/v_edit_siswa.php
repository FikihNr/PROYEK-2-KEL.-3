<?php
$this->load->view('admin/template/head');
$this->load->view('admin/template/topbar');
$this->load->view('admin/template/sidebar');
?>
<div class="container">   
  
</div>
  <section class="content-header">
    <h1>
        Data Pelajar
           </h1>
           <br>
    <!-- Tombol untuk menampilkan modal-->
  
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
        <li class="active">Data Pelajar</li>
    </ol>
</section>
<section class="content">

<div class="container-fluid" id="container">
<?php foreach($siswa as $u){ ?>
<form action="<?php echo base_url('index.php/admin/crud_pelajar/update_data_pelajar/');?><?php echo $u->id_siswa ?>" method="post">
  <label>Nama</label><br>
  <input type="text" value="<?php echo $u->nama_siswa ?>" name="nama" class="form-control"><br>
  <label>NIS</label><br>
  <input type="text" name="NIS" value="<?php echo $u->NIS ?>" class="form-control"><br>
  <label>Username</label><br>
  <input type="text" name="username" value="<?php echo $u->username ?>" class="form-control"><br>
  <label>Password</label><br>
  <input type="text" name="password" value="<?php echo $u->password ?>" class="form-control"><br>
  <label>Jenis Kelamin</label><br>
  <select name="jenis_kelamin" required="" class="form-control">
                          <option class="active">--Pilih Jenis Kelamin--</option>
                          <option value="laki-laki">Laki-laki</option>
                          <option value="perempuan">Perempuan</option>
                        </select><br>
    <label>Alamat</label><br>
  <input type="text" name="alamat" value="<?php echo $u->alamat ?>" class="form-control"><br>

  <input type="submit" name="edit" class="btn btn-primary" value="Edit">
  <a href="<?php echo base_url('index.php/admin/crud_pelajar/tambah'); ?>" type="submit" name="kembali" class="btn btn-info">Kembali</a>
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