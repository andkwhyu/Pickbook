<div class="container-fluid">
  <h3><i class="fas fa-book-open fa-sm"></i> Data Buku</h3>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus fa-sm"></i> Tambah Buku</button>

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Judul Buku</th>
			<th>Keterangan</th>
			<th>Kategori</th>
      <th>Penerbit</th>
      <th>Jumlah Halaman</th>
      <th>Tahun Terbit</th>
      <th>Pengarang</th>
			<th colspan="2">Aksi</th>
		</tr>
	

	<?php 
	$no=1;
	foreach ($buku as $buku) : ?>

	<tr>
		<td><?php echo $no++?></td>
		<td><?php echo $buku->judul_buku?></td>
		<td><?php echo $buku->keterangan?></td>
		<td><?php echo $buku->kategori?></td>
    <td><?php echo $buku->penerbit?></td>
    <td><?php echo $buku->jml_hal?></td>
    <td><?php echo $buku->thn_terbit?></td>
    <td><?php echo $buku->pengarang?></td>
		<td><?php echo anchor('admin/data_buku/edit/' .$buku->id_buku, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
		<td><?php echo anchor('admin/data_buku/hapus/'.$buku->id_buku, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?></td>
	</tr>

	 <?php endforeach;?>
	</table>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_buku/tambah_aksi';?>" method="POST" enctype="multipart/form-data">
      
       <div class="form-group">
            <label>Judul Buku</label>
            <input type="text" name="judulbuku" class="form-control">
      </div>

       <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
      </div>

       <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control">
      </div>
          <div class="form-group">
            <label>Penerbit</label>
            <input type="text" name="penerbit" class="form-control">
      </div>

      <div class="form-group">
            <label>Jumlah Halaman</label>
            <input type="text" name="jml_hal" class="form-control">
      </div>

      <div class="form-group">
            <label>Tahun Terbit</label>
            <input type="text" name="thn_terbit" class="form-control">
      </div>

       <div class="form-group">
            <label>Pengarang</label>
            <input type="text" name="pengarang" class="form-control">
      </div>

       <div class="form-group">
            <label>Cover Buku</label>
            <input type="file" name="gambar" class="form-control">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

    </form>
    </div>
  </div>
</div>
</div>