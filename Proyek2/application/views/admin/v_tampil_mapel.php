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
					<h4 class="modal-title">Input Data Mata Pelajaran</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
				    <section class="content">
<div class="form-group">
<form action="<?php echo base_url();?>index.php/admin/crud_mapel/tambah_aksi" method="post">
  <label>Nama Mata Pelajaran</label><br>
  <input type="text" name="nama_mapel" class="form-control"><br>
  

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
        Data Mata Pelajaran
           </h1>
           <br>
    <!-- Tombol untuk menampilkan modal-->
	<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Tambah Data</button>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
        <li class="active">Data Mata Pelajaran</li>
    </ol>
</section>
<section class="content">

<div id="container">
	
    <h1>
       
        
    </h1>
	
	
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th class="info">No</th>
			<th class="info">Nama Mata Pelajaran</th>
			<th class="info">Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($mata_pelajaran as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama_mapel ?></td>
			
			<td>
			     <a href="<?php echo base_url('index.php/admin/crud_mapel/edit/'); ?><?php echo $u->id_mapel ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
			     
				<a href="<?php echo base_url('index.php/admin/crud_mapel/hapus/'); ?><?php echo $u->id_mapel ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>

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