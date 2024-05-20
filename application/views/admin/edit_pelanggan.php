<div class="container-fluid">
	<h3> <i class="fas fa-edit">Edit Pelanggan</i></h3>
	
	<?php foreach ($plggn as $pelanggan) : ?>

		
		<form method="POST" action="<?php echo base_url(). 'admin/data_pelanggan/aksi_edit'?>" >

		<div class="for-group">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control" value="<?php echo $pelanggan->nama_pelanggan?>">
      	</div>

      	<div class="for-group">
            <label>Alamat Pelanggan</label>
            <input type="hidden" name="id_pelanggan " class="form-control" value="<?php echo $pelanggan->id_pelanggan ?>">
            <input type="text" name="alamat_pelanggan" class="form-control" value="<?php echo $pelanggan->alamat_pelanggan?>">
      	</div>

      	<div class="for-group">
            <label>No. Handphone</label>
            <input type="text" name="nohp_pelanggan" class="form-control" value="<?php echo $pelanggan->nohp_pelanggan ?>">
      	</div>


            <div class="for-group">
            <label>Tanggal peminjaman</label>
            <input type="date" name="tgl_pinjam" class="form-control" value="<?php echo $pelanggan->tgl_pinjam ?>">
            </div>


            <div class="for-group">
            <label>Tanggal pengembalian</label>
            <input type="date" name="tgl_kembali" class="form-control" value="<?php echo $pelanggan->tgl_kembali ?>">
            </div>
                  <br>
      	<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            <button type="submit" class="btn btn-secondary btn-sm">kembali</button>

		</form>

	<?php endforeach;  ?>

</div>