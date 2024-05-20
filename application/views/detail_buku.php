<div class="class-fluid">
	
	<div class="card">
	 	<h5 class="card-header">Detail</h5>
	  		<div class="card-body">
	  			<?php foreach($buku as $buku): ?>
	  			<div class="row">
	  				<div class="col-md-4">
	  					<img src="<?php echo base_url(). '/uploads/'.$buku->gambar ?>"class="card-img-top">
	  				</div>
	  				<div class="col-md-8">
	  					<table class="table">
	  						<tr>
	  							<td>Judul Buku</td>
	  							<td><strong><?php echo $buku->judul_buku?></strong></td>
	  						</tr>

	  						<tr>
	  							<td>Keterangan</td>
	  							<td><strong><?php echo $buku->keterangan?></strong></td>
	  						</tr>

	  						<tr>
	  							<td>kategori</td>
	  							<td><strong><?php echo $buku->kategori?></strong></td>
	  						</tr>

	  						<tr>
	  							<td>Penerbit</td>
	  							<td><strong><?php echo $buku->penerbit?></strong></td>
	  						</tr>


	  						<tr>
	  							<td>Jumlah Halaman</td>
	  							<td><strong><?php echo $buku->jml_hal?></strong></td>
	  						</tr>


	  						<tr>
	  							<td>Tahun Terbit</td>
	  							<td><strong><?php echo $buku->thn_terbit?></strong></td>
	  						</tr>

	  						<tr>
	  							<td>Pengarang</td>
	  							<td><strong><?php echo $buku->pengarang?></strong></td>
	  						</tr>

	  					</table>
	  					<?php echo anchor('dashboard/index/', '<div class="btn btn-sm btn-primary">Kembali</div>') ?>

	  				</div>
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
        <form action="<?php echo base_url(). 'admin/data_pelanggan/tambah_aksi';?>" method="POST">
      
       <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_pelanggan" class="form-control">
      </div>

       <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat_pelanggan" class="form-control">
      </div>

       <div class="form-group">
            <label>No. Handphone</label>
            <input type="text" name="nohp_pelanggan" class="form-control">
      </div>
          <div class="form-group">
            <label>Tanggal Peminjaman</label>
            <input type="date" name="tgl_pinjam" class="form-control">
      </div>

      <div class="form-group">
            <label>Tanggal pengembalian</label>
            <input type="date" name="tgl_kembali" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
      </div>

    </form>
    </div>
  </div>
</div>
</div>
	  		<?php endforeach; ?>
			</div>
	</div>
</div>