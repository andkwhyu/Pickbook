<div class="container-fluid">
	<h3> <i class="fas fa-edit">Edit Buku</i></h3>
	
	<?php foreach ($buku as $buku) : ?>

		
		<form method="POST" action="<?php echo base_url(). 'admin/data_buku/update'?>" >

		<div class="for-group">
            <label>Judul Buku</label>
            <input type="text" name="judul_buku" class="form-control" value="<?php echo $buku->judul_buku ?>">
      	</div>

      	<div class="for-group">
            <label>Keterangan</label>
            <input type="hidden" name="id_buku " class="form-control" value="<?php echo $buku->id_buku ?>">
            <input type="text" name="keterangan" class="form-control" value="<?php echo $buku->keterangan ?>">
      	</div>

      	<div class="for-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" value="<?php echo $buku->kategori ?>">
      	</div>


            <div class="for-group">
            <label>Penerbit</label>
            <input type="text" name="penerbit" class="form-control" value="<?php echo $buku->penerbit ?>">
            </div>


            <div class="for-group">
            <label>Jumlah Halaman</label>
            <input type="text" name="jml_hal" class="form-control" value="<?php echo $buku->jml_hal ?>">
            </div>


            <div class="for-group">
            <label>Tahun Terbit</label>
            <input type="text" name="thn_terbit" class="form-control" value="<?php echo $buku->thn_terbit ?>">
            </div>


            <div class="for-group">
            <label>Pengarang</label>
            <input type="text" name="pengarang" class="form-control" value="<?php echo $buku->pengarang ?>">
            </div>

      	<button type="submit" class="btn btn-primary btn-sm">Simpan</button>

		</form>

	<?php endforeach;  ?>

</div>