<div class="container-fluid">
<h3><i class="fas fa-user fa-sm"></i> Data Pelanggan</button></h3>

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th>Alamat Pelanggan</th>
			<th>No. Handphone</th>
			<th>Tanggal Peminjaman</th>
			<th>Tanggal Pengembalian</th>  
			<th colspan="2">Aksi</th>
		</tr>

		<?php
		$no=1; 
		foreach ($plggn as $pelanggan) : ?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $pelanggan->nama_pelanggan?></td>
				<td><?php echo $pelanggan->alamat_pelanggan?></td>
				<td><?php echo $pelanggan->nohp_pelanggan?></td>
				<td><?php echo $pelanggan->tgl_pinjam?></td>
				<td><?php echo $pelanggan->tgl_kembali?></td>

				<td><?php echo anchor('admin/data_pelanggan/edit/'.$pelanggan->id_pelanggan, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>

				<td><?php echo anchor('admin/data_pelanggan/hapus/'.$pelanggan->id_pelanggan, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?></td>
			</tr>

			
			
			<?php endforeach; ?>
	</table>

</div>
