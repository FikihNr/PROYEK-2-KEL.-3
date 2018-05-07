<?php
$this->load->view('admin/template/head');
$this->load->view('admin/template/topbar');
$this->load->view('admin/template/sidebar');
?>
<div class="container">		
	
 
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Input Data Pelajar</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
				    <section class="content">
<div class="form-group">
<form action="<?php echo base_url();?>index.php/admin/crud_pelajar/input_data_pelajar" method="post">
  <label>Nama</label><br>
  <input type="text" name="nama" class="form-control"><br>
  <label>NIS</label><br>
  <input type="text" name="NIS" class="form-control"><br>
  <label>Username</label><br>
  <input type="text" name="username" class="form-control"><br>
  <label>Password</label><br>
  <input type="text" name="password" class="form-control"><br>
  <label>Jenis Kelamin</label><br>
  <select name="jenis_kelamin"  class="form-control">
                          <option value="laki-laki">Laki-laki</option>
                          <option value="perempuan">Perempuan</option>
                        </select><br>
    <label>Alamat</label><br>
  <input type="text" name="alamat" class="form-control"><br>

  <input type="submit" name="Tambah" class="btn btn-primary" value="Submit">
     </form>
   </div>
  </section>
				</div>
				<!-- footer modal -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
   </div>
	<section class="content-header">
    <h1>
        Data Pelajar
           </h1>
           <br>
    <!-- Tombol untuk menampilkan modal-->
	<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Tambah Data</button>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
        <li class="active">Data Pelajar</li>
    </ol>
</section>
<section class="content">

<div id="container">
	
    <h1>
       
        
    </h1>
	
	
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th class="info">No</th>
			<th class="info">Nama</th>
			<th class="info">NIS</th>
			<th class="info">Username</th>
			<th class="info">Password</th>
			<th class="info">Jenis Kelamin</th>
			<th class="info">Alamat</th>
			<th class="info">Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($siswa as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama_siswa ?></td>
			<td><?php echo $u->NIS ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->password ?></td>
			<td><?php echo $u->jenis_kelamin ?></td>
			<td><?php echo $u->alamat ?></td>
			<td>
				<a href="<?php echo base_url('index.php/admin/crud_pelajar/edit_pelajar/'); ?><?php echo $u->id_siswa ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
				
				<a href="<?php echo base_url('index.php/admin/crud_pelajar/hapus_data_pelajar/'); ?><?php echo $u->id_siswa ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
</section>
  <?
$this->load->view('admin/template/js');

?>

  <?php
  $this->load->view('admin/template/foot');
  ?>