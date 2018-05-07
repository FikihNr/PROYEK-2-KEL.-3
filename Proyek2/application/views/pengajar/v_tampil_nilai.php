<?php
$this->load->view('pengajar/template/head');
$this->load->view('pengajar/template/topbar');
$this->load->view('pengajar/template/sidebar');
?>

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Input Data Pengajar</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
				    <section class="content">
<div class="form-group">
<form action="<?php echo base_url();?>index.php/pengajar/crud_nilai/tambah_aksi" method="post">
  <label>Mata Pelajaran</label><br>
  <select type="text" name="id_mapel" class="form-control">
  	<?php foreach ($mapel as $row) { ?>
  	<option value="<?php echo "$row->id_mapel"; ?>"><?php echo $row->nama_mapel ?></option>
  	<?php } ?>
  </select><br>
  <label>Kelas</label><br>
  <select type="text" name="id_kelas" class="form-control">
  	<?php foreach ($kelas as $row) { ?>
  	<option value="<?php echo "$row->id_kelas"; ?>"><?php echo $row->nama_kelas ?></option>
  	<?php } ?>
  </select><br>
  <label>Nama Pengajar</label><br>
  <select type="text" name="id_pengajar" class="form-control">
  	<?php foreach ($pengajar as $row) { ?>
  	<option value="<?php echo "$row->id_pengajar"; ?>"><?php echo $row->nama_pengajar ?></option>
  	<?php } ?>
  </select><br>
  <label>Siswa</label><br>
  <select type="text" name="id_siswa" class="form-control">
  	<?php foreach ($siswa as $row) { ?>
  	<option value="<?php echo "$row->id_siswa"; ?>"><?php echo $row->nama_siswa ?></option>
  	<?php } ?>
  </select><br>

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
	<section class="content-header">
    <h1>
        Data Pengajar
           </h1>
           <br>
           <?php if (!isset($id)) { ?>
           <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Tambah Data</button>
           <?php } ?>
    <!-- Tombol untuk menampilkan modal-->
	<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
        <li class="active">Data Pengajar</li>
    </ol>
    <?php if (isset($id)) { ?>
    <form method="post" action="<?php echo base_url('index.php/pengajar/crud_nilai/update/') ?><?php echo "$id" ?>">
	    <table>
	    	<tr>
	    		<td>
			    	<label>Nama Siswa </label>
	    		</td>
	    		<td> : </td>
	    		<td>
	    			<div class="form-group">
			    		<input type="text" value="<?php echo "$nama"; ?>" disabled="" name="nama_siswa">	
			    	</div>
	    		</td>
	    	</tr>
	    	<tr>
	    		<td>
	    			<label>Nilai </label>
	    		</td>
	    		<td> : </td>
	    		<td>
	    			<div class="form-group">
			    		<input type="text" value="<?php echo "$nilaisiswa" ?>" name="nilai">	
			    	</div>
	    		</td>
	    	</tr>
	    </table>
	    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php } ?>
</section>
<section class="content">

<div id="container">
	
    <h1>
       
        
    </h1>
	
	
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th class="info">No</th>
			<th class="info">Mata Pelajaran</th>
			<th class="info">Kelas</th>
			<th class="info">Pengajar</th>
			<th class="info">Siswa</th>
			<th class="info">Nilai</th>
			<th class="info">Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($nilai as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama_mapel  ?></td>
			<td><?php echo $u->nama_kelas ?></td>
			<td><?php echo $u->nama_pengajar ?></td>
			<td><?php echo $u->nama_siswa ?></td>
			<td><?php echo $u->nilai ?></td>
			<td>
			      <a href="<?php echo base_url('index.php/pengajar/crud_nilai/insertnilai/') ?><?php echo $u->id_laporan_nilai ?><?php echo "/$u->nama_siswa" ?><?php echo "/$u->nilai" ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>

			</td>
		</tr>
		<?php } ?>
	</table>
</div>
</section>
  <?
$this->load->view('pengajar/template/js');

?>

  <?php
  $this->load->view('pengajar/template/foot');
  ?>